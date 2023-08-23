<?php

   require_once '../DB_Connect.php';

   // test url: http://localhost/verification_study/?PROLIFIC_PID=639c81275bd768dce603c9c5&STUDY_ID=63b4a06fa62e8101c635f299&SESSION_ID=0z2rngztewk&GROUP_ID=vg5est5j
   // test url: https://uos-hutsim.cloud/verification_study/?PROLIFIC_PID=639c81275bd768dce603c9c5&STUDY_ID=63b4a06fa62e8101c635f299&SESSION_ID=0z2rngztewk&GROUP_ID=vg5est5j
   // test url: https://uos-hutsim.cloud/verification_study/?PROLIFIC_PID=639c81275bd768dce603c9c5&STUDY_ID=64e634cd7bd7c0f0f1545fc5&SESSION_ID=0wyukhwfhh58&GROUP_ID=vg5est5j

   // connecting to database
   $con = new DB_Connect();
   $con1=$con->connect();

   // comment or select based on published online hosting or developer localhosting
   $base_url = "http://uos-hutsim.cloud:";
  //  $base_url = "http://localhost:"; 


  // csahadxk - SGP1BA
  // q6knar5d - SGP2AB
  // phjrynu5 - SGP2BA
  // vg5est5j - SGP1AB & catchall

  $group_id = $_GET['GROUP_ID'];
  if ($group_id == "csahadxk"){
        $study_alias = "lkxr_wsga";
        $study_title = "The speed vs accuracy trade-off in human-swarm interaction (SGP1BA)";
        $scenario_1 = "LKXR";
        $scenario_2 = "WSGA";
        $low_res_warning = "You do <strong>NOT</strong> have access to high-resolution scans in this mode, so you will 
                            only see the basic scans that are added to the view window automatically.";

  } else if ($group_id == "q6knar5d"){
        $study_alias = "qeri_trrv";
        $study_title = "The speed vs accuracy trade-off in human-swarm interaction (SGP2AB)";
        $scenario_1 = "QERI";
        $scenario_2 = "TRRV";
        $low_res_warning = "";

  } else if ($group_id == "phjrynu5"){
        $study_alias = "trrv_qeri";
        $study_title = "The speed vs accuracy trade-off in human-swarm interaction (SGP2BA)";
        $scenario_1 = "TRRV";
        $scenario_2 = "QERI";
        $low_res_warning = "";
    
  } else {
        $study_alias = "SNV_SFV";
        // $study_title = "The effect of runtime verification on task completion efficiency in human swarm interaction";
        $study_title = "The evaluation of a human-swarm interaction interface (SGP1AB)";
        $scenario_1 = "SNV";
        $scenario_2 = "SFV";
        $low_res_warning = "";

  }


   if ($_SERVER["REQUEST_METHOD"] == "POST"){

        // study activity identifier
        $prolific_pid = $_POST['prolific_pid'];
        $study_id = $_POST['study_id'];
        $session_id = $_POST['session_id'];
        $study_start_time = $_POST['study_start_time'];
        $study_end_time = date("Y-m-d H:i:s");
        $study_title = $_POST['study_title'];
        $study_alias = $_POST['study_alias'];

        // watched youtube video validation check
        $briefing_attn_chk1 = $_POST['txt_youtube_attn_check1'];
        $briefing_attn_chk2 = $_POST['txt_youtube_attn_check2'];
        $briefing_attn_chk3 = $_POST['txt_youtube_attn_check3'];

        // participant consent and demographic questions
        $pcpt_c1 = $_POST['radio_pcpt_c1'];
        $pcpt_c2 = $_POST['radio_pcpt_c2'];
        $pcpt_c3 = $_POST['radio_pcpt_c3'];
        $radio_pcpt_f1 = $_POST['radio_pcpt_f1'];
        $radio_pcpt_f2 = $_POST['radio_pcpt_f2'];
        $radio_pcpt_f3 = $_POST['radio_pcpt_f3'];
        $radio_pcpt_f4 = $_POST['radio_pcpt_f4'];
        $radio_pcpt_f5 = $_POST['radio_pcpt_f5'];
        $radio_pcpt_p1 = $_POST['radio_pcpt_p1'];
        $radio_pcpt_p2 = $_POST['radio_pcpt_p2'];
        $radio_pcpt_p3 = $_POST['radio_pcpt_p3'];
        $radio_pcpt_p4 = $_POST['radio_pcpt_p4'];

        // study wsga questionnaires
        $md = $_POST['radio_wsga_md'];
        $pd = $_POST['radio_wsga_pd'];
        $td = $_POST['radio_wsga_td'];
        $pf = $_POST['radio_wsga_pf'];
        $ef = $_POST['radio_wsga_ef'];
        $fr = $_POST['radio_wsga_fr'];
        $u1 = $_POST['radio_wsga_u1'];
        $u2 = $_POST['radio_wsga_u2'];
        $u3 = $_POST['radio_wsga_u3'];
        $u4 = $_POST['radio_wsga_u4'];
        $u5 = $_POST['radio_wsga_u5'];
        $u6 = $_POST['radio_wsga_u6'];
        $u7 = $_POST['radio_wsga_u7'];
        $u8 = $_POST['radio_wsga_u8'];
        $u9 = $_POST['radio_wsga_u9'];
        $u10 = $_POST['radio_wsga_u10'];
        $a1 = $_POST['radio_wsga_a1'];
        $a2 = $_POST['radio_wsga_a2'];
        $a3 = $_POST['radio_wsga_a3'];
        $a4 = $_POST['radio_wsga_a4'];
        $a5 = $_POST['radio_wsga_a5'];
        $a6 = $_POST['radio_wsga_a6'];
        $a7 = $_POST['radio_wsga_a7'];
        $a8 = $_POST['radio_wsga_a8'];
        $a9 = $_POST['radio_wsga_a9'];
        $a10 = $_POST['radio_wsga_a10'];
        $j1 = $_POST['radio_wsga_j1'];
        $j2 = $_POST['radio_wsga_j2'];
        $j3 = $_POST['radio_wsga_j3'];
        $j4 = $_POST['radio_wsga_j4'];
        $j5 = $_POST['radio_wsga_j5'];
        $j6 = $_POST['radio_wsga_j6'];
        $j7 = $_POST['radio_wsga_j7'];
        $j8 = $_POST['radio_wsga_j8'];
        $j9 = $_POST['radio_wsga_j9'];
        $j10 = $_POST['radio_wsga_j10'];
        $j11 = $_POST['radio_wsga_j11'];
        $j12 = $_POST['radio_wsga_j12'];
        $j13 = $_POST['radio_wsga_j13'];

        // convert numbers to text demographic information
        switch ($radio_pcpt_f1) {
          case "1":
            $radio_pcpt_f1 = "Male";
            break;
          case "2":
            $radio_pcpt_f1 = "Female";
            break;
          case "3":
            $radio_pcpt_f1 = "Non-binary";
            break;
          case "4":
            $radio_pcpt_f1 = "Prefer not to say";
            break;
          case "5":
            $radio_pcpt_f1 = "Other";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_f2) {
          case "1":
            $radio_pcpt_f2 = "Below 18 years";
            break;
          case "2":
            $radio_pcpt_f2 = "18 - 24 years";
            break;
          case "3":
            $radio_pcpt_f2 = "25 - 34 years";
            break;
          case "4":
            $radio_pcpt_f2 = "35 - 44 years";
            break;
          case "5":
            $radio_pcpt_f2 = "45 - 54 years";
            break;
          case "6":
            $radio_pcpt_f2 = "55 - 64 years";
            break;
          case "7":
            $radio_pcpt_f2 = "65 years and above";
            break;
          case "8":
            $radio_pcpt_f2 = "Prefer not to say";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_f3) {
          case "1":
            $radio_pcpt_f3 = "No formal education";
            break;
          case "2":
            $radio_pcpt_f3 = "GCSE or equivalent";
            break;
          case "3":
            $radio_pcpt_f3 = "A-level or equivalent";
            break;
          case "4":
            $radio_pcpt_f3 = "Bachelor's degree or equivalent";
            break;
          case "5":
            $radio_pcpt_f3 = "Master's degree or equivalent";
            break;
          case "6":
            $radio_pcpt_f3 = "Doctoral degree or equivalent";
            break;
          case "7":
            $radio_pcpt_f3 = "Other";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_f4) {
          case "1":
            $radio_pcpt_f4 = "Hardly ever use the computer and do not feel very competent";
            break;
          case "2":
            $radio_pcpt_f4 = "Slightly below average computer user, infrequently using the computer, using few applications";
            break;
          case "3":
            $radio_pcpt_f4 = "Average computer user, using the internet, standard applications etc.";
            break;
          case "4":
            $radio_pcpt_f4 = "User of specialist applications but not an IT specialist";
            break;
          case "5":
            $radio_pcpt_f4 = "Considerable IT expertise short of full professional qualifications";
            break;
          case "6":
            $radio_pcpt_f4 = "Professionally qualified computer scientist or IT specialist";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_f5) {
          case "1":
            $radio_pcpt_f5 = "Not at all";
            break;
          case "2":
            $radio_pcpt_f5 = "I know a bit about the technology but have never used it";
            break;
          case "3":
            $radio_pcpt_f5 = "I have some experience with operating UAVs as a hobby";
            break;
          case "4":
            $radio_pcpt_f5 = "I professionally work with UAVs";
            break;
          default:
            // do nothing
        }

        $pcpt_f1 = mysqli_real_escape_string($con1, $radio_pcpt_f1);
        $pcpt_f2 = mysqli_real_escape_string($con1, $radio_pcpt_f2);
        $pcpt_f3 = mysqli_real_escape_string($con1, $radio_pcpt_f3);
        $pcpt_f4 = mysqli_real_escape_string($con1, $radio_pcpt_f4);
        $pcpt_f5 = mysqli_real_escape_string($con1, $radio_pcpt_f5);


        // convert numbers to text custom questionnaire data
        switch ($radio_pcpt_p1) {
          case "1":
            $radio_pcpt_p1 = "Scenario I (" . $scenario_1 . ")";
            break;
          case "2":
            $radio_pcpt_p1 = "Scenario II (" . $scenario_2 . ")";
            break;
          case "3":
            $radio_pcpt_p1 = "I don't know";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p2) {
          case "1":
            $radio_pcpt_p2 = "Random luck";
            break;
          case "2":
            $radio_pcpt_p2 = "The presence of the estimated completion time feature";
            break;
          case "3":
            $radio_pcpt_p2 = "The absence of the estimated completion time feature";
            break;
          case "4":
            $radio_pcpt_p2 = "The awareness of the mission cost";
            break;
          case "5":
            $radio_pcpt_p2 = "The simplicity of the interface";
            break;
          case "6":
            $radio_pcpt_p2 = "Other reasons not listed";
            break;
          case "7":
            $radio_pcpt_p2 = "I don't know";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p3) {
          case "1":
            $radio_pcpt_p3 = "The simulation interface";
            break;
          case "2":
            $radio_pcpt_p3 = "The estimated completion time feature implementation";
            break;
          case "3":
            $radio_pcpt_p3 = "The study questionnaire";
            break;
          case "4":
            $radio_pcpt_p3 = "The study scenario";
            break;
          case "5":
            $radio_pcpt_p3 = "Nothing";
            break;
          case "6":
            $radio_pcpt_p3 = "I don't know";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p4) {
          case "1":
            $radio_pcpt_p4 = "Yes";
            break;
          case "2":
            $radio_pcpt_p4 = "No";
            break;
          case "3":
            $radio_pcpt_p4 = "I don't know";
            break;
          default:
            // do nothing
        }

        $pcpt_p1 = mysqli_real_escape_string($con1, $radio_pcpt_p1);
        $pcpt_p2 = mysqli_real_escape_string($con1, $radio_pcpt_p2);
        $pcpt_p3 = mysqli_real_escape_string($con1, $radio_pcpt_p3);
        $pcpt_p4 = mysqli_real_escape_string($con1, $radio_pcpt_p4);


        // update data table for scenario 1
        // $study_scenario = substr($study_alias,0,4);
        $study_scenario = $scenario_1;
        $sql = "INSERT INTO verification_study_data_table (prolific_pid, study_id, `session_id`, study_title, study_alias, study_scenario, study_start_time, study_end_time, briefing_attn_chk1, briefing_attn_chk2, briefing_attn_chk3, pcpt_c1, pcpt_c2, pcpt_c3, pcpt_f1, pcpt_f2, pcpt_f3, pcpt_f4, pcpt_f5, md, pd, td, pf, ef, fr, u1, u2, u3, u4, u5, u6, u7, u8, u9, u10, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10, j1, j2, j3, j4, j5, j6, j7, j8, j9, j10, j11, j12, j13, pcpt_p1, pcpt_p2, pcpt_p3, pcpt_p4) VALUES ('" . $prolific_pid . "', '" . $study_id . "', '" . $session_id . "', '" . $study_title . "', '" . $study_alias . "', '" . $study_scenario . "', '" . $study_start_time . "', '" . $study_end_time . "', '" . $briefing_attn_chk1 . "', '" . $briefing_attn_chk2 . "', '" . $briefing_attn_chk3 . "', '" . $pcpt_c1 . "', '" . $pcpt_c2 . "', '" . $pcpt_c3 . "', '" . $pcpt_f1 . "', '" . $pcpt_f2 . "', '" . $pcpt_f3 . "', '" . $pcpt_f4 . "', '" . $pcpt_f5 . "', '" . $md . "', '" . $pd . "', '" . $td . "', '" . $pf . "', '" . $ef . "', '" . $fr . "', '" . $u1 . "', '" . $u2 . "', '" . $u3 . "', '" . $u4 . "', '" . $u5 . "', '" . $u6 . "', '" . $u7 . "', '" . $u8 . "', '" . $u9 . "', '" . $u10 . "', '" . $a1 . "', '" . $a2 . "', '" . $a3 . "', '" . $a4 . "', '" . $a5 . "', '" . $a6 . "', '" . $a7 . "', '" . $a8 . "', '" . $a9 . "', '" . $a10 . "', '" .$j1 . "', '" . $j2 . "', '" . $j3 . "', '" . $j4 . "', '" . $j5 . "', '" . $j6 . "', '" . $j7 . "', '" . $j8 . "', '" . $j9 . "', '" . $j10 . "', '" . $j11 . "', '" . $j12 . "', '" . $j13 . "', '" .  $pcpt_p1 . "', '" . $pcpt_p2 . "', '" . $pcpt_p3 . "', '" . $pcpt_p4 . "')";
        if(mysqli_query($con1, $sql)){
            // echo "Records inserted successfully.";
        } else{
            echo "Error inserting record: " . $con->error;
            exit();
        }


        // study lkxr questionnaires
        $md = $_POST['radio_lkxr_md'];
        $pd = $_POST['radio_lkxr_pd'];
        $td = $_POST['radio_lkxr_td'];
        $pf = $_POST['radio_lkxr_pf'];
        $ef = $_POST['radio_lkxr_ef'];
        $fr = $_POST['radio_lkxr_fr'];
        $u1 = $_POST['radio_lkxr_u1'];
        $u2 = $_POST['radio_lkxr_u2'];
        $u3 = $_POST['radio_lkxr_u3'];
        $u4 = $_POST['radio_lkxr_u4'];
        $u5 = $_POST['radio_lkxr_u5'];
        $u6 = $_POST['radio_lkxr_u6'];
        $u7 = $_POST['radio_lkxr_u7'];
        $u8 = $_POST['radio_lkxr_u8'];
        $u9 = $_POST['radio_lkxr_u9'];
        $u10 = $_POST['radio_lkxr_u10'];
        $a1 = $_POST['radio_lkxr_a1'];
        $a2 = $_POST['radio_lkxr_a2'];
        $a3 = $_POST['radio_lkxr_a3'];
        $a4 = $_POST['radio_lkxr_a4'];
        $a5 = $_POST['radio_lkxr_a5'];
        $a6 = $_POST['radio_lkxr_a6'];
        $a7 = $_POST['radio_lkxr_a7'];
        $a8 = $_POST['radio_lkxr_a8'];
        $a9 = $_POST['radio_lkxr_a9'];
        $a10 = $_POST['radio_lkxr_a10'];
        $j1 = $_POST['radio_lkxr_j1'];
        $j2 = $_POST['radio_lkxr_j2'];
        $j3 = $_POST['radio_lkxr_j3'];
        $j4 = $_POST['radio_lkxr_j4'];
        $j5 = $_POST['radio_lkxr_j5'];
        $j6 = $_POST['radio_lkxr_j6'];
        $j7 = $_POST['radio_lkxr_j7'];
        $j8 = $_POST['radio_lkxr_j8'];
        $j9 = $_POST['radio_lkxr_j9'];
        $j10 = $_POST['radio_lkxr_j10'];
        $j11 = $_POST['radio_lkxr_j11'];
        $j12 = $_POST['radio_lkxr_j12'];
        $j13 = $_POST['radio_lkxr_j13'];

        // update data table for scenario 2
        $study_scenario = $scenario_2;
        $sql = "INSERT INTO verification_study_data_table (prolific_pid, study_id, `session_id`, study_title, study_alias, study_scenario, study_start_time, study_end_time, briefing_attn_chk1, briefing_attn_chk2, briefing_attn_chk3, pcpt_c1, pcpt_c2, pcpt_c3, pcpt_f1, pcpt_f2, pcpt_f3, pcpt_f4, pcpt_f5, md, pd, td, pf, ef, fr, u1, u2, u3, u4, u5, u6, u7, u8, u9, u10, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10, j1, j2, j3, j4, j5, j6, j7, j8, j9, j10, j11, j12, j13, pcpt_p1, pcpt_p2, pcpt_p3, pcpt_p4) VALUES ('" . $prolific_pid . "', '" . $study_id . "', '" . $session_id . "', '" . $study_title . "', '" . $study_alias . "', '" . $study_scenario . "', '" . $study_start_time . "', '" . $study_end_time . "', '" . $briefing_attn_chk1 . "', '" . $briefing_attn_chk2 . "', '" . $briefing_attn_chk3 . "', '" . $pcpt_c1 . "', '" . $pcpt_c2 . "', '" . $pcpt_c3 . "', '" . $pcpt_f1 . "', '" . $pcpt_f2 . "', '" . $pcpt_f3 . "', '" . $pcpt_f4 . "', '" . $pcpt_f5 . "', '" . $md . "', '" . $pd . "', '" . $td . "', '" . $pf . "', '" . $ef . "', '" . $fr . "', '" . $u1 . "', '" . $u2 . "', '" . $u3 . "', '" . $u4 . "', '" . $u5 . "', '" . $u6 . "', '" . $u7 . "', '" . $u8 . "', '" . $u9 . "', '" . $u10 . "', '" . $a1 . "', '" . $a2 . "', '" . $a3 . "', '" . $a4 . "', '" . $a5 . "', '" . $a6 . "', '" . $a7 . "', '" . $a8 . "', '" . $a9 . "', '" . $a10 . "', '" .$j1 . "', '" . $j2 . "', '" . $j3 . "', '" . $j4 . "', '" . $j5 . "', '" . $j6 . "', '" . $j7 . "', '" . $j8 . "', '" . $j9 . "', '" . $j10 . "', '" . $j11 . "', '" . $j12 . "', '" . $j13 . "', '" .  $pcpt_p1 . "', '" . $pcpt_p2 . "', '" . $pcpt_p3 . "', '" . $pcpt_p4 . "')";
        if(mysqli_query($con1, $sql)){
            // echo "Records inserted successfully.";
        } else{
            echo "Error inserting record: " . $con->error;
            exit();
        }


        // // halt study submission
        // exit("<div style='text-align: center;'><h2><br>Success!<br>Thank you for your submission.</h2></div>");

        // redirect back to prolific website to confirm study completion
        // header("Location: https://app.prolific.co/submissions/complete?cc=C1FIC4D9"); // ayo's prolific redirect
        // header("Location: https://app.prolific.co/submissions/complete?cc=C1HYHPCW"); // Paurav's prolific redirect via Mohammad's account
        header("Location: https://app.prolific.co/submissions/complete?cc=C1EASVMC"); // Verification project redirect
        exit();

   }

