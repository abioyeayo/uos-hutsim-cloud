<?php

  require_once '../DB_Connect.php';

  // connecting to database
  $con = new DB_Connect();
  $con1=$con->connect();

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // kill related java pid instance
    $stopped_pid = $_POST['btn_stop_pid'];
    if ($stopped_pid != ""){
      echo exec('kill '.$stopped_pid);
      // echo exec("pkill -f 'java -jar hut.jar ".$stopped_pid."'");
      $stop_pid_alert = "Stopped HutSim PID: ".$stopped_pid;

      $sql = "UPDATE port_table SET `port_status` = 'disconnected', `process_ended` = NOW() WHERE process_id = '".$stopped_pid."' and port_status = 'active'";
      if(mysqli_query($con1, $sql)){
          // echo "Records updated successfully.";
      } else{
          echo "Error updating record: " . $con->error;
          exit();
      }
    }
  }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin | UoS HutSim</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div style="max-width: 960px; text-align: center; border: solid 1px black; margin-right: auto; margin-left: auto; margin-top:20px; padding-bottom: 20px;">
          <br>
          <h4 id="contributions">Active HutSim Connections</h4>
          <div class="table-responsive p-3">
            <div class="text-success mb-3">
              <?php echo $stop_pid_alert ?>
            </div>
            <form action="" method="post">
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th scope="col">S/No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Process ID</th>
                    <th scope="col">Process Info</th>
                    <th scope="col">Port Number</th>
                    <th scope="col">View</th>
                    <th scope="col">Disconnect</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                    $s_no = 1;
                    $sql = "SELECT * FROM port_table WHERE port_status ='active'";
                    $result = mysqli_query($con1, $sql);
                    if ( mysqli_num_rows( $result ) > 0 ) {
                      while($row = mysqli_fetch_array($result)) {
                        echo "<tr>
                                <td>".$s_no++."</td>
                                <td>".$row["date_created"]."</td>
                                <td>".$row["process_id"]."</td>
                                <td>".$row["process_info"]."</td>
                                <td>".$row["port_number"]."</td>
                                <td><a href='http://uos-hutsim.cloud:".$row["port_number"]."/' target='_blank'><button type='button' class='btn btn-outline-secondary btn-sm'>View Simulation</button></a></td>
                                <td><button type='submit' name='btn_stop_pid' value='".$row["process_id"]."' class='btn btn-outline-dark btn-sm'>Stop Process</button></td>
                              </tr>";
                      }
                    }

                  ?>

                </tbody>
              </table>
            </form>
          </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>