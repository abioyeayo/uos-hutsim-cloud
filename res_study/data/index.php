<?php

    require_once '../../DB_Connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["Export"])){
        
            header('Content-Type: text/csv; charset=utf-8');  
            header('Content-Disposition: attachment; filename=wsga_lkxr_data.csv');  
            $output = fopen("php://output", "w");  
            fputcsv($output, array('id', 'prolific_pid', 'study_id', 'session_id', 'study_title', 'study_alias', 'study_start_time', 'study_end_time', 'w_md', 'w_pd', 'w_td', 'w_pf', 'w_ef', 'w_fr', 'w_j1', 'w_j2', 'w_j3', 'w_j4', 'w_j5', 'w_j6', 'w_j7', 'w_j8', 'w_j9', 'w_j10', 'w_j11', 'w_j12', 'l_md', 'l_pd', 'l_td', 'l_pf', 'l_ef', 'l_fr', 'l_j1', 'l_j2', 'l_j3', 'l_j4', 'l_j5', 'l_j6', 'l_j7', 'l_j8', 'l_j9', 'l_j10', 'l_j11', 'l_j12', 'date_added'));  
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
        <title>Res_study Data | UoS HutSim</title>
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
            <h2>WSGA_LKXR Res Study Data</h2>
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
                            <th scope="col">study_start_time</th>
                            <th scope="col">study_end_time</th>
                            <th scope="col">w_md</th>
                            <th scope="col">w_pd</th>
                            <th scope="col">w_td</th>
                            <th scope="col">w_pf</th>
                            <th scope="col">w_ef</th>
                            <th scope="col">w_fr</th>
                            <th scope="col">w_j1</th>
                            <th scope="col">w_j2</th>
                            <th scope="col">w_j3</th>
                            <th scope="col">w_j4</th>
                            <th scope="col">w_j5</th>
                            <th scope="col">w_j6</th>
                            <th scope="col">w_j7</th>
                            <th scope="col">w_j8</th>
                            <th scope="col">w_j9</th>
                            <th scope="col">w_j10</th>
                            <th scope="col">w_j11</th>
                            <th scope="col">w_j12</th>
                            <th scope="col">l_md</th>
                            <th scope="col">l_pd</th>
                            <th scope="col">l_td</th>
                            <th scope="col">l_pf</th>
                            <th scope="col">l_ef</th>
                            <th scope="col">l_fr</th>
                            <th scope="col">l_j1</th>
                            <th scope="col">l_j2</th>
                            <th scope="col">l_j3</th>
                            <th scope="col">l_j4</th>
                            <th scope="col">l_j5</th>
                            <th scope="col">l_j6</th>
                            <th scope="col">l_j7</th>
                            <th scope="col">l_j8</th>
                            <th scope="col">l_j9</th>
                            <th scope="col">l_j10</th>
                            <th scope="col">l_j11</th>
                            <th scope="col">l_j12</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $sql = "SELECT * FROM wsga_lkxr_data_table";
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
                                            <td>".$row["study_start_time"]."</td>
                                            <td>".$row["study_end_time"]."</td>
                                            <td>".$row["radio_wsga_md"]."</td>
                                            <td>".$row["radio_wsga_pd"]."</td>
                                            <td>".$row["radio_wsga_td"]."</td>
                                            <td>".$row["radio_wsga_pf"]."</td>
                                            <td>".$row["radio_wsga_ef"]."</td>
                                            <td>".$row["radio_wsga_fr"]."</td>
                                            <td>".$row["radio_wsga_j1"]."</td>
                                            <td>".$row["radio_wsga_j2"]."</td>
                                            <td>".$row["radio_wsga_j3"]."</td>
                                            <td>".$row["radio_wsga_j4"]."</td>
                                            <td>".$row["radio_wsga_j5"]."</td>
                                            <td>".$row["radio_wsga_j6"]."</td>
                                            <td>".$row["radio_wsga_j7"]."</td>
                                            <td>".$row["radio_wsga_j8"]."</td>
                                            <td>".$row["radio_wsga_j9"]."</td>
                                            <td>".$row["radio_wsga_j10"]."</td>
                                            <td>".$row["radio_wsga_j11"]."</td>
                                            <td>".$row["radio_wsga_j12"]."</td>
                                            <td>".$row["radio_lkxr_md"]."</td>
                                            <td>".$row["radio_lkxr_pd"]."</td>
                                            <td>".$row["radio_lkxr_td"]."</td>
                                            <td>".$row["radio_lkxr_pf"]."</td>
                                            <td>".$row["radio_lkxr_ef"]."</td>
                                            <td>".$row["radio_lkxr_fr"]."</td>
                                            <td>".$row["radio_lkxr_j1"]."</td>
                                            <td>".$row["radio_lkxr_j2"]."</td>
                                            <td>".$row["radio_lkxr_j3"]."</td>
                                            <td>".$row["radio_lkxr_j4"]."</td>
                                            <td>".$row["radio_lkxr_j5"]."</td>
                                            <td>".$row["radio_lkxr_j6"]."</td>
                                            <td>".$row["radio_lkxr_j7"]."</td>
                                            <td>".$row["radio_lkxr_j8"]."</td>
                                            <td>".$row["radio_lkxr_j9"]."</td>
                                            <td>".$row["radio_lkxr_j10"]."</td>
                                            <td>".$row["radio_lkxr_j11"]."</td>
                                            <td>".$row["radio_lkxr_j12"]."</td>
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