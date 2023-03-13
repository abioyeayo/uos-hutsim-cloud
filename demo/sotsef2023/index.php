<?php

    require_once '../../DB_Connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>SOTSEF 2023 Demo | UoS HutSim</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
                }
        </style>
    </head>
    <body style="background-color: #efefef;">
        <div class="shadow" style="background-color: #ffffff;">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom container">
                <a href="/demo/sotsef2023/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <h4>UoS HutSim</h4>
                </a>

                <div class="col-12 col-md-auto mb-2 justify-content-center mb-md-0 text-center">
                    <h4>SOTSEF 2023 Demo</h4>
                </div>

                <!-- <div class="col-md-3 text-end border">
                    <a href="/demo/sotsef2023/hutsim/" class="nav-link px-2 link-primary">Simulator</a>
                    <a href="/demo/sotsef2023/leaderboard.php" class="nav-link px-2 link-primary">Leaderboard</a>
                </div> -->
                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-sm btn-link me-2"><a href="/demo/sotsef2023/hutsim/">Simulator</a></button>
                    <button type="button" class="btn btn-sm btn-link"><a href="/demo/sotsef2023/leaderboard.php">Leaderboard</a></button>
                </div>
            </header>
        </div>

        <!-- page content -->
        <div class="container" style="min-width: 768px;">
            <div class="p-4 mt-3 mb-1 shadow bg-light">
                <h1 class="text-center fs-3 fw-bold p-1 mb-3">Demonstrating Performance Benefits of Human-Swarm Teaming</h1>
                <div class="row mb-3 mt-4">
                    <div class="col-xxl-5 p-4">
                        <h4>Abstract</h4>
                        <p>The Human Teaming Simulator (HuTSim) is unique in its simulation of drone swarms completing tasks, from package delivery to search and rescue, with varying levels of human control. In this demonstration, the University of Southampton's Agents, Interaction, and Complexity Group showcase the performance gain offered by maintaining a "human-in-the-loop" over a fully autonomous system. This is illustrated in the context of search and rescue, with the autonomous allocation of resources to those in need. Where a fully autonomous system will make wasted journeys through the misclassification of scenes, a human-in-the-loop can overrule swarm assumptions based on broader scene context, improving both speed and accuracy.
                        
                        <br><br>You can get hands-on experience by analysing incoming images to inform the swarm's movements and decision-making, as part of the human-swarm team. The performance gain is then quantified and compared to the fully autonomous system.</p>
                    </div>
                    <div class="col-xxl-6 text-center mt-xxl-5 pt-xxl-3">
                        <img src="res_study_tutorial.png" alt="Human Swarm Teaming simulation screenshot" width="640" style="border: solid 1px black;">
                    </div>
                </div>
                <div class="text-center mb-3">
                    <img src="sotsef_footer.png" alt="SOTSEF Banner" class="img-fluid">
                </div>
                <footer class="d-flex flex-wrap justify-content-between align-items-center pt-3 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <span class="mb-3 mb-md-0 text-muted">© 2023 uos-hutsim</span>
                    </div>
                </footer>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>