<?php

  if (session_status() == PHP_SESSION_NONE) {
        session_start();
  }

  // print_r($_SESSION);

  require_once 'DB_Connect.php';

  // connecting to database
	$con = new DB_Connect();
  $con1=$con->connect();
  
  $error_message = "";
  $success_message = "";

	$login_status = "";
	$error_status = "";
	$show_login = true;
  $show_otp = false;
  $show_password_reset = false;
	$_SESSION["validated_login"] = false;

	if ($_SESSION['session_timeout_msg'] != ''){
		$error_status = $_SESSION['session_timeout_msg'];
		$_SESSION['session_timeout_msg'] = "";
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST['verify_login'])) {
      if ($_POST['password'] == "Start1"){
        $_SESSION["force_password_reset"] = true;
      } else {
        $_SESSION["force_password_reset"] = false;
      }

			$sql = "SELECT * FROM users WHERE username = '" . $_POST['username'] . "' OR email = '" . $_POST['username'] . "'";
      $result = mysqli_query($con1, $sql);
      if ( mysqli_num_rows( $result ) > 0 ) {
				while($row = mysqli_fetch_array($result)) {
					if(password_verify($_POST['password'], $row["password"])) {

					    // $login_status = "Login successful.";
					    $partial_email = hide_email($row["email"]);
              $_SESSION["login_user_fname"] = $row['fname'];
              $_SESSION["login_user_fullname"] = $row['title'] ." ".$row['fname'] ." ".$row['lname'];
              $_SESSION["login_user"] = $row['username'];
              $_SESSION["login_user_email"] = $row['email'];
					    $_SESSION["login_user_role"] = $row['role'];
					    $random_otp = rand(100000,999999);
							$cur_date = date("Y-m-d h:i:s");

							// $otp_expiry = time_diff($row["otp_timestamp"], $cur_date, '%h' );
							// if ($otp_expiry < 1){
							// 	$login_status = "OTP verified, login successful.";
						 //   $_SESSION["validated_login"] = true;
							// 	header("Location: index.php");
							// 	exit();
							// }


					    $sql2 = "UPDATE users SET otp_latest = '" . $random_otp . "', otp_timestamp = '" . $cur_date ."' WHERE username = '" . $_POST['username'] . "' OR email = '" . $_POST['username'] . "'";
							if(mysqli_query($con1, $sql2)){
							    // echo "Records updated successfully.";
							} else{
							   // echo "Error updating record: " . $con->error;
							}

							// send email
							$to = $row["email"]; //"somebody@example.com, somebodyelse@example.com";
							$subject = "Login OTP - Acada Multipurpose Cooperative Society";
							$message = '
							<html>
								<head>
									<title>AMCS Email</title>
								</head>
								<body>
									<p>Dear <strong>'.$_SESSION["login_user_fullname"].'</strong>, <br><br>
									Please verify your AMCS login with the following six-digit One-Time-Password (OTP).</p>
									<table>
									<tr>
									<td style="width: 100px;">Login OTP:</td>
									<td style="width: 80px;"><strong>'.$random_otp.'</strong></td>
									</tr>
                  </table>
                  <p>Kind regards,<br><br>
                  <strong>AMCS Web Admin</strong><br>
                  <a href="mailto:webmaster@acada-cooperative.com.ng">webmaster@acada-cooperative.com.ng</a></p>
								</body>
							</html>
							';
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							$headers .= 'From: Acada Multipurpose Cooperative Society <no-reply@acada-cooperative.com.ng>' . "\r\n";
							mail($to,$subject,$message,$headers);

							$show_login = false;
              $show_otp = true;
              $show_password_reset = false;
					} else {
              $error_status = "Invalid username or password.";
          }
				}
				// Free result set
				mysqli_free_result( $result );
      } else {
      	$error_status = "Invalid username or password.";
      }

		}

		if(isset($_POST['verify_otp'])) {

      $sql = "SELECT * FROM users WHERE username = '" . $_SESSION["login_user"] . "' OR email = '" . $_SESSION["login_user"] . "'";
      $result = mysqli_query($con1, $sql);
      if ( mysqli_num_rows( $result ) > 0 ) {
				while($row = mysqli_fetch_array($result)) {
					if($_POST['otp_value'] == $row["otp_latest"]) {

					    $login_status = "OTP verified, login successful.";
					    $_SESSION["validated_login"] = true;
					    $_SESSION['last_activity'] = time(); //last activity was now, having logged in.
							$_SESSION['expire_time'] = 2*60*60; //expire time in seconds: two hours
              $_SESSION['session_timeout_msg'] = "";

              // recent activity table update details
              $account = $_SESSION["login_user"];
              $account_details = $_SESSION["login_user_fullname"];
              $activity_details = "User login as ".$_SESSION["login_user_role"];
              $amount = 0.00;
              $added_by = $_SESSION["login_user"];

              // update recent activity tables
              $sql = "INSERT INTO recent_activities (account, account_details, activity_details, amount, added_by) VALUES ('" . $account . "', '" . $account_details . "', '" . $activity_details . "', '" . $amount . "', '" . $added_by . "')";
              if(mysqli_query($con1, $sql)){
                  // echo "Records inserted successfully.";
              } else{
                  echo "Error inserting record: " . $con->error;
                  exit();
              }

              if ($_SESSION["force_password_reset"]){
                $show_login = false;
                $show_otp = false;
                $show_password_reset = true;

              } else {

                if ($_SESSION["login_user_role"] =="admin")
                  header("Location: admin/");
                else
                  header("Location: dashboard/");
                
                exit();
              }

					} else {
		      	$error_status = "Login denied, invalid OTP code.";
		      }
				}
				// Free result set
				mysqli_free_result( $result );
      } else {
      	$error_status = "Invalid username or password.";
      }

		}
  }
  
  if(isset($_POST['btn_change_password'])) {

    $show_login = false;
    $show_otp = false;
    $show_password_reset = true;

    $txt_new_password = mysqli_real_escape_string($con1,$_POST['txt_new_password']);
    $txt_confirm_password = mysqli_real_escape_string($con1,$_POST['txt_confirm_password']);

    $number = preg_match('@[0-9]@', $txt_new_password);
    $uppercase = preg_match('@[A-Z]@', $txt_new_password);
    $lowercase = preg_match('@[a-z]@', $txt_new_password);
    $specialChars = preg_match('@[^\w]@', $txt_new_password);

    if (strlen($txt_new_password) < 8){
      $error_message = $error_message . "Password must be at least 8 characters in length. <br>";
    }

    if (!$number){
      $error_message = $error_message . "Password must contain at least one number. <br>";
    }

    if (!$uppercase){
      $error_message = $error_message . "Password must contain at least one upper case letter. <br>";
    }

    if (!$lowercase){
      $error_message = $error_message . "Password must contain at least one lower case letter. <br>";
    }

    if (!$specialChars){
      $error_message = $error_message . "Password must contain at least one special character. <br>";
    }

    if ($txt_new_password != $txt_confirm_password){
      $error_message = $error_message . "Confirm password does not match new password, please re-type password. <br>";
    }


    if($error_message == "") {

      $hashed_password = password_hash($txt_new_password, PASSWORD_DEFAULT);

      $sql = "UPDATE users SET `password` = '".$hashed_password."' WHERE username = '".$_SESSION["login_user"]."'";
      if(mysqli_query($con1, $sql)){
          // echo "Records inserted successfully.";
      } else{
          echo "Error inserting record: " . $con->error;
          exit();
      }

      // Email password change notification to members automatically upon successful password change
      $to = $_SESSION["login_user_email"]; //"somebody@example.com, somebodyelse@example.com";
      $subject = "Dashboard Login Password Changed - Acada Multipurpose Cooperative Society";
      $message = '
      <html>
        <head>
          <title>AMCS Email</title>
        </head>
        <body>
          <p>Dear <strong>'.$_SESSION["login_user_fullname"].'</strong>, <br><br>
          Please be advised that your AMCS dashboard user login password has been changed successfully. If this was not done by you, please contact the AMCS desk officers immediately to reset your account. Thank you.</p>
          <p>Kind regards,<br><br>
          <strong>AMCS Web Admin</strong><br>
          <a href="mailto:webmaster@acada-cooperative.com.ng">webmaster@acada-cooperative.com.ng</a></p>
        </body>
      </html>
      ';
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: Acada Multipurpose Cooperative Society <no-reply@acada-cooperative.com.ng>' . "\r\n";
      mail($to,$subject,$message,$headers);


      // recent activity table update details
      $account = $_SESSION["login_user"];
      $account_details = $_SESSION["login_user_fullname"];
      $activity_details = "Dashboard login password changed";
      $amount = 0.00;
      $added_by = $_SESSION["login_user"];

      // update recent activity tables
      $sql = "INSERT INTO recent_activities (account, account_details, activity_details, amount, added_by) VALUES ('" . $account . "', '" . $account_details . "', '" . $activity_details . "', '" . $amount . "', '" . $added_by . "')";
      if(mysqli_query($con1, $sql)){
          // echo "Records inserted successfully.";
      } else{
          echo "Error inserting record: " . $con->error;
          exit();
      }

      $_SESSION["validated_login"] = true;
      $_SESSION['last_activity'] = time(); //last activity was now, having logged in.
      $_SESSION['expire_time'] = 2*60*60; //expire time in seconds: two hours
      $_SESSION['session_timeout_msg'] = "";


      $success_message = "Password Change Successful<br>";
      if ($_SESSION["login_user_role"] =="admin"){
          // echo "<script type='text/javascript'>
          //         alert('Password has been successfully updated.');
          //         window.location.href = 'admin/'
          //       </script>";
          $dashboard_url = "admin/";

      } else {
          // echo "<script type='text/javascript'>
          //       alert('Password has been successfully updated.');
          //       window.location.href = 'dashboard/'
          //     </script>";
          $dashboard_url = "dashboard/";
      }
      
      // exit();
      // print_r($_SESSION);

    }

  }


	function hide_email($email)
	{
	    $mail_parts = explode("@", $email);
	    $length = strlen($mail_parts[0]);
	    $show = floor($length/2);
	    $hide = $length - $show;
	    $replace = str_repeat("*", $hide);

	    return substr_replace ( $mail_parts[0] , $replace , $show, $hide ) . "@" . substr_replace($mail_parts[1], "**", 0, 2);
	}

	function time_diff($date_1 , $date_2 , $differenceFormat = '%a' )
	{
	    $datetime1 = date_create($date_1);
	    $datetime2 = date_create($date_2);

	    $interval = date_diff($datetime1, $datetime2);

	    return $interval->format($differenceFormat);

	}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SetsCentral Ltd. Team: Ayo Abioye (abioyeayo@gmail.com) - lead developer, Moses Akujobi - junior developer, & Chime Joseph - junior developer" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">

    <!-- Boostrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>AMCS - Login Page</title>
    <style>
              :root {
                --bs-primary: #f4623a;
                --bs-primary-rgb: 244, 98, 58;
              }
              .btn-primary {
                  color: #fff;
                  background-color: #f4623a;
                  border-color: #f4623a;
              }
              .btn-check:checked + .btn-primary:focus, .btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus, .show > .btn-primary.dropdown-toggle:focus {
                  box-shadow: 0 0 0 0.25rem rgb(246 122 88 / 50%);
              }
              .btn-check:checked + .btn-primary, .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active, .show > .btn-primary.dropdown-toggle {
                  color: #fff;
                  background-color: #c34e2e;
                  border-color: #b74a2c;
              }
              .btn-check:focus + .btn-primary, .btn-primary:focus {
                  color: #fff;
                  background-color: #cf5331;
                  border-color: #c34e2e;
                  box-shadow: 0 0 0 0.25rem rgb(246 122 88 / 50%);
              }
              .btn-primary:hover {
                  color: #fff;
                  background-color: #cf5331;
                  border-color: #c34e2e;
              }
              .btn-check:focus + .btn, .btn:focus {
                  outline: 0;
                  box-shadow: 0 0 0 0.25rem rgb(244 98 58 / 25%);
              }
        </style>
  </head>
  <body <?php echo ($show_otp ? 'onload="count_down()"' : ''); ?>>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <div style="text-align: center;" class="mb-3">
            <div style="max-width: 220px; margin: 0px auto;"><a href="/"><img src="img/acada_logo3.jpg" alt="AMCS MAU Logo" class="img-fluid mb-3"></a></div>
            <h1 class="display-5 fw-bold lh-1 mb-3">Acada Multipurpose Cooperative Society</h1>
            <hr>
            <p class="fs-5">Welcome to the AMCS society account portal. For desk officers, login to manage all AMCS accounts. For society members,
            login to view your AMCS account records. Please kindly contact the desk officers for any assistance.</p>
            <a class="btn btn-primary" href="tel:+2348138319770"><i class="bi bi-telephone pe-1"></i>+234 813 831 9770</a>
          </div>


        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <div class="mb-1 text-center">
            <span class="text-success"><?php echo $login_status; ?></span>
            <span class="text-danger"><?php echo $error_status; ?></span>
            <div id="otp_timeout" class="text-danger"></div>
          </div>
          <div id="login_div" <?php echo ($show_login ? '' : 'style="display:none;"'); ?>>
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
                <label for="floatingInput">SP No. or Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit" name="verify_login">Login</button>
              <!-- <a class="w-100 btn btn-lg btn-primary" href="dashboard/">Login</a> -->
              <hr class="my-4">
              <small class="text-muted">By Logging in, you agree to the terms of use.</small>
            </form>
          </div>
          <div id="otp_div" <?php echo ($show_otp ? '' : 'style="display:none;"'); ?>>
            <hr>
            <div class="text-center">
              <span>A One-Time-Password (OTP) has been sent to your registered email: <?php echo $partial_email;  ?></span>
            </div>
            <br>
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="">
              <div id="display" class="text-center h2"></div>
              <br>
              <div class="modal-body text-center">
                <label>Please enter six digit OTP to Proceed: </label>
                <br><br>
                <input type="number" style="width:120px; text-align: center;" name="otp_value" required>
                <button type="submit" class="btn btn-sm btn-dark" name="verify_otp">Verify</button>
              </div>
            </form>
          </div>
          <div id="reset_password_div" <?php echo ($show_password_reset ? '' : 'style="display:none;"'); ?>>
            <hr>
            <div <?php echo (($success_message == '') ? '' : 'style="display:none;"'); ?>>
              <div class="text-center">
                <h6 style="text-decoration: underline;">Please change your account password</h6>
              </div>
              <div style="align-items: right;">Password must be atleast 8 characters, and must include at least one lower case letter, one upper case letter, one number, and one special character.</div>
              <div class="mb-5 mt-3">
                <span class="text-danger"><?php echo $error_message; ?></span>
              </div>
            </div>

            <div <?php echo (($success_message != '') ? '' : 'style="display:none;"'); ?>>
              <div class="text-center">
                <h5 class="text-success" style="text-decoration: underline;"><?php echo $success_message; ?></h5>
              </div>
              <div style="align-items: right;" class="my-3">Please keep your password safe. Use the settings menu to change your password in the future or contact the desk officers to reset your password. Click the button below to continue.</div>
            </div>

            <div <?php echo (($success_message == '') ? '' : 'style="display:none;"'); ?>>
              <form method="post" action="" class="row g-3 needs-validation p-4 border rounded-3 bg-light" novalidate>
                <div class="col-12">
                  <label for="txt_new_password" class="form-label fw-bold m-1">New Password</label>
                  <input style="max-width: 350px;" type="password" class="form-control form-control-sm" id="txt_new_password" name="txt_new_password" placeholder="new password" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Please enter new password.
                  </div>
                </div>
                <div class="col-12">
                  <label for="txt_confirm_password" class="form-label fw-bold m-1">Confirm Password</label>
                  <input style="max-width: 350px;" type="password" class="form-control form-control-sm" id="txt_confirm_password" name="txt_confirm_password" placeholder="new password" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Please re-type password to confirm.
                  </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit" name="btn_change_password">Change Password</button>
                </div>
              </form>

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
            </div>
            <div class="p-4 border rounded-3 bg-light" <?php echo (($success_message != '') ? '' : 'style="display:none;"'); ?>>
              <a href="<?php echo $dashboard_url; ?>" class="btn btn-primary d-block ms-3">Proceed to Dashboard</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-6 d-flex align-items-center">
          <span class="text-muted ps-1">&copy; 2022 Acada Multipurpose Cooperative Society Ltd.</span>
        </div>

        <div class="col-md-4 mt-md-0 mt-2 d-flex align-items-center">
          <span class="text-muted ps-2 pe-4 ms-auto">Powered by <a style="text-decoration: none; color: #6c757d;" href="https://setscentral.com.ng/">SetsCentral Ltd</a>.</span>
        </div>
      </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" charset="utf8" src="src/js/bootstrap.bundle.min.js"></script>

    <!-- loading jquery library -->
    <script type="text/javascript" charset="utf8" src="src/js/jquery-3.6.0.min.js"></script>

    <script>
        function CountDown(duration, display) {
          if (!isNaN(duration)) {
              var timer = duration, minutes, seconds;

            var interVal=  setInterval(function () {
                  minutes = parseInt(timer / 60, 10);
                  seconds = parseInt(timer % 60, 10);

                  minutes = minutes < 10 ? "0" + minutes : minutes;
                  seconds = seconds < 10 ? "0" + seconds : seconds;

                  $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
                  if (--timer < 0) {
                      timer = duration;
                    SubmitFunction();
                    $('#display').empty();
                    clearInterval(interVal)
                  }
                  },1000);
          }
        }

        function SubmitFunction(){
        $('#otp_timeout').html('<span>Error: OTP timeout!<span>');
        $('#otp_div').hide();
        $('#login_div').show();
        }

        function count_down(){
          CountDown(300,$('#display'));
        }
    </script>
  </body>
</html>

<?php

	// close db connect
	$con1->close();
?>