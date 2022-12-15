<?php

  require_once '../DB_Connect.php';

  // connecting to database
  $con = new DB_Connect();
  $con1=$con->connect();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin | UoS HutSim</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div style="max-width: 960px; text-align: center; border: solid 1px black; margin-right: auto; margin-left: auto; margin-top:20px; padding-bottom: 20px;">
          <br><br>
          <h4 id="contributions">Active HutSim Connections</h4>
          <br>
          <div class="table-responsive p-5">
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th scope="col">Date</th>
                  <th scope="col">Process ID</th>
                  <th scope="col">Port Number</th>
                  <th scope="col">View</th>
                  <th scope="col">Disconnect</th>
                </tr>
              </thead>
              <tbody>

                <?php


                  $sql = "SELECT * FROM port_table WHERE port_status ='active'";
                  $result = mysqli_query($con1, $sql);
                  if ( mysqli_num_rows( $result ) > 0 ) {
                    while($row = mysqli_fetch_array($result)) {
                      echo "<tr>
                              <td>".$row["date_created"]."</td>
                              <td>".$row["process_id"]."</td>
                              <td>".$row["port_number"]."</td>
                              <td></td>
                              <td></td>
                            </tr>";
                    }
                  }

                ?>

              </tbody>
            </table>
          </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>