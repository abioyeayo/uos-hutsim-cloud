<?php

   require_once '../../DB_Connect.php';

   // connecting to database
   $con = new DB_Connect();
   $con1=$con->connect();

   // comment or select based on published online hosting or developer localhosting
   $base_url = "http://uos-hutsim.cloud:";
  //  $base_url = "http://localhost:"; 


   if ($_SERVER["REQUEST_METHOD"] == "POST"){

        // study activity identifier
        $prolific_pid = $_POST['prolific_pid'];
        $study_id = $_POST['study_id'];
        $session_id = $_POST['session_id'];
        $study_start_time = $_POST['study_start_time'];
        $study_end_time = date("Y-m-d h:i:s");
        $study_title = "The speed vs accuracy trade-off in human-swarm interaction (SGP1AB)";
        $study_alias = "wsga_lkxr";


        // study wsga questionnaires
        $radio_wsga_md = $_POST['radio_wsga_md'];
        $radio_wsga_pd = $_POST['radio_wsga_pd'];
        $radio_wsga_td = $_POST['radio_wsga_td'];
        $radio_wsga_pf = $_POST['radio_wsga_pf'];
        $radio_wsga_ef = $_POST['radio_wsga_ef'];
        $radio_wsga_fr = $_POST['radio_wsga_fr'];
        $radio_wsga_j1 = $_POST['radio_wsga_j1'];
        $radio_wsga_j2 = $_POST['radio_wsga_j2'];
        $radio_wsga_j3 = $_POST['radio_wsga_j3'];
        $radio_wsga_j4 = $_POST['radio_wsga_j4'];
        $radio_wsga_j5 = $_POST['radio_wsga_j5'];
        $radio_wsga_j6 = $_POST['radio_wsga_j6'];
        $radio_wsga_j7 = $_POST['radio_wsga_j7'];
        $radio_wsga_j8 = $_POST['radio_wsga_j8'];
        $radio_wsga_j9 = $_POST['radio_wsga_j9'];
        $radio_wsga_j10 = $_POST['radio_wsga_j10'];
        $radio_wsga_j11 = $_POST['radio_wsga_j11'];
        $radio_wsga_j12 = $_POST['radio_wsga_j12'];

        // study lkxr questionnaires
        $radio_lkxr_md = $_POST['radio_lkxr_md'];
        $radio_lkxr_pd = $_POST['radio_lkxr_pd'];
        $radio_lkxr_td = $_POST['radio_lkxr_td'];
        $radio_lkxr_pf = $_POST['radio_lkxr_pf'];
        $radio_lkxr_ef = $_POST['radio_lkxr_ef'];
        $radio_lkxr_fr = $_POST['radio_lkxr_fr'];
        $radio_lkxr_j1 = $_POST['radio_lkxr_j1'];
        $radio_lkxr_j2 = $_POST['radio_lkxr_j2'];
        $radio_lkxr_j3 = $_POST['radio_lkxr_j3'];
        $radio_lkxr_j4 = $_POST['radio_lkxr_j4'];
        $radio_lkxr_j5 = $_POST['radio_lkxr_j5'];
        $radio_lkxr_j6 = $_POST['radio_lkxr_j6'];
        $radio_lkxr_j7 = $_POST['radio_lkxr_j7'];
        $radio_lkxr_j8 = $_POST['radio_lkxr_j8'];
        $radio_lkxr_j9 = $_POST['radio_lkxr_j9'];
        $radio_lkxr_j10 = $_POST['radio_lkxr_j10'];
        $radio_lkxr_j11 = $_POST['radio_lkxr_j11'];
        $radio_lkxr_j12 = $_POST['radio_lkxr_j12'];
        

        // update port table
        $sql = "INSERT INTO wsga_lkxr_data_table (prolific_pid, study_id, `session_id`, study_title, study_alias, study_start_time, study_end_time, radio_wsga_md, radio_wsga_pd, radio_wsga_td, radio_wsga_pf, radio_wsga_ef, radio_wsga_fr, radio_wsga_j1, radio_wsga_j2, radio_wsga_j3, radio_wsga_j4, radio_wsga_j5, radio_wsga_j6, radio_wsga_j7, radio_wsga_j8, radio_wsga_j9, radio_wsga_j10, radio_wsga_j11, radio_wsga_j12, radio_lkxr_md, radio_lkxr_pd, radio_lkxr_td, radio_lkxr_pf, radio_lkxr_ef, radio_lkxr_fr, radio_lkxr_j1, radio_lkxr_j2, radio_lkxr_j3, radio_lkxr_j4, radio_lkxr_j5, radio_lkxr_j6, radio_lkxr_j7, radio_lkxr_j8, radio_lkxr_j9, radio_lkxr_j10, radio_lkxr_j11, radio_lkxr_j12) VALUES ('" . $prolific_pid . "', '" . $study_id . "', '" . $session_id . "', '" . $study_title . "', '" . $study_alias . "', '" . $study_start_time . "', '" . $study_end_time . "', '" . $radio_wsga_md . "', '" . $radio_wsga_pd . "', '" . $radio_wsga_td . "', '" . $radio_wsga_pf . "', '" . $radio_wsga_ef . "', '" . $radio_wsga_fr . "', '" . $radio_wsga_j1 . "', '" . $radio_wsga_j2 . "', '" . $radio_wsga_j3 . "', '" . $radio_wsga_j4 . "', '" . $radio_wsga_j5 . "', '" . $radio_wsga_j6 . "', '" . $radio_wsga_j7 . "', '" . $radio_wsga_j8 . "', '" . $radio_wsga_j9 . "', '" . $radio_wsga_j10 . "', '" . $radio_wsga_j11 . "', '" . $radio_wsga_j12 . "', '" . $radio_lkxr_md . "', '" . $radio_lkxr_pd . "', '" . $radio_lkxr_td . "', '" . $radio_lkxr_pf . "', '" . $radio_lkxr_ef . "', '" . $radio_lkxr_fr . "', '" . $radio_lkxr_j1 . "', '" . $radio_lkxr_j2 . "', '" . $radio_lkxr_j3 . "', '" . $radio_lkxr_j4 . "', '" . $radio_lkxr_j5 . "', '" . $radio_lkxr_j6 . "', '" . $radio_lkxr_j7 . "', '" . $radio_lkxr_j8 . "', '" . $radio_lkxr_j9 . "', '" . $radio_lkxr_j10 . "', '" . $radio_lkxr_j11 . "', '" . $radio_lkxr_j12 . "')";
        if(mysqli_query($con1, $sql)){
            // echo "Records inserted successfully.";
        } else{
            echo "Error inserting record: " . $con->error;
            exit();
        }

        // redirect back to prolific website to confirm study completion
        header("Location: https://app.prolific.co/submissions/complete?cc=C1FIC4D9");
        exit();

   }

