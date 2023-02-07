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
        <title>AAMAS 2023 Demo | UoS HutSim</title>
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
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <h4>UoS HutSim</h4>
                </a>

                <div class="col-12 col-md-auto mb-2 justify-content-center mb-md-0 text-center">
                    <h4>AAMAS 2023 Demo</h4>
                </div>

                <div class="col-md-3 text-end">
                    <a href="/demo/aamas2023/leaderboard.php" class="nav-link px-2 link-primary">Leaderboard</a>
                </div>
            </header>
        </div>

        <!-- page content -->
        <div class="container" style="min-width: 768px;">
            <div class="p-4 mt-3 mb-1 shadow bg-light">
                <h1 class="text-center fs-3 fw-bold p-1 mb-3">Demonstrating Performance Benefits of Human-Swarm Teaming</h1>
                <div class="row mb-5 mt-4">
                    <div class="col-xxl-5 p-4">
                        <h4>Abstract</h4>
                        <p>Autonomous swarms of robots can bring robustness, scalability and adaptivity to safety-critical tasks such as search and rescue but their application is still very limited. Using semi-autonomous swarms with human control can be a way to bring robot swarms to real-world applications. Human operators can define goals for the swarm, monitor their performance and interfere with or overrule the decisions and behaviour. In this demonstration, we show how having human operators next to the swarm can influence the performance of the system in accuracy and speed of delivering the tasks. We will use our Human Teaming Simulator, HutSim, which is unique in its simulation of aerial swarms completing tasks, from package delivery to search and rescue, with varying levels of human control. In this demonstration, we will showcase the performance gain offered by maintaining a “human-in-the-loop” over a fully autonomous system. This is illustrated in the context of search and rescue, with autonomous allocation of resources to those in need. Where a fully autonomous system will make wasted journeys through misclassification of scenes, a human-in-the-loop can overrule swarm assumptions based on broader scene context, improving both speed and accuracy.</p>
                    </div>
                    <div class="col-xxl-6 text-center mt-xxl-5 pt-xxl-5">
                        <video width="640" height="360" controls style="border: solid 2px black;">
                            <source src="uos-hutsim-aamas-2023-demo-video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
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