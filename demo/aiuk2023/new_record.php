<?php

  require_once '../../DB_Connect.php';

  // connecting to database
  $con = new DB_Connect();
  $con1=$con->connect();

  $success_msg = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $txt_fname = mysqli_real_escape_string($con1, $_POST['txt_fname']);
    $txt_completion_time = mysqli_real_escape_string($con1, $_POST['txt_completion_time']);
    $txt_task_target = mysqli_real_escape_string($con1, $_POST['txt_task_target']);
    $txt_accuracy = mysqli_real_escape_string($con1, $_POST['txt_accuracy']);

    if ($txt_completion_time == 0){
        exit("Error: time cannot be zero.");
    }
    $speed = $txt_task_target * 60 / $txt_completion_time; // in minutes
    $total_points = ($txt_accuracy * 1000) + ($speed * 100); // reasonably random weight selected as balance between speed vs accuracy

    // update port table
    $sql = "INSERT INTO aamas2023_leaderboard (fname, completion_time, task_target, accuracy, speed, total_points) VALUES ('" . $txt_fname . "', '" . $txt_completion_time . "', '" . $txt_task_target . "', '" . $txt_accuracy . "', '" . $speed . "', '" . $total_points . "')";
    if(mysqli_query($con1, $sql)){
        // echo "Records inserted successfully.";
    } else{
        echo "Error inserting record: " . $con->error;
        exit();
    }

    $success_msg = "New record added successfully.<br><br>";
    
  }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add New Record - AAMAS 2023 Leaderboard | UoS HutSim</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body class="px-4">
        <div class="shadow p-4 mb-5 bg-body-tertiary rounded" style="max-width: 960px; border: solid 1px black; margin-right: auto; margin-left: auto; margin-top:20px; padding-bottom: 20px;">
          <br>
          <h4>Add New Record</h4>
          <br>
          <div class="text-success text-center">
              <?php echo $success_msg; ?>
          </div>
          <div>
            <form class="row g-3 needs-validation" method="post" action="" novalidate>
                <div class="col-md-6">
                    <label for="txt_fname" class="form-label">Name</label>
                    <input type="text" class="form-control form-control-sm" id="txt_fname" name="txt_fname" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter name.
                    </div>
                </div>
                <div class="col-md-6">
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
                </div>
                
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Add Record</button>
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