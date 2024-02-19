<?php

    require_once '../../DB_Connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    $sql = "SELECT * FROM fnirs_data WHERE `Subject` ='23' ORDER BY ID ASC Limit 1000";
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>TAS 2024 Showcase Demo | UoS HutSim</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
                }
        </style>
    </head>
    <body style="background-color: #efefef;">
        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="haris_logo" viewBox="0 0 24 24">
                <title>Haris Logo</title>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0 L0 24 L24 24 L24 0 Z M4.5 4.5 L9.5 4.5 L9.5 9.5 L14 9.5 L14 4.5 L19 4.5 L19 19.5 L14 19.5 L14 15 L9.5 15 L9.5 19.5 L4.5 19.5 Z"></path>
            </symbol>
        </svg>
        <div class="shadow" style="background-color: #ffffff;">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom container">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="32" height="32"><use xlink:href="#haris_logo"/></svg>
                    <span class="fs-4 fw-bold">HARIS</span>
                </a>

                <div class="col-12 col-md-auto mb-2 justify-content-center mb-md-0 text-center">
                    <h4>TAS 2024 Showcase Demo</h4>
                </div>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-sm btn-link me-2"><a href="/demo/tas2024/hutsim/">Simulator</a></button>
                    <button type="button" class="btn btn-sm btn-link"><a href="/demo/tas2024/leaderboard.php">Leaderboard</a></button>
                </div>
            </header>
        </div>

        <!-- page content -->
        <div class="container" style="min-width: 768px;">
            <div class="p-4 mt-3 mb-1 shadow bg-light">
                <h1 class="text-center fs-3 fw-bold p-1 mb-3">Dynamically adaptive human swarm interaction</h1>
                <div class="row mb-5 mt-4">
                    <div class="col-xxl-5 p-4">
                        <h4>Abstract</h4>
                        <p>Advancement in swarm robotics has made it possible to develop systems that are adaptable and scalable. A practical application of this is in search and rescue missions where instead of using a single UAV operated by a single pilot to provide aerial coverage of the mission space, it is possible to deploy a swarm of UAVs controlled by a single swarm operator collecting data at n-times the rate with an increased efficiency in the human-to-robot mapping ratio. One of the major challenges associated with a single swarm operator controlling a swarm of UAVs is the interaction interface. What is the best way to present the status of each UAV in the swarm as well as the data collected by each agent to the swarm operator in real time without resulting in an information overload? One approach is to abstract the information in order to reduce workload. However, this could affect the explainability of the swarm actions and hence the operator's trust in the system.
                        </p>
                    </div>
                    <div class="col-xxl-6 text-center mt-xxl-5 pt-xxl-3 pb-5">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                        <div id="fnirs_table"></div>
                        <!-- <div style="border: solid 1px black;">
                            <canvas class="my-4 w-100" id="myChart3" width="900" height="380"></canvas>
                        </div> -->
                        <!-- <video class="shadow bg-body rounded" width="640" height="360" controls>
                            <source src="uos-hutsim-aamas-2023-demo-video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video> -->
                    </div>

                    <div class="col-12 ps-4 pe-4">
                        <p>
                            The Human And Robot Interactive Swarm (HARIS) simulator is a web-based multi-agent simulator with human interaction at the core. It is specifically designed to test and optimise human swarm interaction and supports on-the-fly customisation of every aspect of the swarm's command and control. Heatmaps for the whole swarm and individual icons for each agent have each been found to be effective depending on the swarm size, number of tasks, and the user's cognitive workload. Certain scenarios such as time pressure and diagnosing errors may be better suited to a particular visualisation or abstraction approach. Therefore, we present a system that monitors the operator's cognitive workload and dynamically updates the interface to match their performance level. In this way, the user could benefit from the best available user interface configuration, and the system can help control their workload. 
                        </p>
                        <p>
                            Our showcase demo will allow participants to interact with our simulator to perform a human swarm teaming task and experience the interface dynamically adapting to their change in workload due to task density increasing or decreasing while maintaining a high task completion efficiency. Participants will be able to operate the swarm and see the simulator abstracting individual drones into heatmaps and eliminating unnecessary data when they become too overloaded.
                        </p>
                        <p>LOGOS - UoS, Nortingham, Bournemouth, DSTL, TAS</p>
                        <!-- <p>
                            <b>Keywords</b>: Human-Swarm Teaming; Swarm Robotics; Human-robot Interaction; Simulation Environments; HARIS. <br><br>
                            <b>ACM Reference Format:</b> William Hunt , Jack Ryan , Ayodeji O. Abioye , Sarvapali D. Ramchurn, and Mohammad D. Soorati . 
                            2023. Demonstrating Performance Benefits of Human-Swarm Teaming: Demonstration Track. In <em>Proc. of the 22nd International 
                            Conference on Autonomous Agents and Multiagent Systems (AAMAS 2023), London, United Kingdom, May 29 – June 2, 2023</em>, IFAAMAS, 3 pages.
                        </p> -->
                    </div>
                </div>
                <footer class="d-flex flex-wrap justify-content-between align-items-center pt-3 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <span class="mb-3 mb-md-0 text-muted">© 2023 uos-hutsim</span>
                    </div>
                </footer>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- <script type="text/javascript" charset="utf8" src="../src/js/feather.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <!-- <script type="text/javascript" charset="utf8" src="../src/js/Chart.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- loading jquery library -->
        <!-- <script type="text/javascript" charset="utf8" src="../src/js/jquery-3.6.0.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Script refereshing plot every 1000 ms -->
        <script type="text/javascript">
            $(document).ready(function(){
            refreshGraph();
            });

            var slide = 0;
            var refreshDelay = 1000;
            function refreshGraph(){
                slide = slide + 1;
                if (slide > 20) {   // after first 15 seconds change update to once per minute
                    refreshDelay = 3600000;                    
                } else if (slide > 15) {    // after 5 minutes change update to once per hour
                    refreshDelay = 60000;                    
                } else {}
                $('#fnirs_table').load('fnirs_latest.php?slide='+slide, function(){
                setTimeout(refreshGraph, refreshDelay);
                });
            }
        </script>

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
                    }
            }
            })
        </script>
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>