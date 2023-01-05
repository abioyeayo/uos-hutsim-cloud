<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Study SGP1AB | UoS HutSim</title>
    <style>
      input {
        margin-right: 5px;
      }
      .page-content-div {
        max-width: 940px; 
        border: solid 1px black; 
        margin-right: auto; 
        margin-left: auto; 
        margin-top: 5px; 
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <div style="max-width: 960px; text-align: center; border: solid 1px black; margin-right: auto; margin-left: auto; padding-bottom: 20px;">
      <h2>The speed vs accuracy trade-off in human-swarm interaction (SGP1AB)</h2>
      <!-- <p>In this study, you would be asked to assign UAVs to search grids in our custom-developed online HutSim simulator. 
        You would then be asked to identify if a human is present in the images returned by the UAV swarms. After this, you would be 
        required to complete a questionnaire to document your experience. You need to perform this experiment on a laptop or desktop computer.</p> -->
      <?php
            // echo exec('java --version');
            // echo "<br><br>";
            // // initially starting from port 1024, but then changed to 4096 (2^12) because mysql connects on 3308
            // $port = rand(4096, 65535);
            // exec('java -jar hut.jar '.$port.'> /dev/null 2>&1 & echo $!', $output);
      
            // // var_dump($output);
            // echo "Process ID: ".$output[0]." | Port: ".$port;

            // $process_id = $output[0];
            // $port_number = $port;
            // $port_status = "active";
            // $created_by = "uos-web-user";

            // // update port table
            // $sql = "INSERT INTO port_table (process_id, port_number, port_status, created_by) VALUES ('" . $process_id . "', '" . $port_number . "', '" . $port_status . "', '" . $created_by . "')";
            // if(mysqli_query($con1, $sql)){
            //    // echo "Records inserted successfully.";
            // } else{
            //    echo "Error inserting record: " . $con->error;
            //    exit();
            // }

        echo "Prolific ID: " . $_GET['PROLIFIC_PID'] . "<br>";
        echo "Study ID: " . $_GET['STUDY_ID'] . "<br>";
        echo "Session ID: " . $_GET['SESSION_ID'] . "<br>";
      ?> 
      <br>
         <!-- <h2>HutSim simulator started</h2>
         <br>
         <br>
         <a href='http://uos-hutsim.cloud:<?php echo $port; ?>/' target='_blank'>
             <button>View Simulator</button>
         </a>
         <form action="index.php" method="post" style="float: right;">
            <input type="hidden" name="stopped_pid" value="<?php echo $output[0]; ?>">
            <input type="submit" value="Stop HutSim" style="background-color: yellow;">
         </form> 
      <br> -->
    </div>
    <div class="page-content-div">
      <h2>1. Video briefing (Youtube)</h2>
    </div>
    <div class="page-content-div">
      <h2>2. HutSim activity tutorial</h2>
    </div>
    <div class="page-content-div">
      <h2>3. HutSim Scenario WSGA</h2>
    </div>
    <div class="page-content-div">
      <h2>4. Questionnaire WSGA</h2>
      <div class="mx-0 mx-sm-auto">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i>
              <p>
                <strong>Your opinion matters</strong>
              </p>
              <p>
                Have some ideas how to improve our product?
                <strong>Give us your feedback.</strong>
              </p>
            </div>

            <hr />

            <form class="px-4" action="">
              <p class="text-center"><strong>Your rating:</strong></p>

              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                <label class="form-check-label" for="radio2Example1">
                  Very good
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                <label class="form-check-label" for="radio2Example2">
                  Good
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example3" />
                <label class="form-check-label" for="radio2Example3">
                  Medicore
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                <label class="form-check-label" for="radio2Example4">
                  Bad
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example5" />
                <label class="form-check-label" for="radio2Example5">
                  Very bad
                </label>
              </div>

            </form>
          </div>
          <div class="card-footer text-end">
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content-div">
      <h2>5. HutSim Scenario LKXR</h2>
    </div>
    <div class="page-content-div">
      <h2>6. Questionnaire LKXR</h2>
    </div>
    <div class="page-content-div">
      <h2>7. Finish</h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>