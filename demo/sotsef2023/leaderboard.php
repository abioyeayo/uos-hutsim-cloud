<?php

  require_once '../../DB_Connect.php';

  // connecting to database
  $con = new DB_Connect();
  $con1=$con->connect();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>SOTSEF 2023 Demo Leaderboard | UoS HutSim</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body class="px-4">
        <div style="text-align: right; max-width: 960px; margin-right: auto; margin-left: auto; padding-top: 10px; font-size: 0.9em;">
            <a href="/demo/sotsef2023/" class="me-3">Home</a> 
            <a href="/demo/sotsef2023/hutsim/">Simulator</a>
        </div>
        <div class="shadow p-4 mb-5 bg-body-tertiary rounded" style="max-width: 960px; text-align: center; border: solid 1px black; margin-right: auto; margin-left: auto; margin-top:20px; padding-bottom: 20px;">
          <br>
          <h4 id="contributions">SOTSEF 2023 Demo Leaderboard</h4>
          <div class="table-responsive p-3">
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th scope="col">Position</th>
                    <th scope="col">Name</th>
                    <th scope="col">Time (Seconds)</th>
                    <!-- <th scope="col">Targets</th> -->
                    <th scope="col">Speed (Targets/Minute)</th>
                    <th scope="col">Accuracy</th>
                    <th scope="col">Total Points</th>
                  </tr>
                </thead>
                <tbody>
                    <?php

                    $s_no = 1;
                    $sql = "SELECT * FROM demo_leaderboard WHERE demo_event = 'SOTSEF 2023' AND date_added >= '2023-03-18 10:00:00'  ORDER BY total_points DESC";
                    $result = mysqli_query($con1, $sql);
                    if ( mysqli_num_rows( $result ) > 0 ) {
                        while($row = mysqli_fetch_array($result)) {
                            $total_point = $row["total_points"] - 1533.33; // subtracting fully autonomous mode performance
                            echo "<tr>
                                    <td>".$s_no++."</td>
                                    <td>".$row["fname"]."</td>
                                    <td>".$row["completion_time"]."</td>
                                    <!-- <td>".$row["task_target"]."</td> -->
                                    <td>".$row["speed"]."</td>
                                    <td>".$row["accuracy"]."</td>
                                    <td>".$total_point."</td>
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