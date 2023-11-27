<?php

   require_once '../../../DB_Connect.php';

   // connecting to database
   $con = new DB_Connect();
   $con1=$con->connect();

   $base_url = "http://" . $_SERVER['HTTP_HOST'] . ":";

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Running | UoS HutSim</title>
      <style>
      .buttons {
            width: 200px;
            margin: 0 auto;
            display: inline;
            }

      .action_btn {
            width: 200px;
            margin: 0 auto;
            display: inline;
            }
      </style>
   </head>
   <body>
     <div style="max-width: 960px; text-align: center; border: solid 1px black; margin-left: auto; margin-right: auto; padding: 20px; margin-top: 20px;"> 
         <?php
            echo exec('java --version');
            echo "<br><br>";
            // initially starting from port 1024, but then changed to 4096 (2^12) because mysql connects on 3308
            $port = rand(4096, 65535);
            exec('java -jar hut.jar '.$port.'> /dev/null 2>&1 & echo $!', $output);
      
            // var_dump($output);
            echo "Process ID: ".$output[0]." | Port: ".$port;

            $process_id = $output[0];
            $process_info = "AIUK 2023 Demo";
            $port_number = $port;
            $port_status = "active";
            $created_by = "uos-web-user";

            // update port table
            $sql = "INSERT INTO port_table (process_id, process_info, port_number, port_status, created_by) VALUES ('" . $process_id . "', '" . $process_info . "', '" . $port_number . "', '" . $port_status . "', '" . $created_by . "')";
            if(mysqli_query($con1, $sql)){
               // echo "Records inserted successfully.";
            } else{
               echo "Error inserting record: " . $con->error;
               exit();
            }
         ?> 
         <br>
         <h2>HutSim simulator started</h2>
         <br>
         <form action="../new_record.php" method="post">
            <input type="hidden" name="stopped_pid" value="<?php echo $output[0]; ?>">
            <div class="buttons">
               <div class="action_btn">
                  <button class="action_btn" type="button"><a href='<?php echo $base_url . $port; ?>/preset/scenario?file-name=Demo.json' target='_blank' style='text-decoration:none; color: inherit;'>View Simulator</a></button>
                  <button class="action_btn" type="submit" value="Stop HutSim">Stop HutSim</button>
               </div>
            </div>
         </form>
         <br>
     </div>
   </body>
</html>

<?php

	// close db connect
	$con1->close();
?>