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
                            <th scope="col">1md</th>
                            <th scope="col">1pd</th>
                            <th scope="col">1td</th>
                            <th scope="col">1pf</th>
                            <th scope="col">1ef</th>
                            <th scope="col">1fr</th>
                            <th scope="col">1j1</th>
                            <th scope="col">1j2</th>
                            <th scope="col">1j3</th>
                            <th scope="col">1j4</th>
                            <th scope="col">1j5</th>
                            <th scope="col">1j6</th>
                            <th scope="col">1j7</th>
                            <th scope="col">1j8</th>
                            <th scope="col">1j9</th>
                            <th scope="col">1j10</th>
                            <th scope="col">1j11</th>
                            <th scope="col">1j12</th>
                            <th scope="col">2md</th>
                            <th scope="col">2pd</th>
                            <th scope="col">2td</th>
                            <th scope="col">2pf</th>
                            <th scope="col">2ef</th>
                            <th scope="col">2fr</th>
                            <th scope="col">2j1</th>
                            <th scope="col">2j2</th>
                            <th scope="col">2j3</th>
                            <th scope="col">2j4</th>
                            <th scope="col">2j5</th>
                            <th scope="col">2j6</th>
                            <th scope="col">2j7</th>
                            <th scope="col">2j8</th>
                            <th scope="col">2j9</th>
                            <th scope="col">2j10</th>
                            <th scope="col">2j11</th>
                            <th scope="col">2j12</th>
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