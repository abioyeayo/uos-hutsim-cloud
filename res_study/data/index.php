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
            fputcsv($output, array('id', 'prolific_pid', 'study_id', 'session_id', 'study_title', 'study_alias', 'study_start_time', 'study_end_time', 'ytb_chk1', 'ytb_chk2', 'ytb_chk3', 'pcpt_c1', 'pcpt_c2', 'pcpt_c3', 'pcpt_f1', 'pcpt_f2', 'pcpt_f3', 'pcpt_f4', '1md', '1pd', '1td', '1pf', '1ef', '1fr', '1j1', '1j2', '1j3', '1j4', '1j5', '1j6', '1j7', '1p1', '1p2', '1p3', '1p4', '1p5', '1p6', '1p7', '1p8', '1p9', '1p10', '1p11', '2md', '2pd', '2td', '2pf', '2ef', '2fr', '2j1', '2j2', '2j3', '2j4', '2j5', '2j6', '2j7', '2p1', '2p2', '2p3', '2p4', '2p5', '2p6', '2p7', '2p8', '2p9', '2p10', '2p11', 'date_added'));  
            $query = "SELECT * from employeeinfo ORDER BY emp_id DESC";  
            $result = mysqli_query($con, $query);  
            $sql = "SELECT * FROM res_study_data_table";
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
            <h2>Res Study Data</h2>
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
                            <th scope="col">ytb_chk1</th>
                            <th scope="col">ytb_chk2</th>
                            <th scope="col">ytb_chk3</th>
                            <th scope="col">pcpt_c1</th>
                            <th scope="col">pcpt_c2</th>
                            <th scope="col">pcpt_c3</th>
                            <th scope="col">pcpt_f1</th>
                            <th scope="col">pcpt_f2</th>
                            <th scope="col">pcpt_f3</th>
                            <th scope="col">pcpt_f4</th>
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
                            <th scope="col">1p1</th>
                            <th scope="col">1p2</th>
                            <th scope="col">1p3</th>
                            <th scope="col">1p4</th>
                            <th scope="col">1p5</th>
                            <th scope="col">1p6</th>
                            <th scope="col">1p7</th>
                            <th scope="col">1p8</th>
                            <th scope="col">1p9</th>
                            <th scope="col">1p10</th>
                            <th scope="col">1p11</th>
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
                            <th scope="col">2p1</th>
                            <th scope="col">2p2</th>
                            <th scope="col">2p3</th>
                            <th scope="col">2p4</th>
                            <th scope="col">2p5</th>
                            <th scope="col">2p6</th>
                            <th scope="col">2p7</th>
                            <th scope="col">2p8</th>
                            <th scope="col">2p9</th>
                            <th scope="col">2p10</th>
                            <th scope="col">2p11</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $sql = "SELECT * FROM res_study_data_table";
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
                                            <td>".$row["txt_youtube_attn_check1"]."</td>
                                            <td>".$row["txt_youtube_attn_check2"]."</td>
                                            <td>".$row["txt_youtube_attn_check3"]."</td>
                                            <td>".$row["radio_pcpt_c1"]."</td>
                                            <td>".$row["radio_pcpt_c2"]."</td>
                                            <td>".$row["radio_pcpt_c3"]."</td>
                                            <td>".$row["radio_pcpt_f1"]."</td>
                                            <td>".$row["radio_pcpt_f2"]."</td>
                                            <td>".$row["radio_pcpt_f3"]."</td>
                                            <td>".$row["radio_pcpt_f4"]."</td>
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
                                            <td>".$row["radio_wsga_p1"]."</td>
                                            <td>".$row["radio_wsga_p2"]."</td>
                                            <td>".$row["radio_wsga_p3"]."</td>
                                            <td>".$row["radio_wsga_p4"]."</td>
                                            <td>".$row["radio_wsga_p5"]."</td>
                                            <td>".$row["radio_wsga_p6"]."</td>
                                            <td>".$row["radio_wsga_p7"]."</td>
                                            <td>".$row["radio_wsga_p8"]."</td>
                                            <td>".$row["txt_wsga_p9"]."</td>
                                            <td>".$row["radio_wsga_p10"]."</td>
                                            <td>".$row["radio_wsga_p11"]."</td>
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
                                            <td>".$row["radio_lkxr_p1"]."</td>
                                            <td>".$row["radio_lkxr_p2"]."</td>
                                            <td>".$row["radio_lkxr_p3"]."</td>
                                            <td>".$row["radio_lkxr_p4"]."</td>
                                            <td>".$row["radio_lkxr_p5"]."</td>
                                            <td>".$row["radio_lkxr_p6"]."</td>
                                            <td>".$row["radio_lkxr_p7"]."</td>
                                            <td>".$row["radio_lkxr_p8"]."</td>
                                            <td>".$row["txt_lkxr_p9"]."</td>
                                            <td>".$row["radio_lkxr_p10"]."</td>
                                            <td>".$row["radio_lkxr_p11"]."</td>
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