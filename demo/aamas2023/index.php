<?php

    require_once '../../DB_Connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>AAMAS 2023 Demo | UoS HutSim</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
                }
        </style>
    </head>
    <body>
        <div style="margin-left:5px;">
            <h2>AAMAS 2023 Demo</h2>
            <br>
            <p>This page is under development. Please check back later. Thank you.</p>
            <div>
            </div>
        </div>
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>