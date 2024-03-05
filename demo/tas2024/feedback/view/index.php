<?php

    require_once '../../../../DB_Connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["Export"])){
        
            header('Content-Type: text/csv; charset=utf-8');  
            header('Content-Disposition: attachment; filename=haris_tas24_demo_feedback.csv');  
            $output = fopen("php://output", "w");  
            fputcsv($output, array('id', 'demo_event', 'ptcpt_name', 'ptcpt_feedback', 'date_created'));
            $sql = "SELECT * FROM demo_feedback_table WHERE demo_event='TAS 2024 Showcase Demo'";
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
        <title>TAS2024 Demo Feedback | UoS HARIS</title>
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
            <h2>TAS 2024 Showcase Demo - Feedback</h2>
            <br>
            <div> 
                <form action="" method="post">
                    <input type="submit" name="Export" value="Download Feedback"/>
                </form>
                <br>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col" style="min-width: 350px;">Feedback</th>
                            <th scope="col" style="min-width: 120px;">Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $sql = "SELECT * FROM demo_feedback_table WHERE demo_event='TAS 2024 Showcase Demo'";
                            $result = mysqli_query($con1, $sql);
                            if ( mysqli_num_rows( $result ) > 0 ) {
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<tr>
                                            <td>".$row["id"]."</td>
                                            <td>".$row["ptcpt_name"]."</td>
                                            <td>".$row["ptcpt_feedback"]."</td>
                                            <td>".$row["date_created"]."</td>
                                        </tr>";
                                }
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>