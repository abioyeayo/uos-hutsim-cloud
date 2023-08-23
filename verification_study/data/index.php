<?php

    require_once '../../DB_Connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["Export"])){
        
            header('Content-Type: text/csv; charset=utf-8');  
            header('Content-Disposition: attachment; filename=verification_study_data.csv');  
            $output = fopen("php://output", "w");  
            fputcsv($output, array('id', 'prolific_pid', 'study_id', 'session_id', 'study_title', 'study_alias', 'study_scenario', 'study_start_time', 'study_end_time', 'bfg_chk1', 'bfg_chk2', 'bfg_chk3', 'pcpt_c1', 'pcpt_c2', 'pcpt_c3', 'pcpt_f1', 'pcpt_f2', 'pcpt_f3', 'pcpt_f4', 'pcpt_f5', 'md', 'pd', 'td', 'pf', 'ef', 'fr', 'u1', 'u2', 'u3', 'u4', 'u5', 'u6', 'u7', 'u8', 'u9', 'u10', 'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'a9', 'a10', 'j1', 'j2', 'j3', 'j4', 'j5', 'j6', 'j7', 'j8', 'j9', 'j10', 'j11', 'j12', 'j13', 'pcpt_p1', 'pcpt_p2', 'pcpt_p3', 'pcpt_p4', 'date_added'));
            $sql = "SELECT * FROM verification_study_data_table";
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
        <title>Verification study data | UoS HutSim</title>
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
            <h2>Verification Study Data</h2>
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
                            <th scope="col">bfg_chk1</th>
                            <th scope="col">bfg_chk2</th>
                            <th scope="col">bfg_chk3</th>
                            <th scope="col">pcpt_c1</th>
                            <th scope="col">pcpt_c2</th>
                            <th scope="col">pcpt_c3</th>
                            <th scope="col" style="min-width: 120px;">pcpt_f1</th>
                            <th scope="col" style="min-width: 220px;">pcpt_f2</th>
                            <th scope="col" style="min-width: 350px;">pcpt_f3</th>
                            <th scope="col" style="min-width: 220px;">pcpt_f4</th>
                            <th scope="col" style="min-width: 220px;">pcpt_f5</th>
                            <th scope="col">md</th>
                            <th scope="col">pd</th>
                            <th scope="col">td</th>
                            <th scope="col">pf</th>
                            <th scope="col">ef</th>
                            <th scope="col">fr</th>
                            <th scope="col">u1</th>
                            <th scope="col">u2</th>
                            <th scope="col">u3</th>
                            <th scope="col">u4</th>
                            <th scope="col">u5</th>
                            <th scope="col">u6</th>
                            <th scope="col">u7</th>
                            <th scope="col">u8</th>
                            <th scope="col">u9</th>
                            <th scope="col">u10</th>
                            <th scope="col">a1</th>
                            <th scope="col">a2</th>
                            <th scope="col">a3</th>
                            <th scope="col">a4</th>
                            <th scope="col">a5</th>
                            <th scope="col">a6</th>
                            <th scope="col">a7</th>
                            <th scope="col">a8</th>
                            <th scope="col">a9</th>
                            <th scope="col">a10</th>
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
                            <th scope="col" style="min-width: 120px;">pcpt_p1</th>
                            <th scope="col" style="min-width: 220px;">pcpt_p2</th>
                            <th scope="col" style="min-width: 350px;">pcpt_p3</th>
                            <th scope="col" style="min-width: 220px;">pcpt_p4</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $sql = "SELECT * FROM verification_study_data_table";
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
                                            <td>".$row["briefing_attn_chk1"]."</td>
                                            <td>".$row["briefing_attn_chk2"]."</td>
                                            <td>".$row["briefing_attn_chk3"]."</td>
                                            <td>".$row["pcpt_c1"]."</td>
                                            <td>".$row["pcpt_c2"]."</td>
                                            <td>".$row["pcpt_c3"]."</td>
                                            <td>".$row["pcpt_f1"]."</td>
                                            <td>".$row["pcpt_f2"]."</td>
                                            <td>".$row["pcpt_f3"]."</td>
                                            <td>".$row["pcpt_f4"]."</td>
                                            <td>".$row["pcpt_f5"]."</td>
                                            <td>".$row["md"]."</td>
                                            <td>".$row["pd"]."</td>
                                            <td>".$row["td"]."</td>
                                            <td>".$row["pf"]."</td>
                                            <td>".$row["ef"]."</td>
                                            <td>".$row["fr"]."</td>
                                            <td>".$row["u1"]."</td>
                                            <td>".$row["u2"]."</td>
                                            <td>".$row["u3"]."</td>
                                            <td>".$row["u4"]."</td>
                                            <td>".$row["u5"]."</td>
                                            <td>".$row["u6"]."</td>
                                            <td>".$row["u7"]."</td>
                                            <td>".$row["u8"]."</td>
                                            <td>".$row["u9"]."</td>
                                            <td>".$row["u10"]."</td>
                                            <td>".$row["a1"]."</td>
                                            <td>".$row["a2"]."</td>
                                            <td>".$row["a3"]."</td>
                                            <td>".$row["a4"]."</td>
                                            <td>".$row["a5"]."</td>
                                            <td>".$row["a6"]."</td>
                                            <td>".$row["a7"]."</td>
                                            <td>".$row["a8"]."</td>
                                            <td>".$row["a9"]."</td>
                                            <td>".$row["a10"]."</td>
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
                                            <td>".$row["pcpt_p1"]."</td>
                                            <td>".$row["pcpt_p2"]."</td>
                                            <td>".$row["pcpt_p3"]."</td>
                                            <td>".$row["pcpt_p4"]."</td>
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