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
      #stepForm input {
          padding: 15px 20px;
          width: 100%;
          font-size: 1em;
          border: 1px solid #e3e3e3;
          border-radius: 5px;
      }
      #stepForm input:focus {
          border: 1px solid #009688;
          outline: 0;
      }
      #stepForm input.invalid {
          border: 1px solid #ffaba5;
      }
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

    <br><br>
    
    <!-- Custom step form starts here -->
    <div>
      <h1 class="text-center fs-4">The speed vs accuracy trade-off in human-swarm interaction (SGP1AB)</h1>
      <form id="stepForm" action="#!">
          <!-- start step indicators -->
          <div class="form-header d-flex mb-4">
              <span class="stepIndicator">Account Setup</span>
              <span class="stepIndicator">Social Profiles</span>
              <span class="stepIndicator">Personal Details</span>
              <span class="stepIndicator">Account Setup</span>
              <span class="stepIndicator">Social Profiles</span>
              <span class="stepIndicator">Personal Details</span>
              <span class="stepIndicator">Finish</span>
          </div>
          <!-- end step indicators -->
      
          <!-- step one -->
          <div class="step">
              <p class="text-center mb-4">Create your account</p>
              <div class="mb-3">
                  <input type="email" placeholder="Email Address" oninput="this.className = ''" name="email">
              </div>
              <div class="mb-3">
                  <input type="password" placeholder="Password" oninput="this.className = ''" name="password">
              </div>
              <div class="mb-3">
                  <input type="password" placeholder="Confirm Password" oninput="this.className = ''" name="password">
              </div>
          </div>
      
          <!-- step two -->
          <div class="step">
              <p class="text-center mb-4">Your presence on the social network</p>
              <div class="mb-3">
                  <input type="text" placeholder="Linked In" oninput="this.className = ''" name="linkedin">
              </div>
              <div class="mb-3">
                  <input type="text" placeholder="Twitter" oninput="this.className = ''" name="twitter">
              </div>
              <div class="mb-3">
                  <input type="text" placeholder="Facebook" oninput="this.className = ''" name="facebook">
              </div>
          </div>
      
          <!-- step three -->
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

          <!-- step four -->
          <div class="step">
              <p class="text-center mb-4">We will never sell it - step four</p>
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
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("step");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
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