?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Study - Runtime verification in human swarm interaction | UoS HutSim</title>
    <style>
      input {
        margin-right: 5px;
      }
      .page-content-div {
        max-width: 940px; 
        border: solid 1px black; 
        margin-right: auto; 
        margin-left: auto; 
        margin-top: 5px; 
        padding: 10px;
      }

      #stepForm {
          max-width: 960px;
          background-color: #ffffff;
          margin: 40px auto;
          padding: 40px;
          box-shadow: 0px 6px 18px rgb(0 0 0 / 9%);
          border-radius: 12px;
      }
      #stepForm .form-header {
          gap: 5px;
          text-align: center;
          font-size: .9em;
      }
      #stepForm .form-header .stepIndicator {
          position: relative;
          flex: 1;
          padding-bottom: 30px;
      }
      #stepForm .form-header .stepIndicator.active {
          font-weight: 600;
      }
      #stepForm .form-header .stepIndicator.finish {
          font-weight: 600;
          color: #009688;
      }
      #stepForm .form-header .stepIndicator::before {
          content: "";
          position: absolute;
          left: 50%;
          bottom: 0;
          transform: translateX(-50%);
          z-index: 9;
          width: 20px;
          height: 20px;
          background-color: #d5efed;
          border-radius: 50%;
          border: 3px solid #ecf5f4;
      }
      #stepForm .form-header .stepIndicator.active::before {
          background-color: #a7ede8;
          border: 3px solid #d5f9f6;
      }
      #stepForm .form-header .stepIndicator.finish::before {
          background-color: #009688;
          border: 3px solid #b7e1dd;
      }
      #stepForm .form-header .stepIndicator::after {
          content: "";
          position: absolute;
          left: 50%;
          bottom: 8px;
          width: 100%;
          height: 3px;
          background-color: #f3f3f3;
      }
      #stepForm .form-header .stepIndicator.active::after {
          background-color: #a7ede8;
      }
      #stepForm .form-header .stepIndicator.finish::after {
          background-color: #009688;
      }
      #stepForm .form-header .stepIndicator:last-child:after {
          display: none;
      }
      /* #stepForm input {
          padding: 15px 20px;
          width: 100%;
          font-size: 1em;
          border: 1px solid #e3e3e3;
          border-radius: 5px;
      }
      #stepForm input:focus {
          border: 1px solid #009688;
          outline: 0;
      } */
      /* #stepForm input.invalid {
          border: 1px solid #ffaba5;
      } */
      #stepForm .step {
        display: none;
      }
      #stepForm .form-footer{
          overflow:auto;
          gap: 20px;
      }
      #stepForm .form-footer button{
          background-color: #009688;
          border: 1px solid #009688 !important;
          color: #ffffff;
          border: none;
          padding: 13px 30px;
          font-size: 1em;
          cursor: pointer;
          border-radius: 5px;
          flex: 1;
          margin-top: 5px;
      }
      #stepForm .form-footer button:hover {
        opacity: 0.8;
      }
      
      #stepForm .form-footer #prevBtn {
          background-color: #fff;
          color: #009688;
      }
    </style>
  </head>
  <body>
    <!-- Custom step form starts here -->
    <div class="container" style="min-width: 1000px;">
      
      <div class="p-3 mt-3 mb-1 text-center shadow bg-light" style="max-width: 960px; margin-right: auto; margin-left: auto;">
        <h1 class="text-center fs-3 fw-bold p-1 mb-3"><?php echo $study_title; ?></h1>
        <?php
          echo "<strong>Prolific ID:</strong> " . $_GET['PROLIFIC_PID'] . " | ";
          echo "<strong>Study ID:</strong> " . $_GET['STUDY_ID'] . " | ";
          echo "<strong>Session ID:</strong> " . $_GET['SESSION_ID'];
        ?> 
        <br>
      </div>
      <form id="stepForm" method="post" action="">
          <?php
              echo '<input type="hidden" name="prolific_pid" value="'.$_GET['PROLIFIC_PID'].'">';
              echo '<input type="hidden" name="study_id" value="'.$_GET['STUDY_ID'].'">';
              echo '<input type="hidden" name="session_id" value="'.$_GET['SESSION_ID'].'">';
              echo '<input type="hidden" name="study_start_time" value="'.date("Y-m-d H:i:s").'">';
              echo '<input type="hidden" name="study_title" value="'.$study_title.'">';
              echo '<input type="hidden" name="study_alias" value="'.$study_alias.'">';
          ?>
          <!-- start step indicators -->
          <div class="form-header d-flex mb-4">
              <span class="stepIndicator">Information <br>(3 min)</span>
              <span class="stepIndicator">Consent <br>(3 min)</span>
              <span class="stepIndicator">Briefing <br>(5 min)</span>
              <span class="stepIndicator">Tutorial <br>(4 min)</span>
              <span class="stepIndicator">Scenario I <br>(8 min)</span>
              <span class="stepIndicator">Questionnaire <br>(6 min)</span>
              <span class="stepIndicator">Scenario II <br>(8 min)</span>
              <span class="stepIndicator">Questionnaire <br>(6 min)</span>
              <span class="stepIndicator">Finish <br>(2 min)</span>
          </div>
          <!-- end step indicators -->

          <!-- step one -->
          <div class="step">
              <h4 class="text-center fw-bold mb-4 mt-5">Participant Information Sheet</h4>
              <?php
                include 'contents/participant-information-sheet.php'; 
              ?>
          </div>
      
          <!-- step two -->
          <div class="step">
              <h4 class="text-center fw-bold mb-3 mt-5">Participant Consent and Information</h4>
              <p class="text-center mb-3" style="font-size: 0.95rem;">Thank you for choosing to take part in this study. Please complete this consent form before taking part in the study. It is required for your participation. This study has been approved by the Faculty Research Ethics Committee (FREC) at the University of Southampton (Ethics/ERGO Number: ERGO/FEPS/85523).</p>
              <div class="mx-0 mx-sm-auto mb-4">
              <div class="card">
                  <div class="card-body">
                  <div class="text-center">
                      <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                      <i class="fa fa-user fa-2x mb-3 text-primary"></i>
                      <p>
                      <strong>Participant Consent</strong>
                      </p>
                  </div>
                  <div class="alert alert-warning p-1 text-center d-none" id="consent_check_alert" role="alert" style="font-size: 0.95rem;">
                    <i class="fa fa-warning me-2"></i> Consent is <strong>required</strong> to continue as a participant in this study.
                  </div>
                  <hr />
                  <div class="px-4">
                      <?php 

                      // participant consent questionnaire
                      $pcpt_consent = array(
                          "c1" => array(
                                  "abbr" => "c1",
                                  "question" => "I have read and understood the participant information sheet."),

                          "c2" => array(
                                  "abbr" => "c2",
                                  "question" => "I am aged 18 or over and agree to take part in this study."),

                          "c3" => array(
                                  "abbr" => "c3",
                                  "question" => "I understand that my participation is voluntary and I may withdraw (at any time) for any reason without my participation rights being affected."));

                      foreach ($pcpt_consent as $component) {
                          
                          echo '<div style="font-size: 0.95rem;">
                                  <p id="radio_pcpt_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>
                                  <div class="form-check mb-2">
                                      <input class="form-check-input" type="radio" name="radio_pcpt_'.$component['abbr'].'" value="Yes" id="radio_pcpt_'.$component['abbr'].'_1" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_pcpt_'.$component['abbr'].'_1">Yes</label>
                                  </div>
                                  <div class="form-check mb-2">
                                      <input class="form-check-input" type="radio" name="radio_pcpt_'.$component['abbr'].'" value="No" id="radio_pcpt_'.$component['abbr'].'_2" onchange="validateForm();" />
                                      <label class="form-check-label" for="radio_pcpt_'.$component['abbr'].'_2">No</label>
                                  </div>
                                </div>';
                          } 
                      ?>

                  </div>
                  </div>
              </div>
              </div>

              <?php
                include 'contents/demographic-information.php'; 
              ?>
              
          </div>

          <!-- step three-one -->
          <div class="step">
              <h4 class="text-center fw-bold mb-3 mt-5">Study Briefing</h4>
              <p class="mb-3" style="font-size: 0.95rem;">In this study, you would play the role of an Unmanned Aerial Vehicle (UAV) swarm operator performing a drone delivery mission.</p>
                <ol type="a" style="font-size: 0.95rem; font-weight:bold;">
                  <li>You would be able to add UAVs or remove UAVs from the mission.</li>
                  <li>The more UAVs you have, the faster you complete the delivery mission. However, adding UAVs increases the mission cost while removing UAVs reduces the mission cost.</li>
                  <li>Your aim is to maximise performance (finish before time runs out) and minimise total mission cost.</li>
                </ol>
              <p class="mb-3" style="font-size: 0.95rem;">After this, you would be required to complete a questionnaire to document your experience. You need to perform this experiment on a laptop or desktop computer, using an updated version of the Google Chrome web browser.
              </p>
              <p class="mb-4" style="font-size: 0.95rem;">Please watch the following Youtube video which demonstrates what is expected of you in this experiment (preferably in Fullscreen, 1080p HD). This should take about 5 minutes to complete. When finished, answer the validation check questions to confirm you understood the video, and click Next to continue.</p>
              <!-- <div class="text-center mb-4">
                <iframe width="876" height="504" src="https://www.youtube.com/embed/HhD3zU6jTSQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div> -->
              <div class="mb-4 text-center">
                <video class="shadow bg-body rounded" width="800" height="450" controls>
                    <source src="video/aiuk2023_demo.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
              </div>

              <div class="mx-0 mx-sm-auto mb-4">
                <div class="card">
                    <div class="card-body">
                      <div class="text-center">
                          <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                          <i class="fa fa-users fa-2x mb-3 text-primary"></i>
                          <p>
                          <strong>Validation Check</strong>
                          </p>
                          <p>Please answer the following questions based on the briefing video above.</p>                          
                      </div>
                      <div class="alert alert-danger p-1 text-center d-none" id="youtube_attn_check_alert" role="alert" style="font-size: 0.95rem;">
                        <i class="fa fa-warning me-2"></i> Validation check failed! Please watch the video and try again.
                      </div>
                      <hr />
                      <div class="px-4">
                        <div style="font-size: 0.95rem;">
                          <p id="txt_youtube_attn_question1" class="my-3 fw-bold">How many targets where found by the UAV swarm in the tutorial scenario?</p>
                          <label class="form-check-label ms-1">Enter a number between 1 and 10</label>
                          <div class="mb-3" style="max-width: 350px;">
                              <input type="number" class="form-control" name="txt_youtube_attn_check1" value="3" id="txt_youtube_attn_check1" style="margin-right: 0px;" onchange="validateForm();">
                              <div class="invalid-feedback">
                                Please complete validation check to proceed.
                              </div>
                          </div>
                        </div>
                        <div style="font-size: 0.95rem;">
                          <p id="txt_youtube_attn_question2" class="my-3 fw-bold">How many search regions were created in the first scenario?</p>
                          <label class="form-check-label ms-1">Enter a number between 1 and 10</label>
                          <div class="mb-3" style="max-width: 350px;">
                              <input type="number" class="form-control" name="txt_youtube_attn_check2" value="4" id="txt_youtube_attn_check2" style="margin-right: 0px;" onchange="validateForm();">
                          </div>
                        </div>
                        <div style="font-size: 0.95rem;">
                          <p id="txt_youtube_attn_question3" class="my-3 fw-bold">How many minutes were given to complete the second scenario?</p>
                          <label class="form-check-label ms-1">Enter a number between 1 and 10</label>
                          <div class="mb-3" style="max-width: 350px;">
                              <input type="number" class="form-control" name="txt_youtube_attn_check3" value="8" id="txt_youtube_attn_check3" style="margin-right: 0px;" onchange="validateForm();">
                          </div>
                        </div>
                      </div>
                      
                    </div>
                </div>
              </div>

          </div>
      
          <!-- step three-two -->
          <div class="step">
              <h4 class="text-center fw-bold mb-3 mt-5">HARIS Simulator Tutorial</h4>
              <p class="mb-3" style="font-size: 0.95rem;">This is the Tutorial study scenario. In this scenario, you would play the role of an Unmanned Aerial Vehicle (UAV) swarm operator performing a drone delivery mission:</p>
                <ol type="a" style="font-weight:bold; font-size: 0.95rem;">
                  <li>Your mission is to complete 8 drone deliveries in 2 minutes with a limited number of UAVs (mininum - 3, maximum - 10).</li>
                  <li>You have a budget of £ 2000 for hiring and maintaining UAVs for the mission.</li>
                  <li>You would be able to add UAVs or remove UAVs from the mission at any point during the experiment.</li>
                  <li>The more UAVs you deploy, the faster your completion time and the higher your mission cost. The fewer UAVs you deploy, the longer your completion time and the lower your mission cost.</li>
                  <li>Your aim is to maximise performance (finish before time runs out) and minimise total mission cost.</li>
                </ol>

              <p class="mb-3" style="font-size: 0.95rem;">Can you complete this mission incuring the minimum possible cost? Click the Blue "Start Tutorial scenario" button to start the Tutorial study scenario. When finished, tick the "I have completed the Tutorial scenario" checkbox and click Next to continue.</p>
              <div class="mb-5">
                <?php
                    // echo exec('java --version');
                    // echo "<br><br>";
                    // initially starting from port 1024, but then changed to 4096 (2^12) because mysql connects on 3308
                    $port = rand(4096, 65535);
                    exec('java -jar hut.jar '.$port.'> /dev/null 2>&1 & echo $!', $output);
              
                    // var_dump($output);
                    // echo "Process ID: ".$output[0]." | Port: ".$port;

                    $process_id = $output[0];
                    $process_info = $_GET['PROLIFIC_PID'];
                    $port_number = $port;
                    $port_status = "active";
                    $created_by = "uos-web-user";

                    // update port table
                    $sql = "INSERT INTO port_table (process_id, process_info, port_number, port_status, created_by) VALUES ('" . $process_id . "', '" . $process_info . "', '" . $port_number . "', '" . $port_status . "', '" . $created_by . "')";
                    if(mysqli_query($con1, $sql)){
                      // echo "Records inserted successfully.";
                    } else{
                      echo "Error inserting record: " . $con->error;
                      exit();
                    }

                    $href_url = $base_url . $port . "/preset/scenario?file-name=Tutorial.json";
                ?>
                <div class="d-flex flex-column justify-content-center align-content-center mx-auto" style="max-width: 480px;">
                  <a href='<?php echo $href_url; ?>/' target='_blank' class="btn btn-sm btn-primary">Start Tutorial</a>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check_tutorial" aria-describedby="check_tutorial_invalid_feedback" onclick="validateForm();">
                    <label class="form-check-label" for="check_tutorial">
                        I have completed the tutorial scenario
                    </label>
                    <div id="check_tutorial_invalid_feedback" class="invalid-feedback">
                      Please confirm you have completed scenario to proceed.
                    </div>
                  </div>
                </div>
              </div>
          </div>
      
          <!-- step four -->
          <div class="step">
              <h4 class="text-center fw-bold mb-3 mt-5">Study Scenario I</h4>
              <p class="mb-3" style="font-size: 0.95rem;">This is the <?php echo $scenario_1; ?> study scenario. In this scenario, you would play the role of an Unmanned Aerial Vehicle (UAV) swarm operator performing a drone delivery mission:</p>
                <ol type="a" style="font-weight:bold; font-size: 0.95rem;">
                  <li>Your mission is to complete 40 drone deliveries in 6 minutes with a limited number of UAVs (mininum - 3, maximum - 10).</li>
                  <li>You have a budget of £ 2,000 for hiring and maintaining UAVs for the mission.</li>
                  <li>You would be able to add UAVs or remove UAVs from the mission at any point during the experiment.</li>
                  <li>The more UAVs you deploy, the faster your completion time and the higher your mission cost. The fewer UAVs you deploy, the longer your completion time and the lower your mission cost.</li>
                  <li>Your aim is to maximise performance (finish before time runs out) and minimise total mission cost.</li>
                </ol>

              <p class="mb-3" style="font-size: 0.95rem;">Can you complete this mission incuring the minimum possible cost? Click the Blue "Start <?php echo $scenario_1; ?> scenario" button to start the <?php echo $scenario_1; ?> study scenario. When finished, tick the "I have completed the <?php echo $scenario_1; ?> scenario" checkbox and click Next to continue.</p>
              <div class="mb-5">
                <?php
                    // echo exec('java --version');
                    // echo "<br><br>";
                    // initially starting from port 1024, but then changed to 4096 (2^12) because mysql connects on 3308
                    $port = rand(4096, 65535);
                    exec('java -jar hut.jar '.$port.'> /dev/null 2>&1 & echo $!', $output);
              
                    // var_dump($output);
                    // echo "Process ID: ".$output[0]." | Port: ".$port;

                    $process_id = $output[1];
                    $process_info = $_GET['PROLIFIC_PID'];
                    $port_number = $port;
                    $port_status = "active";
                    $created_by = "uos-web-user";

                    // update port table
                    $sql = "INSERT INTO port_table (process_id, process_info, port_number, port_status, created_by) VALUES ('" . $process_id . "', '" . $process_info . "', '" . $port_number . "', '" . $port_status . "', '" . $created_by . "')";
                    if(mysqli_query($con1, $sql)){
                      // echo "Records inserted successfully.";
                    } else{
                      echo "Error inserting record: " . $con->error;
                      exit();
                    }

                    $href_url = $base_url . $port . "/preset/scenario?file-name=".$scenario_1.".json";
                ?>
                <div class="d-flex flex-column justify-content-center align-content-center mx-auto" style="max-width: 480px;">
                  <a href='<?php echo $href_url; ?>/' target='_blank' class="btn btn-sm btn-primary">Start <?php echo $scenario_1; ?> Scenario</a>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check_WSGA" aria-describedby="check_WSGA_invalid_feedback" onclick="validateForm();">
                    <label class="form-check-label" for="check_WSGA">
                        I have completed the <?php echo $scenario_1; ?> scenario
                    </label>
                    <div id="check_WSGA_invalid_feedback" class="invalid-feedback">
                      Please confirm you have completed scenario to proceed.
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- step five -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Scenario I Questionnaire</h4>
              <p class="text-center mb-5">This is the <?php echo $scenario_1; ?> study scenario questionnaire. Please complete the form below and click next to continue.</p>
              
              <?php 
                $scenario_abbr = "wsga";
                include 'contents/questionnaire.php'; 
              ?>
              
          </div>

          <!-- step six -->
          <div class="step">
              <h4 class="text-center fw-bold mb-3 mt-5">Study Scenario II</h4>
              <p class="mb-3" style="font-size: 0.95rem;">This is the <?php echo $scenario_2; ?> study scenario. In this scenario, you would play the role of an Unmanned Aerial Vehicle (UAV) swarm operator performing a drone delivery mission:</p>
                <ol type="a" style="font-weight:bold; font-size: 0.95rem;">
                  <li>Your mission is to complete 40 drone deliveries in 6 minutes with a limited number of UAVs (mininum - 3, maximum - 10).</li>
                  <li>You have a budget of £ 2,000 for hiring and maintaining UAVs for the mission.</li>
                  <li>You would be able to add UAVs or remove UAVs from the mission at any point during the experiment.</li>
                  <li>The more UAVs you deploy, the faster your completion time and the higher your mission cost. The fewer UAVs you deploy, the longer your completion time and the lower your mission cost.</li>
                  <li>Your aim is to maximise performance (finish before time runs out) and minimise total mission cost.</li>
                </ol>

              <p class="mb-3" style="font-size: 0.95rem;">Can you complete this mission incuring the minimum possible cost? Click the Blue "Start <?php echo $scenario_2; ?> scenario" button to start the <?php echo $scenario_2; ?> study scenario. When finished, tick the "I have completed the <?php echo $scenario_2; ?> scenario" checkbox and click Next to continue.</p>
              <div class="mb-5">
                <?php
                    // echo exec('java --version');
                    // echo "<br><br>";
                    // initially starting from port 1024, but then changed to 4096 (2^12) because mysql connects on 3308
                    $port = rand(4096, 65535);
                    exec('java -jar hut.jar '.$port.'> /dev/null 2>&1 & echo $!', $output);
              
                    // var_dump($output);
                    // echo "Process ID: ".$output[0]." | Port: ".$port;

                    $process_id = $output[2];
                    $process_info = $_GET['PROLIFIC_PID'];
                    $port_number = $port;
                    $port_status = "active";
                    $created_by = "uos-web-user";

                    // update port table
                    $sql = "INSERT INTO port_table (process_id, process_info, port_number, port_status, created_by) VALUES ('" . $process_id . "', '" . $process_info . "', '" . $port_number . "', '" . $port_status . "', '" . $created_by . "')";
                    if(mysqli_query($con1, $sql)){
                      // echo "Records inserted successfully.";
                    } else{
                      echo "Error inserting record: " . $con->error;
                      exit();
                    }

                    $href_url = $base_url . $port . "/preset/scenario?file-name=".$scenario_2.".json";
                ?>
                <div class="d-flex flex-column justify-content-center align-content-center mx-auto" style="max-width: 480px;">
                  <a href='<?php echo $href_url; ?>/' target='_blank' class="btn btn-sm btn-primary">Start <?php echo $scenario_2; ?> Scenario</a>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check_LKXR" aria-describedby="check_LKXR_invalid_feedback" onclick="validateForm();">
                    <label class="form-check-label" for="check_LKXR">
                        I have completed the <?php echo $scenario_2; ?> scenario
                    </label>
                    <div id="check_LKXR_invalid_feedback" class="invalid-feedback">
                      Please confirm you have completed scenario to proceed.
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- step seven -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Scenario II Questionnaire</h4>
              <p class="text-center mb-5">This is the <?php echo $scenario_2; ?> study scenario questionnaire. Please complete the form below and click next to continue.</p>
              
              <?php 
                $scenario_abbr = "lkxr";
                include 'contents/questionnaire.php'; 
              ?>

          </div>

          <!-- step eight -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Conclusion</h4>
              <p class="text-center mb-5">Thank you for participating in our study. Please complete the final survey below and click submit to finish and confirm study completion. You would be automatically redirected back to prolific with a study completion code.</p>

              <?php
                include 'contents/custom-questionnaire.php'; 
              ?>
          </div>
      
          <!-- start previous / next buttons -->
          <div class="form-footer d-flex">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
          <!-- end previous / next buttons -->
      </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("step");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("step");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("stepForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
          // Scroll to top of page for after pressing next/prev button
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
        
        function validateForm() {

          // validate that participant has watched youtube briefing video
          var youtube_attn_check1 = document.getElementById("txt_youtube_attn_check1");
          if (youtube_attn_check1.value != ""){
            youtube_attn_check1.classList.remove("is-invalid");
          }
          var youtube_attn_check2 = document.getElementById("txt_youtube_attn_check2");
          if (youtube_attn_check2.value != ""){
            youtube_attn_check2.classList.remove("is-invalid");
          }
          var youtube_attn_check3 = document.getElementById("txt_youtube_attn_check3");
          if (youtube_attn_check3.value != ""){
            youtube_attn_check3.classList.remove("is-invalid");
          }
          var youtube_validation = true;
          if ((youtube_attn_check1.value != "") && (youtube_attn_check2.value != "") && (youtube_attn_check3.value != "")){
            document.getElementById("youtube_attn_check_alert").classList.add("d-none");
            let attn_chk_pts = 0;
            if (youtube_attn_check1.value == "3") 
                  attn_chk_pts++;
            if (youtube_attn_check2.value == "4") 
                  attn_chk_pts++;
            if (youtube_attn_check3.value == "8") 
                  attn_chk_pts++;

            // Must get 2 of 3 questions to proceed
            if (attn_chk_pts < 2 ){
                document.getElementById("youtube_attn_check_alert").classList.remove("d-none");
                youtube_validation = false;
            }
          }

          // confirm participant consent to participate in study
          var bool_c1 = validateConsent("c1");
          var bool_c2 = validateConsent("c2");
          var bool_c3 = validateConsent("c3");
          if (bool_c1 || bool_c2 || bool_c3){
              document.getElementById("consent_check_alert").classList.remove("d-none");
          }

          // check if a demographic information & custom questionnaire radio row question element has been selected
          var radio_pcpt_form = ["f1", "f2", "f3", "f4", "f5", "p1", "p2", "p3", "p4"];
          checkFormElement("pcpt",radio_pcpt_form);
          

          // check if the tutorial scenario is completed and add value to allow validation
          var check_tutorial = document.getElementById("check_tutorial");
          if (check_tutorial.checked == true){
            check_tutorial.value = "Completed Tutorial";
            check_tutorial.classList.remove("is-invalid");
          } else {
            check_tutorial.value = "";
          }

          // check if the WSGA scenario is completed and add value to allow validation
          var check_WSGA = document.getElementById("check_WSGA");
          if (check_WSGA.checked == true){
            check_WSGA.value = "Completed WSGA";
            check_WSGA.classList.remove("is-invalid");
          } else {
            check_WSGA.value = "";
          }

          // check if a wsga radio row element has been selected
          var radio_wsga_lkxr_form = ["md", "pd", "td", "pf", "ef", "fr", "u1", "u2", "u3", "u4", "u5", "u6", "u7", "u8", "u9", "u10", "a1", "a2", "a3", "a4", "a5", "a6", "a7", "a8", "a9", "a10", "j1", "j2", "j3", "j4", "j5", "j6", "j7", "j8", "j9", "j10", "j11", "j12", "j13"];
          checkFormElement("wsga",radio_wsga_lkxr_form);

          // check if the LKXR scenario is completed and add value to allow validation
          var check_LKXR = document.getElementById("check_LKXR");
          if (check_LKXR.checked == true){
            check_LKXR.value = "Completed LKXR";
            check_LKXR.classList.remove("is-invalid");
          } else {
            check_LKXR.value = "";
          }

          // check if a lkxr radio row element has been selected
          checkFormElement("lkxr",radio_wsga_lkxr_form);
          

          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("step");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              // y[i].className += " invalid";
              y[i].className += " is-invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          
          // confirm youtube validation
          if (!youtube_validation){
              valid = false;
          }

          // comment the following line for deployment
          valid = true;

          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }

        function checkFormElement(element_id_abbr,radio_wsga_lkxr_form){
          // var radio_wsga_lkxr_form = ["md", "pd", "td", "pf", "ef", "fr", "j1", "j2", "j3", "j4", "j5", "j6", "j7", "p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8", "p9", "p10", "p11"];
          for(j=0;j<radio_wsga_lkxr_form.length;j++){
            if (radio_wsga_lkxr_form[j] == "p9_textbox_input") {
                if (document.getElementById("txt_"+element_id_abbr+"_"+radio_wsga_lkxr_form[j]).value == ""){
                    document.getElementById("radio_"+element_id_abbr+"_"+radio_wsga_lkxr_form[j]+"_question").classList.add("text-danger");
                } else {
                    document.getElementById("radio_"+element_id_abbr+"_"+radio_wsga_lkxr_form[j]+"_question").classList.remove("text-danger");
                    document.getElementById("txt_"+element_id_abbr+"_"+radio_wsga_lkxr_form[j]).classList.remove("is-invalid");
                }
            } else {
                var radio_row = document.querySelector('input[name="radio_'+element_id_abbr+'_'+radio_wsga_lkxr_form[j]+'"]:checked');
                var radio_row_elements = [];
                for (i=1; i < (document.getElementsByName("radio_"+element_id_abbr+"_"+radio_wsga_lkxr_form[j]).length + 1); i++){
                  radio_row_elements[i-1] = document.getElementById("radio_"+element_id_abbr+"_"+radio_wsga_lkxr_form[j]+"_" + i);
                }
                var radio_row_question = document.getElementById("radio_"+element_id_abbr+"_"+radio_wsga_lkxr_form[j]+"_question");
                if(radio_row != null) {
                  for (i=0; i<radio_row_elements.length;i++){
                    radio_row_elements[i].value = i+1;
                    radio_row_elements[i].classList.remove("is-invalid");
                  }
                  radio_row_question.classList.remove("text-danger");
                }
                else {
                  for (i=0; i<radio_row_elements.length;i++){
                    radio_row_elements[i].value = "";
                  }
                  radio_row_question.classList.add("text-danger");
                }
            }
          }
        }

        function validateConsent(cx) {
          // confirm participant consent to participate in study
          var display_consent_warning = false;
          document.getElementById("radio_pcpt_"+cx+"_1").value = "Yes";
          document.getElementById("radio_pcpt_"+cx+"_2").value = "No";
          var pcpt_cx = document.querySelector('input[name="radio_pcpt_'+cx+'"]:checked');
          if (pcpt_cx == null){
            document.getElementById("radio_pcpt_"+cx+"_question").classList.add("text-danger");
            document.getElementById("radio_pcpt_"+cx+"_1").value = "";
            document.getElementById("radio_pcpt_"+cx+"_2").value = "";
          }
          else if (pcpt_cx.value == "No"){
            document.getElementById("radio_pcpt_"+cx+"_question").classList.add("text-danger");
            // document.getElementById("consent_check_alert").classList.remove("d-none");
            display_consent_warning = true;
            document.getElementById("radio_pcpt_"+cx+"_1").value = "";
            document.getElementById("radio_pcpt_"+cx+"_2").value = "";
          }
          else {
            document.getElementById("radio_pcpt_"+cx+"_question").classList.remove("text-danger");
            document.getElementById("consent_check_alert").classList.add("d-none");
            document.getElementById("radio_pcpt_"+cx+"_1").classList.remove("is-invalid");
            document.getElementById("radio_pcpt_"+cx+"_2").classList.remove("is-invalid");
          }

          return display_consent_warning;
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
    </script>
  </body>
</html>

<?php

	// close db connect
	$con1->close();
?>