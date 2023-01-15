<?php

    require_once '../../DB_Connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["Export"])){
        
            header('Content-Type: text/csv; charset=utf-8');  
            header('Content-Disposition: attachment; filename=res_study_data.csv');  
            $output = fopen("php://output", "w");  
            fputcsv($output, array('id', 'prolific_pid', 'study_id', 'session_id', 'study_title', 'study_alias', 'study_start_time', 'study_end_time', '1md', '1pd', '1td', '1pf', '1ef', '1fr', '1j1', '1j2', '1j3', '1j4', '1j5', '1j6', '1j7', '1j8', '1j9', '1j10', '1j11', '1j12', '2md', '2pd', '2td', '2pf', '2ef', '2fr', '2j1', '2j2', '2j3', '2j4', '2j5', '2j6', '2j7', '2j8', '2j9', '2j10', '2j11', '2j12', 'date_added'));  
            $query = "SELECT * from employeeinfo ORDER BY emp_id DESC";  
            $result = mysqli_query($con, $query);  
            $sql = "SELECT * FROM wsga_lkxr_data_table";
            $result = mysqli_query($con1, $sql);
            // while($row = mysqli_fetch_array($result)) {
            while($row = mysqli_fetch_assoc($result)){  
                fputcsv($output, $row);  
            }  
            fclose($output);
            exit();
        }  
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>AI UK 2023 Demo | UoS HutSim</title>
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
            <h2>AI UK 2023 Demo</h2>
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