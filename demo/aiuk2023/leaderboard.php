<?php

  require_once '../../DB_Connect.php';

  // connecting to database
  $con = new DB_Connect();
  $con1=$con->connect();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>AI UK 2023 Demo Leaderboard | UoS HutSim</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div style="max-width: 960px; text-align: center; border: solid 1px black; margin-right: auto; margin-left: auto; margin-top:20px; padding-bottom: 20px;">
          <br>
          <h4 id="contributions">AI UK 2023 Demo Leaderboard</h4>
          <div class="table-responsive p-3">
            <div class="text-success mb-3">
              <?php echo $stop_pid_alert ?>
            </div>
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th scope="col">Position</th>
                    <th scope="col">Name</th>
                    <th scope="col">Speed (Targest/Minutes)</th>
                    <th scope="col">Time (Minutes)</th>
                    <th scope="col">Accuracy</th>
                    <th scope="col">Total Points</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>James Flenn</td>
                        <td>12.5</td>
                        <td>10</td>
                        <td>0.89</td>
                        <td>1381</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Micheal Higgins</td>
                        <td>11.9</td>
                        <td>10</td>
                        <td>0.89</td>
                        <td>1381</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Holly Martinez</td>
                        <td>11.6</td>
                        <td>10</td>
                        <td>0.89</td>
                        <td>1381</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Marin Adkins</td>
                        <td>11.2</td>
                        <td>10</td>
                        <td>0.89</td>
                        <td>1381</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cherish Hardy</td>
                        <td>10.8</td>
                        <td>10</td>
                        <td>0.89</td>
                        <td>1381</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Saul Dillon</td>
                        <td>10.5</td>
                        <td>10</td>
                        <td>0.89</td>
                        <td>1381</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Karissa Anthony</td>
                        <td>9.1</td>
                        <td>10</td>
                        <td>0.89</td>
                        <td>1381</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Erick Little</td>
                        <td>7.0</td>
                        <td>10</td>
                        <td>0.89</td>
                        <td>1381</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Easton Hickman</td>
                        <td>6.8</td>
                        <td>10</td>
                        <td>0.89</td>
                        <td>1381</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Anabelle Schmidt</td>
                        <td>6.3</td>
                        <td>10</td>
                        <td>0.89</td>
                        <td>1381</td>
                    </tr>
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