<?php

    require_once '../../DB_Connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    $sql = "SELECT * FROM fnirs_data WHERE `Subject` ='23' AND ID >= ".(10 * $_GET['slide'])." ORDER BY ID ASC Limit 1000";
    $result = mysqli_query($con1, $sql);
    if ( mysqli_num_rows( $result ) > 0 ) {
        while($row = mysqli_fetch_array($result)) {
        $AB_PHI_O[] = $row["AB_PHI_O"];
        $AB_PHI_DO[] = $row["AB_PHI_DO"];
        $seq[] = $row["ID"];
        }
    }
    // print_r(array_slice($savings_array,-12));
    // print_r($transaction_date_array);
    // exit();

?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            // echo "Updated: " . date("Y-m-d H:i:s");
            echo "update: " . $_GET['slide'];
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- <script type="text/javascript" charset="utf8" src="../src/js/feather.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <!-- <script type="text/javascript" charset="utf8" src="../src/js/Chart.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- loading jquery library -->
        <!-- <script type="text/javascript" charset="utf8" src="../src/js/jquery-3.6.0.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


        <script>
            // Graphs
            var ctx = document.getElementById('myChart')
            // eslint-disable-next-line no-unused-vars
            var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($seq)?>,
                datasets: [{
                label: 'AB_PHI_O',
                data: <?php echo json_encode($AB_PHI_O)?>,
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff' },
                {
                label: 'AB_PHI_DO',
                data: <?php echo json_encode($AB_PHI_DO)?>,
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
                    text: 'fNIRS Data Plot'
                },
                elements: {
                        point:{
                            radius: 0
                        }
                    },
                animation: false,
            }
            })
        </script>
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>