<?php

    require_once '../DB_Connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reset | UoS HutSim</title>
    </head>
    <body>
        <div style="max-width: 960px; text-align: center; border: solid 1px black; margin-right: auto; margin-left: auto; padding-bottom: 20px;">
            <p>HutSim - hard reset</p>
            <div style="font-weight: bold;"> 
              <?php
                  // kill all java process
                //   echo exec("pkill -f 'java -jar hut.jar'");
                  echo exec("pkill -f 'java -jar'");
                  echo "All java processes have been terminated.<br><br>";

                  $sql = "UPDATE port_table SET `port_status` = 'disconnected', `process_ended` = NOW() WHERE port_status = 'active'";
                  if(mysqli_query($con1, $sql)){
                      // echo "Records updated successfully.";
                  } else{
                      echo "Error updating record: " . $con->error;
                      exit();
                  }
              ?> 
            </div>
            <div>
                <a href='/hutsim/' style="padding-right: 5px; text-decoration: none;">
                    <button>HutSim Dashboard</button>
                </a>
                <a href='/admin/' style="padding-left: 5px; text-decoration: none;">
                    <button>Admin Dashboard</button>
                </a>
            </div>
        </div>
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>