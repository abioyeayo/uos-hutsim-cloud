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
        <title>AI UK 2023 Demo | UoS HutSim</title>
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
                <a href="/demo/aiuk2023/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <h4>UoS HutSim</h4>
                </a>

                <div class="col-12 col-md-auto mb-2 justify-content-center mb-md-0 text-center">
                    <h4>AI UK 2023 Demo</h4>
                </div>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-sm btn-link me-2"><a href="/demo/aiuk2023/hutsim/">Simulator</a></button>
                    <button type="button" class="btn btn-sm btn-link"><a href="/demo/aiuk2023/leaderboard.php">Leaderboard</a></button>
                </div>
            </header>
        </div>

        <!-- page content -->
        <div class="container" style="min-width: 768px;">
            <div class="p-4 mt-3 mb-1 shadow bg-light">
                <h1 class="text-center fs-3 fw-bold p-1 mb-3">HutSim: Demonstrating Performance Benefits of Human-Swarm Teaming</h1>
                <div class="row mb-5 mt-4">
                    <div class="col-xxl-5 p-4">
                        <h4>Abstract</h4>
                        <p>The Human Teaming Simulator (HutSim) is unique in its simulation of drone swarms completing tasks, from package delivery to search and rescue, with varying levels of human control. In this demonstration, the University of Southampton’s Agents, Interaction, and Complexity Group showcases the performance gain offered by maintaining a “human-in-the-loop” over a fully autonomous system. This is illustrated in the context of search and rescue, with autonomous allocation of resources to those in need. Where a fully autonomous system will make wasted journeys through misclassification of scenes, a human-in-the-loop can overrule swarm assumptions based on broader scene context, improving both speed and accuracy.
                        To facilitate the live demonstration, attendees can get hands-on experience by analysing incoming images to inform the swarm’s movements and decision-making, as part of the human-swarm team. The performance gain is then quantified and compared to the fully autonomous system.</p>
                    </div>
                    <div class="col-xxl-6 text-center mt-xxl-5 pt-xxl-3 pb-5">
                        <video class="shadow bg-body rounded" width="640" height="360" controls>
                            <source src="aiuk2023_demo.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <div class="col-12 ps-4 pe-4">
                        <p>Drone swarms can operate at varying levels of autonomy, with fully autonomous swarms having limited potential for complex contextual insights, whilst human-driven swarms are constrained in their speed and complexity by the operator’s cognitive overload. The demonstration presented illustrates that the optimal solution is to be found in the mixed-initiative approach, which offers machine-speed decision-making and response, alongside the contextual insights from a human overseer.
                        This scenario is linked both to national security, as well as disaster relief, with wide-reaching implications for current thinking in human-swarm teaming. This work demonstrates the importance of maintaining human oversight of swarm operations, and the limitations of fully autonomous systems. This aligns with the Defence AI Strategy 2022, which articulates the requirement to maintain an “appropriate level of human oversight, verification, and control”. Moreover, stating the necessity for “development of effective Human-Machine Teaming, combining human cognition, inventiveness and responsibility with machine-speed analytical capabilities”. This research is a critical step to realising these goals</p>
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
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>