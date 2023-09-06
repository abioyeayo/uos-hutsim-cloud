<?php

    require_once '../../DB_Connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["Export"])){
        
            header('Content-Type: text/csv; charset=utf-8');  
            header('Content-Disposition: attachment; filename=placebo_study_data.csv');  
            $output = fopen("php://output", "w");  
            fputcsv($output, array('id', 'prolific_pid', 'study_id', 'session_id', 'study_title', 'study_alias', 'study_scenario', 'study_start_time', 'study_end_time', 'pcpt_c1', 'pcpt_c2', 'pcpt_c3', 'pcpt_f1', 'pcpt_f2', 'pcpt_f3', 'pcpt_f4','j1', 'j2', 'j3', 'j4', 'j5', 'j6', 'j7', 'j8', 'j9', 'j10', 'j11', 'j12', 'j13', 'j14', 'j15', 'pcpt_p1', 'pcpt_p2', 'pcpt_p3', 'pcpt_p4', 'pcpt_p5', 'date_added'));
            $sql = "SELECT * FROM placebo_study_data_table";
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
        <title>Placebo effect study data | UoS HutSim</title>
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
            <h2>Placebo Effect Study Data</h2>
            <br>
            <div> 
                <form action="" method="post">
                    <input type="submit" name="Export" value="Download Table"/>
                </form>
                <br>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">prolific_pid</th>
                            <th scope="col">study_id</th>
                            <th scope="col">session_id</th>
                            <th scope="col" style="min-width: 250px;">study_title</th>
                            <th scope="col">study_alias</th>
                            <th scope="col">study_scenario</th>
                            <th scope="col">study_start_time</th>
                            <th scope="col">study_end_time</th>
                            <th scope="col">pcpt_c1</th>
                            <th scope="col">pcpt_c2</th>
                            <th scope="col">pcpt_c3</th>
                            <th scope="col" style="min-width: 120px;">pcpt_f1</th>
                            <th scope="col" style="min-width: 220px;">pcpt_f2</th>
                            <th scope="col" style="min-width: 350px;">pcpt_f3</th>
                            <th scope="col" style="min-width: 220px;">pcpt_f4</th>
                            <th scope="col">j1</th>
                            <th scope="col">j2</th>
                            <th scope="col">j3</th>
                            <th scope="col">j4</th>
                            <th scope="col">j5</th>
                            <th scope="col">j6</th>
                            <th scope="col">j7</th>
                            <th scope="col">j8</th>
                            <th scope="col">j9</th>
                            <th scope="col">j10</th>
                            <th scope="col">j11</th>
                            <th scope="col">j12</th>
                            <th scope="col">j13</th>
                            <th scope="col">j14</th>
                            <th scope="col">j15</th>
                            <th scope="col" style="min-width: 120px;">pcpt_p1</th>
                            <th scope="col" style="min-width: 220px;">pcpt_p2</th>
                            <th scope="col" style="min-width: 350px;">pcpt_p3</th>
                            <th scope="col" style="min-width: 220px;">pcpt_p4</th>
                            <th scope="col" style="min-width: 220px;">pcpt_p5</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $sql = "SELECT * FROM placebo_study_data_table";
                            $result = mysqli_query($con1, $sql);
                            if ( mysqli_num_rows( $result ) > 0 ) {
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<tr>
                                            <td>".$row["id"]."</td>
                                            <td>".$row["prolific_pid"]."</td>
                                            <td>".$row["study_id"]."</td>
                                            <td>".$row["session_id"]."</td>
                                            <td>".$row["study_title"]."</td>
                                            <td>".$row["study_alias"]."</td>
                                            <td>".$row["study_scenario"]."</td>
                                            <td>".$row["study_start_time"]."</td>
                                            <td>".$row["study_end_time"]."</td>
                                            <td>".$row["pcpt_c1"]."</td>
                                            <td>".$row["pcpt_c2"]."</td>
                                            <td>".$row["pcpt_c3"]."</td>
                                            <td>".$row["pcpt_f1"]."</td>
                                            <td>".$row["pcpt_f2"]."</td>
                                            <td>".$row["pcpt_f3"]."</td>
                                            <td>".$row["pcpt_f4"]."</td>
                                            <td>".$row["j1"]."</td>
                                            <td>".$row["j2"]."</td>
                                            <td>".$row["j3"]."</td>
                                            <td>".$row["j4"]."</td>
                                            <td>".$row["j5"]."</td>
                                            <td>".$row["j6"]."</td>
                                            <td>".$row["j7"]."</td>
                                            <td>".$row["j8"]."</td>
                                            <td>".$row["j9"]."</td>
                                            <td>".$row["j10"]."</td>
                                            <td>".$row["j11"]."</td>
                                            <td>".$row["j12"]."</td>
                                            <td>".$row["j13"]."</td>
                                            <td>".$row["j14"]."</td>
                                            <td>".$row["j15"]."</td>
                                            <td>".$row["pcpt_p1"]."</td>
                                            <td>".$row["pcpt_p2"]."</td>
                                            <td>".$row["pcpt_p3"]."</td>
                                            <td>".$row["pcpt_p4"]."</td>
                                            <td>".$row["pcpt_p5"]."</td>
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