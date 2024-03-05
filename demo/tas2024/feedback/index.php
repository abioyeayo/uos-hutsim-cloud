<?php

  require_once '../../../DB_Connect.php';

  // connecting to database
  $con = new DB_Connect();
  $con1=$con->connect();

  
//   header("Location: ../haris/");
//   exit();


// codes beyond this point are ignored


  $success_msg = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $txt_fname = mysqli_real_escape_string($con1, $_POST['txt_fname']);
    $txt_feedback = mysqli_real_escape_string($con1, $_POST['txt_feedback']);
    $demo_event = "TAS 2024 Showcase Demo";

    // update demo feedback table
    $sql = "INSERT INTO demo_feedback_table (demo_event, ptcpt_name, ptcpt_feedback) VALUES ('" . $demo_event . "', '" . $txt_fname . "', '" . $txt_feedback . "')";
    if(mysqli_query($con1, $sql)){
        // echo "Records inserted successfully.";
    } else{
        echo "Error inserting record: " . $con->error;
        exit();
    }

    $success_msg = "New record added successfully.<br><br>";

    // halt study submission
    exit("<div style='text-align: center;'><h2><br><br>Thank you for your feedback.</h2><br>(Please close page to exit)</div>");
    
  }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Feedback Form - TAS 2024 Showcase Demo | UoS HARIS</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body class="px-4">
        <div class="shadow p-4 mb-5 bg-body-tertiary rounded" style="max-width: 960px; border: solid 1px black; margin-right: auto; margin-left: auto; margin-top:20px; padding-bottom: 20px;">
          <br>
          <div class="text-center">
            <h2>TAS 2024 Showcase - HARIS Demo</h2>
            <br>          
            <h4 style="text-decoration: underline;">Feedback Form</h4>
            <br>
          </div>          
          <div class="text-success text-center">
              <?php echo $success_msg; ?>
          </div>
          <div>
            <form class="row g-3 needs-validation" method="post" action="" novalidate>
                <div class="col-12">
                    <label for="txt_fname" class="form-label">Name</label>
                    <input type="text" class="form-control form-control-sm" id="txt_fname" name="txt_fname" value="Anonymous" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter name.
                    </div>
                </div>
                <div class="col-12 ">
                    <label for="txt_feedback" class="form-label">Please provide your feedback below.</label>
                    <textarea class="form-control" name="txt_feedback" id="txt_feedback" rows="3" required></textarea>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter feedack.
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <label for="txt_completion_time" class="form-label">Completion time (in seconds)</label>
                    <input type="number" class="form-control form-control-sm" id="txt_completion_time" name="txt_completion_time" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter completion time.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="txt_task_target" class="form-label">No. of target found</label>
                    <input type="number" class="form-control form-control-sm" id="txt_task_target" name="txt_task_target" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter number of targets found.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="txt_accuracy" class="form-label">Classification accuracy</label>
                    <input type="number" class="form-control form-control-sm" id="txt_accuracy" step="0.01" name="txt_accuracy" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter the classification accuracy.
                    </div>
                </div> -->
                
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit Feedback</button>
                </div>
            </form>
          </div>
        </div>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
                })
            })()
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>
