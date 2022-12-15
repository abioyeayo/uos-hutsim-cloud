<?php
  require_once 'common/prelim.php';
  require_once '../DB_Connect.php';


  $total_savings = 0;
  $total_thrifts = 0;
  $total_loan = 0;
  $total_loan_recovery = 0;
  $outstanding_loan = 0;
  // $savings_array[] = array();
  // $thrifts_array[] = array();
  // $transaction_date_array[] = array();

  $member_id = $_SESSION["login_user"];

  $loan_application_form = "";
  $thrift_withdrawal_form = "";

  // connecting to database
  $con = new DB_Connect();
  $con1=$con->connect();

  // retrieve form download links
  $sql = "SELECT export_filename FROM recent_activities WHERE account_details = 'Loan Application Form' ORDER BY date_added DESC LIMIT 1";
  $result = mysqli_query($con1, $sql);
  if ( mysqli_num_rows( $result ) > 0 ) {
    while($row = mysqli_fetch_array($result)) {
      $loan_application_form = "../src/doc/".$row['export_filename'];
    }
  }
  $sql = "SELECT export_filename FROM recent_activities WHERE account_details = 'Thrift Withdrawal Form' ORDER BY date_added DESC LIMIT 1";
  $result = mysqli_query($con1, $sql);
  if ( mysqli_num_rows( $result ) > 0 ) {
    while($row = mysqli_fetch_array($result)) {
      $thrift_withdrawal_form = "../src/doc/".$row['export_filename'];
    }
  }

  $sql = "SELECT * FROM members WHERE staff_id_no = '" . $member_id . "'";
  $result = mysqli_query($con1, $sql);
  if ( mysqli_num_rows( $result ) > 0 ) {
    while($row = mysqli_fetch_array($result)) {
      $member_full_name = $row['title'] ." ".$row['fname'] ." ".$row['mname'] ." ".$row['lname'];
      $member_email = $row['email'];
      $member_telephone = $row['telephone'];
      $member_dept = $row['dept'];
    }
  }

  $sql = "SELECT * FROM contributions WHERE staff_id_no ='" . $member_id . "' ORDER BY transaction_date ASC";
  $result = mysqli_query($con1, $sql);
  if ( mysqli_num_rows( $result ) > 0 ) {
    while($row = mysqli_fetch_array($result)) {
      $total_savings = $total_savings + $row["savings_contrib"] + $row["savings_booster"];
      $total_thrifts = $total_thrifts + $row["thrifts_contrib"] + $row["thrifts_booster"];

      $savings_array[] = $total_savings / 1000;
      $thrifts_array[] = $total_thrifts / 1000;
      $transaction_date_array[] = $row["transaction_date"];

    }
  }
  // print_r(array_slice($savings_array,-12));
  // print_r($transaction_date_array);
  // exit();

  $sql = "SELECT * FROM loans WHERE staff_id_no ='" . $member_id . "'";
  $result = mysqli_query($con1, $sql);
  if ( mysqli_num_rows( $result ) > 0 ) {
    while($row = mysqli_fetch_array($result)) {
      $total_loan = $total_loan + $row["total_recovery"];

    }
  }

  $sql = "SELECT * FROM `recovery` WHERE staff_id_no ='" . $member_id . "'";
  $result = mysqli_query($con1, $sql);
  if ( mysqli_num_rows( $result ) > 0 ) {
    while($row = mysqli_fetch_array($result)) {
      $total_loan_recovery = $total_loan_recovery + $row["debit_amount"];

    }
  }

  $outstanding_loan = $total_loan - $total_loan_recovery;
  if ($total_loan == 0) {
    $loan_recovery_percentage = 100;
  } else {
    $loan_recovery_percentage = ($total_loan_recovery / $total_loan) * 100;
  }

  $current_year = date('Y');
  $start_year = $current_year - 5;

  for ($i=$start_year; $i <= $current_year; $i++){
    $member_share_year_array[] = $i;

    $sql = "SELECT total_benefits FROM member_shares WHERE member_id_no ='" . $member_id . "' AND benefit_year = '".$i."' ORDER BY date_added DESC LIMIT 1";
    $result = mysqli_query($con1, $sql);
    if ( mysqli_num_rows( $result ) > 0 ) {
      while($row = mysqli_fetch_array($result)) {
        $member_share_array[] = $row["total_benefits"];
      }
    } else {
        $member_share_array[] = 0;
    }

  }

  // print_r($member_share_array);
  // print_r($member_share_year_array);
  // exit();


  // close db connect
  $con1->close();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SetsCentral Ltd. Team: Ayo Abioye (abioyeayo@gmail.com) - lead developer, Moses Akujobi - junior developer, & Chime Joseph - junior developer" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../src/css/bootstrap.min.css">

    <!-- Datatables css -->
    <link rel="stylesheet" type="text/css" href="../src/css/jquery.dataTables.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .dataTables_wrapper .dataTables_filter {
          margin-bottom: 10px;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="src/css/dashboard.css" rel="stylesheet">
    <link href="src/css/headers.css" rel="stylesheet">

    <title>AMCS - Member Dashboard</title>
  </head>
  <body>

    <?php require_once 'common/header.php'; ?>

    <div class="container-fluid">
      <div class="row">

        <?php
          $active_page = "dashboard";
          require_once 'common/sidebar.php';
        ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Member Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a class="btn btn-sm btn-outline-secondary m-1" href="<?php echo $loan_application_form;?>" target="_blank"><span data-feather="file"></span> Loan Application Form</a>
              <a class="btn btn-sm btn-outline-secondary m-1" href="<?php echo $thrift_withdrawal_form;?>" target="_blank"><span data-feather="file"></span> Thrift Withdrawal Form</a>
              <button type="button" class="btn btn-sm btn-outline-secondary m-1" onclick="window.print();"><span data-feather="printer"></span> Print Dashboard</button>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 fs-6 fw-bold">
              <div class="shadow-sm p-3 mb-3 bg-body rounded text-center"><?php echo $member_full_name;?> (<?php echo $member_id;?>)</div>
            </div>
            <div class="col-md-6 fs-6 fw-bold">
              <div id="live_clock" class="shadow-sm p-3 mb-3 bg-body rounded text-center"></div>
              <script>
                var live_clock = document.getElementById('live_clock');

                function time() {
                  var d = new Date();
                  var s = d.getSeconds();
                  var m = d.getMinutes();
                  var h = d.getHours();
                  // live_clock.textContent =
                  //   ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
                  live_clock.textContent = d.toLocaleString(undefined, {year: 'numeric', month: 'long', day: '2-digit', weekday:"long", hour: '2-digit', hour12: false, minute:'2-digit', second:'2-digit'});

                }

                setInterval(time, 1000);
              </script>

            </div>

          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-6 col-xxl-3">
              <div class="card h-md-100">
                <div class="card-header pb-0 text-center">
                  <h6>Total Savings</h6>
                </div>
                <div class="card-body text-center fs-4 fw-bold">
                  <span>₦ <?php echo number_format($total_savings,2);?></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card h-md-100">
                <div class="card-header pb-0 text-center">
                  <h6>Total Thrifts</h6>
                </div>
                <div class="card-body text-center fs-4 fw-bold">
                  <span>₦ <?php echo number_format($total_thrifts,2);?></span>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="card h-md-100">
                <div class="card-header pb-0 text-center">
                  <h6>Loan Recoveries</h6>
                </div>
                <div class="card-body text-center fs-6 fw-bold">
                  <div style="margin-top: -8px;">Total: ₦ <?php echo number_format($total_loan,2);?> | Outstanding: ₦ <?php echo number_format($outstanding_loan,2);?></div>
                  <div class="progress mt-1">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo number_format($loan_recovery_percentage,2);?>%" aria-valuenow="<?php echo number_format($loan_recovery_percentage,2);?>" aria-valuemin="0" aria-valuemax="100"><?php echo number_format($loan_recovery_percentage,2);?> %</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card h-md-100">
                <div class="card-body pt-2">
                  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card h-md-100">
                <div class="card-body pt-2">
                  <canvas class="my-4 w-100" id="myChart2" width="900" height="380"></canvas>
                </div>
              </div>
            </div>
          </div>

          <br>
          <hr>
          <h4 id="contributions">Member Contributions</h4>
          <div class="table-responsive">
            <table id="member_contributions_table" class="cell-border compact stripe" style="width:100%">
              <thead>
                <tr>
                  <th scope="col">Transaction Date</th>
                  <th scope="col">Savings (₦)</th>
                  <th scope="col">Thrift (₦)</th>
                  <th scope="col">Savings Booster (₦)</th>
                  <th scope="col">Thrift Booster (₦)</th>
                </tr>
              </thead>
              <tbody>

                <?php

                   // connecting to database
                  $con = new DB_Connect();
                  $con1=$con->connect();

                  $sql = "SELECT * FROM contributions WHERE staff_id_no ='" . $member_id . "'";
                  $result = mysqli_query($con1, $sql);
                  if ( mysqli_num_rows( $result ) > 0 ) {
                    while($row = mysqli_fetch_array($result)) {
                      echo "<tr>
                              <td>".$row["transaction_date"]."</td>
                              <td>".$row["savings_contrib"]."</td>
                              <td>".$row["thrifts_contrib"]."</td>
                              <td>".$row["savings_booster"]."</td>
                              <td>".$row["thrifts_booster"]."</td>
                            </tr>";
                    }
                  }

                  // close db connect
                  $con1->close();

                ?>

              </tbody>
            </table>
          </div>

          <br><hr><br>
          <h4 id="loans">Member Loans</h4><br>
          <div class="table-responsive">
            <table id="loans_table" class="cell-border compact stripe" style="width:100%">
              <thead>
                <tr>
                  <th scope="col">Loan Date</th>
                  <th scope="col">Loan Ref.</th>
                  <th scope="col">Commence Recovery</th>
                  <th scope="col">Cease Recovery</th>
                  <th scope="col">Loan Duration</th>
                  <th scope="col">Loan Principal (₦)</th>
                  <th scope="col">Interest Rate (%)</th>
                  <th scope="col">Total Recovery (₦)</th>
                  <th scope="col">Monthly Deduction (₦)</th>
                  <th scope="col">Surety</th>
                  <th scope="col">Outstanding</th>
                </tr>
              </thead>
              <tbody>

                <?php

                   // connecting to database
                  $con = new DB_Connect();
                  $con1=$con->connect();

                  $sql = "SELECT * FROM loans WHERE staff_id_no ='" . $member_id . "'";
                  $result = mysqli_query($con1, $sql);
                  if ( mysqli_num_rows( $result ) > 0 ) {
                    while($row = mysqli_fetch_array($result)) {
                      echo "<tr>
                              <td>".$row["loan_date"]."</td>
                              <td>".$row["loan_ref_no"]."</td>
                              <td>".$row["commence_loan_rec"]."</td>
                              <td>".$row["cease_loan_rec"]."</td>
                              <td>".$row["loan_duration"]."</td>
                              <td>".number_format($row["loan_principal"],2)."</td>
                              <td>".$row["interest_rate"]."</td>
                              <td>".number_format($row["total_recovery"],2)."</td>
                              <td>".number_format($row["monthly_deduction"],2)."</td>
                              <td>".$row["surety"]."</td>
                              <td>".number_format($row["outstanding"],2)."</td>
                            </tr>";

                    }
                  }

                  // close db connect
                  $con1->close();

                ?>

              </tbody>
            </table>
          </div>

          <br><hr><br>
          <h4 id="recovery">Loan Recoveries</h4><br>
          <div class="table-responsive">
            <table id="recovery_table" class="cell-border compact stripe" style="width:100%">
              <thead>
                <tr>
                  <th scope="col">Recovery Date</th>
                  <th scope="col">Debit Amount (₦)</th>
                  <th scope="col">Loan Ref. No.</th>
                </tr>
              </thead>
              <tbody>

                <?php

                   // connecting to database
                  $con = new DB_Connect();
                  $con1=$con->connect();

                  $sql = "SELECT * FROM `recovery` WHERE staff_id_no ='" . $member_id . "'";
                  $result = mysqli_query($con1, $sql);
                  if ( mysqli_num_rows( $result ) > 0 ) {
                    while($row = mysqli_fetch_array($result)) {
                      echo "<tr>
                              <td>".$row["recovery_date"]."</td>
                              <td>".number_format($row["debit_amount"],2)."</td>
                              <td>".$row["loan_ref_no"]."</td>
                            </tr>";

                    }
                  }

                  // close db connect
                  $con1->close();

                ?>

              </tbody>
            </table>
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
        </main>
      </div>
    </div>



    <!--<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>-->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" charset="utf8" src="../src/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../src/js/feather.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../src/js/Chart.min.js"></script>

    <!-- loading jquery library -->
    <script type="text/javascript" charset="utf8" src="../src/js/jquery-3.6.0.min.js"></script>

    <!-- Datatable javascript -->
    <script type="text/javascript" charset="utf8" src="../src/js/jquery.dataTables.min.js"></script>

    <script>
      $(document).ready( function () {
        $('#member_contributions_table').DataTable({
            "order": [[ 0, "desc" ]],
            "pageLength": 10
          });

        $('#loans_table').DataTable({
            "order": [[ 0, "desc" ]],
            "pageLength": 10
          });

        $('#recovery_table').DataTable({
            "order": [[ 0, "desc" ]],
            "pageLength": 10
          });

        // smooth scroll animation to selected side navigation link
        var $_GET = <?php echo json_encode($_GET); ?>;
        var scroll_to_nav = '#' +  $_GET['nav'];
        $('html, body').animate({
            scrollTop: $(scroll_to_nav).offset().top-100
        }, 'fast');

      } );

      (function () {
        'use strict'

        feather.replace({ 'aria-hidden': 'true' })

        // Graphs
        var ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($transaction_date_array)?>,
            datasets: [{
              label: 'Savings (₦)',
              data: <?php echo json_encode($savings_array)?>,
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: '#007bff',
              borderWidth: 4,
              pointBackgroundColor: '#007bff' },
            {
              label: 'Thrifts (₦)',
              data: <?php echo json_encode($thrifts_array)?>,
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: 'rgba(255, 99, 132, 1)',
              borderWidth: 4,
              pointBackgroundColor: 'rgba(255, 99, 132, 1)' }
            ]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            },
            legend: {
              display: true
            },
            title: {
                display: true,
                text: 'Member\'s Contributions (Thousand ₦)'
            },
            elements: {
                    point:{
                        radius: 0
                    }
                }
          }
        })

        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($member_share_year_array)?>,
                datasets: [{
                    label: 'Paid Shares Dividend (Naira)',
                    data: <?php echo json_encode($member_share_array)?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    // borderColor: [
                    //     'rgba(255, 99, 132, 1)',
                    //     'rgba(54, 162, 235, 1)',
                    //     'rgba(255, 206, 86, 1)',
                    //     'rgba(75, 192, 192, 1)',
                    //     'rgba(153, 102, 255, 1)',
                    //     'rgba(255, 159, 64, 1)'
                    // ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                title: {
                    display: true,
                    text: 'Paid Shares Dividend (₦)'
                },
                legend: {
                  display: false
                }
            }
        });

      })()
    </script>
  </body>
</html>