?>

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

      #stepForm {
          max-width: 960px;
          background-color: #ffffff;
          margin: 40px auto;
          padding: 40px;
          box-shadow: 0px 6px 18px rgb(0 0 0 / 9%);
          border-radius: 12px;
      }
      #stepForm .form-header {
          gap: 5px;
          text-align: center;
          font-size: .9em;
      }
      #stepForm .form-header .stepIndicator {
          position: relative;
          flex: 1;
          padding-bottom: 30px;
      }
      #stepForm .form-header .stepIndicator.active {
          font-weight: 600;
      }
      #stepForm .form-header .stepIndicator.finish {
          font-weight: 600;
          color: #009688;
      }
      #stepForm .form-header .stepIndicator::before {
          content: "";
          position: absolute;
          left: 50%;
          bottom: 0;
          transform: translateX(-50%);
          z-index: 9;
          width: 20px;
          height: 20px;
          background-color: #d5efed;
          border-radius: 50%;
          border: 3px solid #ecf5f4;
      }
      #stepForm .form-header .stepIndicator.active::before {
          background-color: #a7ede8;
          border: 3px solid #d5f9f6;
      }
      #stepForm .form-header .stepIndicator.finish::before {
          background-color: #009688;
          border: 3px solid #b7e1dd;
      }
      #stepForm .form-header .stepIndicator::after {
          content: "";
          position: absolute;
          left: 50%;
          bottom: 8px;
          width: 100%;
          height: 3px;
          background-color: #f3f3f3;
      }
      #stepForm .form-header .stepIndicator.active::after {
          background-color: #a7ede8;
      }
      #stepForm .form-header .stepIndicator.finish::after {
          background-color: #009688;
      }
      #stepForm .form-header .stepIndicator:last-child:after {
          display: none;
      }
      /* #stepForm input {
          padding: 15px 20px;
          width: 100%;
          font-size: 1em;
          border: 1px solid #e3e3e3;
          border-radius: 5px;
      }
      #stepForm input:focus {
          border: 1px solid #009688;
          outline: 0;
      } */
      /* #stepForm input.invalid {
          border: 1px solid #ffaba5;
      } */
      #stepForm .step {
        display: none;
      }
      #stepForm .form-footer{
          overflow:auto;
          gap: 20px;
      }
      #stepForm .form-footer button{
          background-color: #009688;
          border: 1px solid #009688 !important;
          color: #ffffff;
          border: none;
          padding: 13px 30px;
          font-size: 1em;
          cursor: pointer;
          border-radius: 5px;
          flex: 1;
          margin-top: 5px;
      }
      #stepForm .form-footer button:hover {
        opacity: 0.8;
      }
      
      #stepForm .form-footer #prevBtn {
          background-color: #fff;
          color: #009688;
      }
    </style>
  </head>
  <body>
    <!-- Custom step form starts here -->
    <div class="container" style="min-width: 1000px;">
      
      <div class="p-3 mt-3 mb-1 text-center shadow bg-light" style="max-width: 960px; margin-right: auto; margin-left: auto;">
        <h1 class="text-center fs-3 fw-bold p-1 mb-3">The speed vs accuracy trade-off in human-swarm interaction (SGP1AB)</h1>
        <?php
          echo "<strong>Prolific ID:</strong> " . $_GET['PROLIFIC_PID'] . " | ";
          echo "<strong>Study ID:</strong> " . $_GET['STUDY_ID'] . " | ";
          echo "<strong>Session ID:</strong> " . $_GET['SESSION_ID'];
        ?> 
        <br>
      </div>
      <form id="stepForm" method="post" action="">
          <?php
              echo '<input type="hidden" name="prolific_pid" value="'.$_GET['PROLIFIC_PID'].'">';
              echo '<input type="hidden" name="study_id" value="'.$_GET['STUDY_ID'].'">';
              echo '<input type="hidden" name="session_id" value="'.$_GET['SESSION_ID'].'">';
              echo '<input type="hidden" name="study_start_time" value="'.date("Y-m-d h:i:s").'">';
          ?>
          <!-- start step indicators -->
          <div class="form-header d-flex mb-4">
              <span class="stepIndicator">Briefing <br>(12 min)</span>
              <span class="stepIndicator">Tutorial <br>(10 min)</span>
              <span class="stepIndicator">Scenario I <br>(12 min)</span>
              <span class="stepIndicator">Questionnaire I <br>(6 min)</span>
              <span class="stepIndicator">Scenario II <br>(12 min)</span>
              <span class="stepIndicator">Questionnaire II <br>(6 min)</span>
              <span class="stepIndicator">Finish <br>(1 min)</span>
          </div>
          <!-- end step indicators -->
      
          <!-- step one -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Briefing</h4>
              <p class="text-center mb-3">In this study, you would be asked to assign UAVs to search grids in our custom-developed online HutSim simulator. 
                You would then be asked to identify if a human is present in the images returned by the UAV swarms. After this, you would be required to 
                complete a questionnaire to document your experience. You need to perform this experiment on a laptop or desktop computer, using an updated 
                version of the Google Chrome web browser.</p>
              <p class="text-center mb-5">Please watch the following Youtube video which demonstrates what is expected of you in this experiment (preferably in Fullscreen, 1080p HD). This should 
                take about 10 minutes to complete. When finished, click Next to continue.</p>
              <div class="text-center mb-5">
                <iframe width="876" height="504" src="https://www.youtube.com/embed/HhD3zU6jTSQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
          </div>
      
          <!-- step two -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">HutSim Simulator Tutorial</h4>
              <p class="text-center mb-5">Tutorial Scenario - try to find the 3 targets in the circled areas and 
                classify them into human casualty or random objects.</p>
              <p class="text-center mb-5">Click the Blue "Start Tutorial" button to start the tutorial. When finished, tick the "I have completed the tutorial scenario" checkbox and click Next to continue.</p>
              <div class="mb-5">
                <?php
                    // echo exec('java --version');
                    // echo "<br><br>";
                    // initially starting from port 1024, but then changed to 4096 (2^12) because mysql connects on 3308
                    $port = rand(4096, 65535);
                    exec('java -jar hut.jar '.$port.'> /dev/null 2>&1 & echo $!', $output);
              
                    // var_dump($output);
                    // echo "Process ID: ".$output[0]." | Port: ".$port;

                    $process_id = $output[0];
                    $port_number = $port;
                    $port_status = "active";
                    $created_by = "uos-web-user";

                    // update port table
                    $sql = "INSERT INTO port_table (process_id, port_number, port_status, created_by) VALUES ('" . $process_id . "', '" . $port_number . "', '" . $port_status . "', '" . $created_by . "')";
                    if(mysqli_query($con1, $sql)){
                      // echo "Records inserted successfully.";
                    } else{
                      echo "Error inserting record: " . $con->error;
                      exit();
                    }

                    $href_url = $base_url . $port . "/preset/scenario?file-name=Tutorial.json";
                ?>
                <div class="d-flex flex-column justify-content-center align-content-center mx-auto" style="max-width: 480px;">
                  <a href='<?php echo $href_url; ?>/' target='_blank' class="btn btn-sm btn-primary">Start Tutorial</a>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check_tutorial" aria-describedby="check_tutorial_invalid_feedback" onclick="validateForm();">
                    <label class="form-check-label" for="check_tutorial">
                        I have completed the tutorial scenario
                    </label>
                    <div id="check_tutorial_invalid_feedback" class="invalid-feedback">
                      Please confirm you have completed scenario to proceed.
                    </div>
                  </div>
                </div>
              </div>
          </div>
      
          <!-- step three -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Scenario I</h4>
              <p class="text-center mb-5">This is the WSGA study scenario. Here you would classify whether images have a human present or not. 
                Try to find and identify as many of the targets as you can. They are all inside the green area of Southampton Common. You 
                do <strong>NOT</strong> have access to high-resolution scans in this mode, so you will only see the basic scans that are added 
                to the view window automatically.</p>
              <p class="text-center mb-5">Click the Blue "Start Tutorial" button to start the WSGA study scenario. When finished, tick the "I have completed the WSGA scenario" checkbox and click Next to continue.</p>
              <div class="mb-5">
                <?php
                    // echo exec('java --version');
                    // echo "<br><br>";
                    // initially starting from port 1024, but then changed to 4096 (2^12) because mysql connects on 3308
                    $port = rand(4096, 65535);
                    exec('java -jar hut.jar '.$port.'> /dev/null 2>&1 & echo $!', $output);
              
                    // var_dump($output);
                    // echo "Process ID: ".$output[0]." | Port: ".$port;

                    $process_id = $output[0];
                    $port_number = $port;
                    $port_status = "active";
                    $created_by = "uos-web-user";

                    // update port table
                    $sql = "INSERT INTO port_table (process_id, port_number, port_status, created_by) VALUES ('" . $process_id . "', '" . $port_number . "', '" . $port_status . "', '" . $created_by . "')";
                    if(mysqli_query($con1, $sql)){
                      // echo "Records inserted successfully.";
                    } else{
                      echo "Error inserting record: " . $con->error;
                      exit();
                    }

                    $href_url = $base_url . $port . "/preset/scenario?file-name=WSGA.json";
                ?>
                <div class="d-flex flex-column justify-content-center align-content-center mx-auto" style="max-width: 480px;">
                  <a href='<?php echo $href_url; ?>/' target='_blank' class="btn btn-sm btn-primary">Start WSGA Scenario</a>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check_WSGA" aria-describedby="check_WSGA_invalid_feedback" onclick="validateForm();">
                    <label class="form-check-label" for="check_WSGA">
                        I have completed the WSGA scenario
                    </label>
                    <div id="check_WSGA_invalid_feedback" class="invalid-feedback">
                      Please confirm you have completed scenario to proceed.
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- step four -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Scenario I Questionnaire</h4>
              <p class="text-center mb-5">This is the WSGA study scenario questionnaire. Please complete the form below and click next to continue.</p>
              
              <div class="mx-0 mx-sm-auto mb-5">
                <div class="card">
                  <div class="card-body">
                    <div class="text-center">
                      <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                      <i class="fa fa-gears fa-2x mb-3 text-primary"></i>
                      <p>
                        <strong>Task Workload Index</strong>
                      </p>
                    </div>

                    <hr />

                    <div class="px-4">
                      <?php 

                        // nasa task load index questionnaire
                        $nasa_tlx = array(
                            "md" => array(
                                  "abbr" => "md",
                                  "title" => "Mental Demand",
                                  "question" => "How mentally demanding was the task?"),

                            "pd" => array(
                                  "abbr" => "pd",
                                  "title" => "Physical Demand",
                                  "question" => "How physically demanding was the task?"),

                            "td" => array(
                                  "abbr" => "td",
                                  "title" => "Temporal Demand",
                                  "question" => "How hurried or rushed was the pace of the task?"),

                            "pf" => array(
                                  "abbr" => "pf",
                                  "title" => "Performance",
                                  "question" => "How successful were you in accomplishing what you were asked to do?"),

                            "ef" => array(
                                  "abbr" => "ef",
                                  "title" => "Effort",
                                  "question" => "How hard did you have to work to accomplish your level of performance?"),

                            "fr" => array(
                                  "abbr" => "fr",
                                  "title" => "Frustration",
                                  "question" => "How insecure, discouraged, irritated, stressed, and annoyed were you?"));

                        foreach ($nasa_tlx as $component) {

                            $nasa_tlx_component_lower_label = "Very Low";
                            $nasa_tlx_component_upper_label = "Very High";
                            if ($component['title'] == "Performance"){
                                  $nasa_tlx_component_lower_label = "Perfect";
                                  $nasa_tlx_component_upper_label = "Failure";
                            }
                          
                            echo '<div style="font-size: 0.95rem;">
                                    <p id="radio_wsga_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="1" id="radio_wsga_'.$component['abbr'].'_1" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_1">
                                        1 ('.$nasa_tlx_component_lower_label.')
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="2" id="radio_wsga_'.$component['abbr'].'_2" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_2">
                                        2
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="3" id="radio_wsga_'.$component['abbr'].'_3" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_3">
                                        3
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="4" id="radio_wsga_'.$component['abbr'].'_4" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_4">
                                        4
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="5" id="radio_wsga_'.$component['abbr'].'_5" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_5">
                                        5
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="6" id="radio_wsga_'.$component['abbr'].'_6" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_6">
                                        6
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="7" id="radio_wsga_'.$component['abbr'].'_7" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_7">
                                        7
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="8" id="radio_wsga_'.$component['abbr'].'_8" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_8">
                                        8
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="9" id="radio_wsga_'.$component['abbr'].'_9" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_9">
                                        9
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="10" id="radio_wsga_'.$component['abbr'].'_10" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_10">
                                        10
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="11" id="radio_wsga_'.$component['abbr'].'_11" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_11">
                                        11 ('.$nasa_tlx_component_upper_label.')
                                      </label>
                                    </div>
                                  </div>';
                            } 
                      ?>

                    </div>
                  </div>
                </div>
              </div>

              <div class="mx-0 mx-sm-auto mb-5">
                <div class="card">
                  <div class="card-body">
                    <div class="text-center">
                      <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                      <i class="fa fa-android fa-2x mb-3 text-primary"></i>
                      <p>
                        <strong>Trust Index</strong>
                      </p>
                    </div>

                    <hr />

                    <div class="px-4">
                      <?php 

                        // Jian trust index questionnaire
                        $jian_trust_index = array(
                          "j1" => array(
                                "abbr" => "j1",
                                "question" => "The system is deceptive."),

                          "j2" => array(
                                "abbr" => "j2",
                                "question" => "The system behaves in an underhanded manner."),

                          "j3" => array(
                                "abbr" => "j3",
                                "question" => "I am suspicious of the system's intent, action, or outputs."),

                          "j4" => array(
                                "abbr" => "j4",
                                "question" => "I am wary of the system."),

                          "j5" => array(
                                "abbr" => "j5",
                                "question" => "The system's actions will have a harmful or injurious outcome."),

                          "j6" => array(
                                "abbr" => "j6",
                                "question" => "I am confident in the system."),

                          "j7" => array(
                                "abbr" => "j7",
                                "question" => "The system provides security."),

                          "j8" => array(
                                "abbr" => "j8",
                                "question" => "The system has integrity."),

                          "j9" => array(
                                "abbr" => "j9",
                                "question" => "The system is dependable."),

                          "j10" => array(
                                "abbr" => "j10",
                                "question" => "The system is reliable."),

                          "j11" => array(
                                "abbr" => "j11",
                                "question" => "I can trust the system."),

                          "j12" => array(
                                "abbr" => "j12",
                                "question" => "I am familiar with the system."));

                      
                      foreach ($jian_trust_index as $component) {
                        
                          echo '<div style="font-size: 0.95rem;">
                                  <p id="radio_wsga_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="1" id="radio_wsga_'.$component['abbr'].'_1" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_1">
                                      1 (Strongly Disagree)
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="2" id="radio_wsga_'.$component['abbr'].'_2" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_2">
                                      2
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="3" id="radio_wsga_'.$component['abbr'].'_3" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_3">
                                      3
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="4" id="radio_wsga_'.$component['abbr'].'_4" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_4">
                                      4
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="5" id="radio_wsga_'.$component['abbr'].'_5" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_5">
                                      5
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="6" id="radio_wsga_'.$component['abbr'].'_6" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_6">
                                      6
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_wsga_'.$component['abbr'].'" value="7" id="radio_wsga_'.$component['abbr'].'_7" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_wsga_'.$component['abbr'].'_7">
                                      7 (Strongly Agree)
                                    </label>
                                  </div>
                                </div>';
                          } 
                      ?>

                    </div>
                  </div>
                </div>
              </div>
              
          </div>

          <!-- step five -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Scenario II</h4>
              <p class="text-center mb-5">This is the LKXR study scenario. Here you would classify whether images have a human present or not. 
                Try to find and identify as many of the targets as you can. They are all inside the green area of Southampton Common. You 
                do <strong>NOT</strong> have access to high-resolution scans in this mode, so you will only see the basic scans that are added 
                to the view window automatically.</p>
              <p class="text-center mb-5">Click the Blue "Start Tutorial" button to start the LKXR study scenario. When finished, tick the "I have completed the LKXR scenario" checkbox and click Next to continue.</p>
              <div class="mb-5">
                <?php
                    // echo exec('java --version');
                    // echo "<br><br>";
                    // initially starting from port 1024, but then changed to 4096 (2^12) because mysql connects on 3308
                    $port = rand(4096, 65535);
                    exec('java -jar hut.jar '.$port.'> /dev/null 2>&1 & echo $!', $output);
              
                    // var_dump($output);
                    // echo "Process ID: ".$output[0]." | Port: ".$port;

                    $process_id = $output[0];
                    $port_number = $port;
                    $port_status = "active";
                    $created_by = "uos-web-user";

                    // update port table
                    $sql = "INSERT INTO port_table (process_id, port_number, port_status, created_by) VALUES ('" . $process_id . "', '" . $port_number . "', '" . $port_status . "', '" . $created_by . "')";
                    if(mysqli_query($con1, $sql)){
                      // echo "Records inserted successfully.";
                    } else{
                      echo "Error inserting record: " . $con->error;
                      exit();
                    }

                    $href_url = $base_url . $port . "/preset/scenario?file-name=LKXR.json";
                ?>
                <div class="d-flex flex-column justify-content-center align-content-center mx-auto" style="max-width: 480px;">
                  <a href='<?php echo $href_url; ?>/' target='_blank' class="btn btn-sm btn-primary">Start LKXR Scenario</a>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check_LKXR" aria-describedby="check_LKXR_invalid_feedback" onclick="validateForm();">
                    <label class="form-check-label" for="check_LKXR">
                        I have completed the LKXR scenario
                    </label>
                    <div id="check_LKXR_invalid_feedback" class="invalid-feedback">
                      Please confirm you have completed scenario to proceed.
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- step six -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Scenario II Questionnaire</h4>
              <p class="text-center mb-5">This is the LKXR study scenario questionnaire. Please complete the form below and click next to continue.</p>
              
              <div class="mx-0 mx-sm-auto mb-5">
                <div class="card">
                  <div class="card-body">
                    <div class="text-center">
                      <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                      <i class="fa fa-gears fa-2x mb-3 text-primary"></i>
                      <p>
                        <strong>Task Workload Index</strong>
                      </p>
                    </div>

                    <hr />

                    <div class="px-4">
                      <?php 

                        // nasa task load index questionnaire
                        $nasa_tlx = array(
                            "md" => array(
                                  "abbr" => "md",
                                  "title" => "Mental Demand",
                                  "question" => "How mentally demanding was the task?"),

                            "pd" => array(
                                  "abbr" => "pd",
                                  "title" => "Physical Demand",
                                  "question" => "How physically demanding was the task?"),

                            "td" => array(
                                  "abbr" => "td",
                                  "title" => "Temporal Demand",
                                  "question" => "How hurried or rushed was the pace of the task?"),

                            "pf" => array(
                                  "abbr" => "pf",
                                  "title" => "Performance",
                                  "question" => "How successful were you in accomplishing what you were asked to do?"),

                            "ef" => array(
                                  "abbr" => "ef",
                                  "title" => "Effort",
                                  "question" => "How hard did you have to work to accomplish your level of performance?"),

                            "fr" => array(
                                  "abbr" => "fr",
                                  "title" => "Frustration",
                                  "question" => "How insecure, discouraged, irritated, stressed, and annoyed were you?"));

                        foreach ($nasa_tlx as $component) {

                            $nasa_tlx_component_lower_label = "Very Low";
                            $nasa_tlx_component_upper_label = "Very High";
                            if ($component['title'] == "Performance"){
                                  $nasa_tlx_component_lower_label = "Perfect";
                                  $nasa_tlx_component_upper_label = "Failure";
                            }
                          
                            echo '<div style="font-size: 0.95rem;">
                                    <p id="radio_lkxr_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="1" id="radio_lkxr_'.$component['abbr'].'_1" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_1">
                                        1 ('.$nasa_tlx_component_lower_label.')
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="2" id="radio_lkxr_'.$component['abbr'].'_2" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_2">
                                        2
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="3" id="radio_lkxr_'.$component['abbr'].'_3" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_3">
                                        3
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="4" id="radio_lkxr_'.$component['abbr'].'_4" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_4">
                                        4
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="5" id="radio_lkxr_'.$component['abbr'].'_5" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_5">
                                        5
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="6" id="radio_lkxr_'.$component['abbr'].'_6" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_6">
                                        6
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="7" id="radio_lkxr_'.$component['abbr'].'_7" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_7">
                                        7
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="8" id="radio_lkxr_'.$component['abbr'].'_8" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_8">
                                        8
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="9" id="radio_lkxr_'.$component['abbr'].'_9" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_9">
                                        9
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="10" id="radio_lkxr_'.$component['abbr'].'_10" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_10">
                                        10
                                      </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="11" id="radio_lkxr_'.$component['abbr'].'_11" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_11">
                                        11 ('.$nasa_tlx_component_upper_label.')
                                      </label>
                                    </div>
                                  </div>';
                            } 
                      ?>

                    </div>
                  </div>
                </div>
              </div>

              <div class="mx-0 mx-sm-auto mb-5">
                <div class="card">
                  <div class="card-body">
                    <div class="text-center">
                      <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                      <i class="fa fa-android fa-2x mb-3 text-primary"></i>
                      <p>
                        <strong>Trust Index</strong>
                      </p>
                    </div>

                    <hr />

                    <div class="px-4">
                      <?php 

                        // Jian trust index questionnaire
                        $jian_trust_index = array(
                          "j1" => array(
                                "abbr" => "j1",
                                "question" => "The system is deceptive."),

                          "j2" => array(
                                "abbr" => "j2",
                                "question" => "The system behaves in an underhanded manner."),

                          "j3" => array(
                                "abbr" => "j3",
                                "question" => "I am suspicious of the system's intent, action, or outputs."),

                          "j4" => array(
                                "abbr" => "j4",
                                "question" => "I am wary of the system."),

                          "j5" => array(
                                "abbr" => "j5",
                                "question" => "The system's actions will have a harmful or injurious outcome."),

                          "j6" => array(
                                "abbr" => "j6",
                                "question" => "I am confident in the system."),

                          "j7" => array(
                                "abbr" => "j7",
                                "question" => "The system provides security."),

                          "j8" => array(
                                "abbr" => "j8",
                                "question" => "The system has integrity."),

                          "j9" => array(
                                "abbr" => "j9",
                                "question" => "The system is dependable."),

                          "j10" => array(
                                "abbr" => "j10",
                                "question" => "The system is reliable."),

                          "j11" => array(
                                "abbr" => "j11",
                                "question" => "I can trust the system."),

                          "j12" => array(
                                "abbr" => "j12",
                                "question" => "I am familiar with the system."));

                      
                      foreach ($jian_trust_index as $component) {
                        
                          echo '<div style="font-size: 0.95rem;">
                                  <p id="radio_lkxr_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="1" id="radio_lkxr_'.$component['abbr'].'_1" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_1">
                                      1 (Strongly Disagree)
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="2" id="radio_lkxr_'.$component['abbr'].'_2" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_2">
                                      2
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="3" id="radio_lkxr_'.$component['abbr'].'_3" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_3">
                                      3
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="4" id="radio_lkxr_'.$component['abbr'].'_4" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_4">
                                      4
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="5" id="radio_lkxr_'.$component['abbr'].'_5" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_5">
                                      5
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="6" id="radio_lkxr_'.$component['abbr'].'_6" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_6">
                                      6
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="radio_lkxr_'.$component['abbr'].'" value="7" id="radio_lkxr_'.$component['abbr'].'_7" onchange="validateForm();" />
                                    <label class="form-check-label" for="radio_lkxr_'.$component['abbr'].'_7">
                                      7 (Strongly Agree)
                                    </label>
                                  </div>
                                </div>';
                          } 
                      ?>

                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- step seven -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Submit to Finish</h4>
              <p class="text-center mb-5">Thank you for participating in our study. Please submit to finish and be automatically redirected back to prolific to confirm study completion.</p>
          </div>
      
          <!-- start previous / next buttons -->
          <div class="form-footer d-flex">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
          <!-- end previous / next buttons -->
      </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("step");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("step");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("stepForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function validateForm() {

          // check if the tutorial scenario is completed and add value to allow validation
          var check_tutorial = document.getElementById("check_tutorial");
          if (check_tutorial.checked == true){
            check_tutorial.value = "Completed Tutorial";
            check_tutorial.classList.remove("is-invalid");
          } else {
            check_tutorial.value = "";
          }

          // check if the WSGA scenario is completed and add value to allow validation
          var check_WSGA = document.getElementById("check_WSGA");
          if (check_WSGA.checked == true){
            check_WSGA.value = "Completed WSGA";
            check_WSGA.classList.remove("is-invalid");
          } else {
            check_WSGA.value = "";
          }

          // check if a wsga radio row element has been selected
          var radio_wsga_lkxr_form = ["md", "pd", "td", "pf", "ef", "fr", "j1", "j2", "j3", "j4", "j5", "j6", "j7", "j8", "j9", "j10", "j11", "j12"];
          for(j=0;j<radio_wsga_lkxr_form.length;j++){
              var radio_row = document.querySelector('input[name="radio_wsga_'+radio_wsga_lkxr_form[j]+'"]:checked');
              var radio_row_elements = [];
              for (i=1; i < (document.getElementsByName("radio_wsga_"+radio_wsga_lkxr_form[j]).length + 1); i++){
                radio_row_elements[i-1] = document.getElementById("radio_wsga_"+radio_wsga_lkxr_form[j]+"_" + i);
              }
              var radio_row_question = document.getElementById("radio_wsga_"+radio_wsga_lkxr_form[j]+"_question");
              if(radio_row != null) {
                for (i=0; i<radio_row_elements.length;i++){
                  radio_row_elements[i].value = i+1;
                  radio_row_elements[i].classList.remove("is-invalid");
                }
                radio_row_question.classList.remove("text-danger");
              }
              else {
                for (i=0; i<radio_row_elements.length;i++){
                  radio_row_elements[i].value = "";
                }
                radio_row_question.classList.add("text-danger");
              }

          }

          // check if the LKXR scenario is completed and add value to allow validation
          var check_LKXR = document.getElementById("check_LKXR");
          if (check_LKXR.checked == true){
            check_LKXR.value = "Completed LKXR";
            check_LKXR.classList.remove("is-invalid");
          } else {
            check_LKXR.value = "";
          }

          // check if a lkxr radio row element has been selected
          var radio_wsga_lkxr_form = ["md", "pd", "td", "pf", "ef", "fr", "j1", "j2", "j3", "j4", "j5", "j6", "j7", "j8", "j9", "j10", "j11", "j12"];
          for(j=0;j<radio_wsga_lkxr_form.length;j++){
              var radio_row = document.querySelector('input[name="radio_lkxr_'+radio_wsga_lkxr_form[j]+'"]:checked');
              var radio_row_elements = [];
              for (i=1; i < (document.getElementsByName("radio_lkxr_"+radio_wsga_lkxr_form[j]).length + 1); i++){
                radio_row_elements[i-1] = document.getElementById("radio_lkxr_"+radio_wsga_lkxr_form[j]+"_" + i);
              }
              var radio_row_question = document.getElementById("radio_lkxr_"+radio_wsga_lkxr_form[j]+"_question");
              if(radio_row != null) {
                for (i=0; i<radio_row_elements.length;i++){
                  radio_row_elements[i].value = i+1;
                  radio_row_elements[i].classList.remove("is-invalid");
                }
                radio_row_question.classList.remove("text-danger");
              }
              else {
                for (i=0; i<radio_row_elements.length;i++){
                  radio_row_elements[i].value = "";
                }
                radio_row_question.classList.add("text-danger");
              }

          }
          

          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("step");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              // y[i].className += " invalid";
              y[i].className += " is-invalid";
              // and set the current valid status to false
              valid = false;
            }
          }

          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
    </script>
  </body>
</html>

<?php

	// close db connect
	$con1->close();
?>