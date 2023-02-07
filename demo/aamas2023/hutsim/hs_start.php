<?php

   require_once '../../../DB_Connect.php';

   // connecting to database
   $con = new DB_Connect();
   $con1=$con->connect();

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Running | UoS HutSim</title>
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
            $process_info = "AAMAS 2023 Demo";
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
         <br>
         <a href='http://uos-hutsim.cloud:<?php echo $port; ?>/' target='_blank'>
             <button>View Simulator</button>
         </a>
         <form action="index.php" method="post" style="float: right;">
            <input type="hidden" name="stopped_pid" value="<?php echo $output[0]; ?>">
            <input type="submit" value="Stop HutSim" style="background-color: yellow;">
         </form>
     </div>
   </body>
</html>

<?php

	// close db connect
	$con1->close();
?>