<?php

  require_once '../../DB_Connect.php';

  // connecting to database
  $con = new DB_Connect();
  $con1=$con->connect();

  //performance variables
  $weight_speed = 0.2;
  $weight_accuracy = 0.8;
  $benchmark_score = 100;
  $date_time_filter = "2023-03-18 10:00:00";

  // computing fully autonomous benchmark score
  $fully_autonomous_score = 0;
  $no_of_autonomous_runs = 0;
  $sum_of_autonomous_point = 0;
  $sql = "SELECT * FROM demo_leaderboard WHERE demo_event = 'AIUK 2023' AND date_added >= '".$date_time_filter."' AND fname = '---FULLY AUTONOMOUS---' ORDER BY total_points DESC";
  $result = mysqli_query($con1, $sql);
  if (mysqli_num_rows( $result ) > 0 ) {
      while($row = mysqli_fetch_array($result)) {
          $autonomous_score = ((($row["speed"] * $weight_speed) + ($row["accuracy"] * $weight_accuracy)));
          $sum_of_autonomous_score += $autonomous_score;
          $no_of_autonomous_runs++; 
      }
      $fully_autonomous_score = $sum_of_autonomous_score / $no_of_autonomous_runs;
  }
  if ($fully_autonomous_score <= 0){
    $fully_autonomous_score = 1;
  }

  // mean user performance 
  $no_of_users = 0;
  $sum_of_point = 0;
  $sql = "SELECT * FROM demo_leaderboard WHERE demo_event = 'AIUK 2023' AND date_added >= '".$date_time_filter."' AND fname != '---FULLY AUTONOMOUS---' ORDER BY total_points DESC";
  $result = mysqli_query($con1, $sql);
  if (mysqli_num_rows( $result ) > 0 ) {
      while($row = mysqli_fetch_array($result)) {
          $total_point = ((($row["speed"] * $weight_speed) + ($row["accuracy"] * $weight_accuracy)) * $benchmark_score) / $fully_autonomous_score; // weighting speed and accuracy
          $sum_of_point += $total_point;
          $no_of_users++;
      }
  }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>AIUK 2023 Demo Leaderboard | UoS HutSim</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body class="px-4">
        <div style="text-align: right; max-width: 960px; margin-right: auto; margin-left: auto; padding-top: 10px; font-size: 0.9em;">
            <a href="/demo/aiuk2023/" class="me-3">Home</a> 
            <a href="/demo/aiuk2023/hutsim/">Simulator</a>
        </div>
        <div class="shadow p-4 mb-5 bg-body-tertiary rounded" style="max-width: 960px; text-align: center; border: solid 1px black; margin-right: auto; margin-left: auto; margin-top:20px; padding-bottom: 20px;">
          <div class="mb-1" style="text-align: right;">
            Benchmark score: <?php echo number_format(($benchmark_score),2); ?> <br>
            Mean user performance: <?php echo number_format(($sum_of_point/$no_of_users),2); ?> 
          </div>
          <h4 id="contributions">AIUK 2023 Demo Leaderboard</h4>
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
                    <th scope="col">Score</th>
                  </tr>
                </thead>
                <tbody>
                    <?php

                    $s_no = 1;
                    $sql = "SELECT * FROM demo_leaderboard WHERE demo_event = 'AIUK 2023' AND date_added >= '".$date_time_filter."'  ORDER BY total_points DESC";
                    $result = mysqli_query($con1, $sql);
                    if ( mysqli_num_rows( $result ) > 0 ) {
                        while($row = mysqli_fetch_array($result)) {
                            // $total_point = $row["total_points"]*100/1153.33; // subtracting fully autonomous mode performance
                            $total_point = ((($row["speed"] * $weight_speed) + ($row["accuracy"] * $weight_accuracy)) * $benchmark_score) / $fully_autonomous_score; // weighting speed and accuracy
                            // $total_point = ((($row["completion_time"] * $weight_speed / 90) + ($row["accuracy"] * $weight_accuracy)) * $benchmark_score) / $fully_autonomous_score; // weighting speed and accuracy
                            if ($row["fname"] == "---FULLY AUTONOMOUS---"){
                                echo "<tr style='background-color: #CC6B00'>";
                            } else {
                                echo "<tr>";
                            }

                            echo "  <td>".$s_no++."</td>
                                    <td>".$row["fname"]."</td>
                                    <td>".$row["completion_time"]."</td>
                                    <!-- <td>".$row["task_target"]."</td> -->
                                    <td>".$row["speed"]."</td>
                                    <td>".$row["accuracy"]."</td>
                                    <td>".number_format($total_point,2)."</td>
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