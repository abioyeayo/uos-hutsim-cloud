<?php

   require_once '../../DB_Connect.php';

   // connecting to database
   $con = new DB_Connect();
   $con1=$con->connect();

   // comment or select based on published online hosting or developer localhosting
  //  $base_url = "http://uos-hutsim.cloud:";
   $base_url = "http://localhost:";

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
    <div class="container">
      
      <div class="p-3 mt-3 mb-1 text-center shadow bg-light" style="max-width: 960px; margin-right: auto; margin-left: auto;">
        <h1 class="text-center fs-3 fw-bold p-1 mb-3">The speed vs accuracy trade-off in human-swarm interaction (SGP1AB)</h1>
        <?php
          echo "<strong>Prolific ID:</strong> " . $_GET['PROLIFIC_PID'] . " | ";
          echo "<strong>Study ID:</strong> " . $_GET['STUDY_ID'] . " | ";
          echo "<strong>Session ID:</strong> " . $_GET['SESSION_ID'];
        ?> 
        <br>
      </div>
      <form id="stepForm" action="#!">
          <!-- start step indicators -->
          <div class="form-header d-flex mb-4">
              <span class="stepIndicator">Briefing <br>(5 min)</span>
              <span class="stepIndicator">Tutorial <br>(10 min)</span>
              <span class="stepIndicator">Scenario WSGA <br>(12 min)</span>
              <span class="stepIndicator">Questionnaire WSGA (10 min)</span>
              <span class="stepIndicator">Scenario LKXR <br>(12 min)</span>
              <span class="stepIndicator">Questionnaire LKXR (10 min)</span>
              <span class="stepIndicator">Finish <br>(1 min)</span>
          </div>
          <!-- end step indicators -->
      
          <!-- step one -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Briefing</h4>
              <p class="text-center mb-5">In this study, you would be asked to assign UAVs to search grids in our custom-developed online HutSim simulator. 
                You would then be asked to identify if a human is present in the images returned by the UAV swarms. After this, you would be required to 
                complete a questionnaire to document your experience. You need to perform this experiment on a laptop or desktop computer. The following 
                Youtube video demonstrates what is expected of you in this experiment.</p>
              <div class="text-center mb-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/3XeCSd61pfA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
              <h4 class="text-center fw-bold mb-5 mt-5">WSGA Study Scenario</h4>
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
              <h4 class="text-center fw-bold mb-5 mt-5">WSGA Study Scenario Questionnaire</h4>
              <p class="text-center mb-5">This is the WSGA study scenario. Here you would classify whether images have a human present or not. 
                Try to find and identify as many of the targets as you can. They are all inside the green area of Southampton Common. You 
                do <strong>NOT</strong> have access to high-resolution scans in this mode, so you will only see the basic scans that are added 
                to the view window automatically.</p>
              
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

                    <div class="px-4 text-center">

                      <!-- Mental Demand -->
                      <p class="text-center"><strong>How mentally demanding was the task?</strong></p>

                      <!-- <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                          Very Low
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                          Low
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example3" />
                        <label class="form-check-label" for="radio2Example3">
                          Average
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                        <label class="form-check-label" for="radio2Example4">
                          High
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example5" />
                        <label class="form-check-label" for="radio2Example5">
                          Very High
                        </label>
                      </div> -->

                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="1" id="radio_wsga_md_label_1" />
                        <label class="form-check-label" for="radio_wsga_md_label_1">
                          1 (Very Low)
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="2" id="radio_wsga_md_label_2" />
                        <label class="form-check-label" for="radio_wsga_md_label_2">
                          2
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="3" id="radio_wsga_md_label_3" />
                        <label class="form-check-label" for="radio_wsga_md_label_3">
                          3
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="4" id="radio_wsga_md_label_4" />
                        <label class="form-check-label" for="radio_wsga_md_label_4">
                          4
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="5" id="radio_wsga_md_label_5" />
                        <label class="form-check-label" for="radio_wsga_md_label_5">
                          5
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="6" id="radio_wsga_md_label_6" />
                        <label class="form-check-label" for="radio_wsga_md_label_6">
                          6
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="7" id="radio_wsga_md_label_7" />
                        <label class="form-check-label" for="radio_wsga_md_label_7">
                          7
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="8" id="radio_wsga_md_label_8" />
                        <label class="form-check-label" for="radio_wsga_md_label_8">
                          8
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="9" id="radio_wsga_md_label_9" />
                        <label class="form-check-label" for="radio_wsga_md_label_9">
                          9
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="10" id="radio_wsga_md_label_10" />
                        <label class="form-check-label" for="radio_wsga_md_label_10">
                          10
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_md" value="11" id="radio_wsga_md_label_11" />
                        <label class="form-check-label" for="radio_wsga_md_label_11">
                          11 (Very High)
                        </label>
                      </div>

                      <!-- Physical Demand -->
                      <p class="text-center"><strong>How physically demanding was the task?</strong></p>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_pd" value="1" id="radio_wsga_pd_label_1" />
                        <label class="form-check-label" for="radio_wsga_pd_label_1">
                          1 (Very Low)
                        </label>
                      </div>
                      <!-- <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_pd" value="2" id="radio_wsga_pd_label_2" />
                        <label class="form-check-label" for="radio_wsga_pd_label_2">
                          2
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_pd" value="3" id="radio_wsga_pd_label_3" />
                        <label class="form-check-label" for="radio_wsga_pd_label_3">
                          3
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_pd" value="4" id="radio_wsga_pd_label_4" />
                        <label class="form-check-label" for="radio_wsga_pd_label_4">
                          4
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_pd" value="5" id="radio_wsga_pd_label_5" />
                        <label class="form-check-label" for="radio_wsga_pd_label_5">
                          5
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_pd" value="6" id="radio_wsga_pd_label_6" />
                        <label class="form-check-label" for="radio_wsga_pd_label_6">
                          6
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_pd" value="7" id="radio_wsga_pd_label_7" />
                        <label class="form-check-label" for="radio_wsga_pd_label_7">
                          7
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_pd" value="8" id="radio_wsga_pd_label_8" />
                        <label class="form-check-label" for="radio_wsga_pd_label_8">
                          8
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_pd" value="9" id="radio_wsga_pd_label_9" />
                        <label class="form-check-label" for="radio_wsga_pd_label_9">
                          9
                        </label>
                      </div>
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="radio_wsga_pd" value="10" id="radio_wsga_pd_label_10" />
                        <label class="form-check-label" for="radio_wsga_pd_label_10">
                          10
                        </label>
                      </div> -->
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input is-invalid" type="radio" name="radio_wsga_pd" value="11" id="radio_wsga_pd_label_11" />
                        <label class="form-check-label" for="radio_wsga_pd_label_11">
                          11 (Very High)
                        </label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                      </div>

                      

                    </div>
                  </div>
                </div>
              </div>
              
          </div>

          <!-- step five -->
          <div class="step">
              <p class="text-center mb-4">We will never sell it</p>
              <div class="mb-3">
                  <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname">
              </div>
              <div class="mb-3">
                  <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile">
              </div>
              <div class="mb-3">
                  <input type="text" placeholder="Address" oninput="this.className = ''" name="address">
              </div>
          </div>

          <!-- step six -->
          <div class="step">
              <p class="text-center mb-4">We will never sell it</p>
              <div class="mb-3">
                  <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname">
              </div>
              <div class="mb-3">
                  <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile">
              </div>
              <div class="mb-3">
                  <input type="text" placeholder="Address" oninput="this.className = ''" name="address">
              </div>
          </div>

          <!-- step seven -->
          <div class="step">
              <p class="text-center mb-4">Submit to finish study</p>
              <div class="mb-3">
                  <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname">
              </div>
              <div class="mb-3">
                  <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile">
              </div>
              <div class="mb-3">
                  <input type="text" placeholder="Address" oninput="this.className = ''" name="address">
              </div>
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

          // check if the tutorial step is completed and add value to allow validation
          var check_tutorial = document.getElementById("check_tutorial");
          if (check_tutorial.checked == true){
            check_tutorial.value = "Completed Tutorial";
            check_tutorial.classList.remove("is-invalid");
          } else {
            check_tutorial.value = "";
          }

          // check if the WSGA step is completed and add value to allow validation
          var check_WSGA = document.getElementById("check_WSGA");
          if (check_WSGA.checked == true){
            check_WSGA.value = "Completed WSGA";
            check_WSGA.classList.remove("is-invalid");
          } else {
            check_WSGA.value = "";
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