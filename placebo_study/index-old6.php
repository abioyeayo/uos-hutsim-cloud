<?php

   require_once '../DB_Connect.php';

   // test url: http://localhost/placebo_study/?PROLIFIC_PID=639c81275bd768dce603c9c5&STUDY_ID=63b4a06fa62e8101c635f299&SESSION_ID=0z2rngztewk&GROUP_ID=vg5est5j
   // test url: https://uos-hutsim.cloud/placebo_study/?PROLIFIC_PID=639c81275bd768dce603c9c5&STUDY_ID=63b4a06fa62e8101c635f299&SESSION_ID=0z2rngztewk&GROUP_ID=vg5est5j

   // connecting to database
   $con = new DB_Connect();
   $con1=$con->connect();

   // comment or select based on published online hosting or developer localhosting
   $base_url = "http://uos-hutsim.cloud:";
  //  $base_url = "http://localhost:"; 


  $group_id = $_GET['GROUP_ID']; 

  if ($group_id == "CLALM"){ 
        $study_alias = "A1-6_M1-2"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 1)"; 
        $scenario_1 = "Fully Autonomous"; 
        $scenario_1q = "questionnaire_fully_autonomous.php"; 
        $scenario_1_video = "A1-6.mp4"; 
	      $scenario_1_speed = "5.33"; 
        $scenario_1_accuracy = "88"; 
        $scenario_2 = "Human Operated"; 
        $scenario_2q = "questionnaire_human_operated.php"; 
        $scenario_2_video = "M1-2.mp4"; 
	      $scenario_2_speed = "8.78"; 
        $scenario_2_accuracy = "67"; 
        $deception_warning = ""; 

 
  } else if ($group_id == "CLMLA"){ 
        $study_alias = "M1-2_A1-6"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 2)";
	      $scenario_1 = "Human Operated"; 
        $scenario_1q = "questionnaire_human_operated.php"; 
	      $scenario_1_video = "M1-2.mp4";
	      $scenario_1_speed = "8.78"; 
        $scenario_1_accuracy = "67";
        $scenario_2 = "Fully Autonomous"; 
        $scenario_2q = "questionnaire_fully_autonomous.php";  
        $scenario_2_video = "A1-6.mp4";
	      $scenario_2_speed = "5.33"; 
        $scenario_2_accuracy = "88";  
        $deception_warning = "";  

  

  } else if ($group_id == "CLAHM"){ 
        $study_alias = "A1-6_M1-5"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 3)"; 
        $scenario_1 = "Fully Autonomous"; 
        $scenario_1q = "questionnaire_fully_autonomous.php"; 
        $scenario_1_video = "A1-6.mp4";
	      $scenario_1_speed = "5.33"; 
        $scenario_1_accuracy = "88"; 
        $scenario_2 = "Human Operated"; 
        $scenario_2q = "questionnaire_human_operated.php"; 
        $scenario_2_video = "M1-5.mp4"; 
	      $scenario_2_speed = "6.00"; 
        $scenario_2_accuracy = "78"; 
        $deception_warning = ""; 

     

  } else if ($group_id == "CHMLA"){ 
        $study_alias = "M1-5_A1-6"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 4)"; 
        $scenario_1 = "Human Operated"; 
        $scenario_1q = "questionnaire_human_operated.php";
        $scenario_1_video = "M1-5.mp4"; 
	      $scenario_1_speed = "6.00"; 
        $scenario_1_accuracy = "78";
        $scenario_2 = "Fully Autonomous"; 
        $scenario_2q = "questionnaire_fully_autonomous.php"; 
        $scenario_2_video = "A1-6.mp4";
	      $scenario_2_speed = "5.33"; 
        $scenario_2_accuracy = "88";  
        $deception_warning = ""; 


  } else if ($group_id == "CHALM"){ 
        $study_alias = "A1-5_M1-2"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 5)";
        $scenario_1 = "Fully Autonomous"; 
        $scenario_1q = "questionnaire_fully_autonomous.php"; 
        $scenario_1_video = "A1-5.mp4"; 
	      $scenario_1_speed = "5.33"; 
        $scenario_1_accuracy = "100";
        $scenario_2 = "Human Operated"; 
        $scenario_2q = "questionnaire_human_operated.php"; 
        $scenario_2_video = "M1-2.mp4";
	      $scenario_2_speed = "8.78"; 
        $scenario_2_accuracy = "67";  
        $deception_warning = ""; 


  } else if ($group_id == "CLMHA"){ 
        $study_alias = "M1-2_A1-5"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 6)"; 
        $scenario_1 = "Human Operated"; 
        $scenario_1q = "questionnaire_human_operated.php";
	      $scenario_1_video = "M1-2.mp4"; 
	      $scenario_1_speed = "8.78"; 
        $scenario_1_accuracy = "67";
        $scenario_2 = "Fully Autonomous"; 
        $scenario_2q = "questionnaire_fully_autonomous.php"; 
        $scenario_2_video = "A1-5.mp4";
	      $scenario_2_speed = "5.33"; 
        $scenario_2_accuracy = "100";  
        $deception_warning = ""; 


  } else if ($group_id == "CHAHM"){ 
        $study_alias = "A1-5_M1-5"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 7)"; 
        $scenario_1 = "Fully Autonomous"; 
        $scenario_1q = "questionnaire_fully_autonomous.php"; 
        $scenario_1_video = "A1-5.mp4"; 
	      $scenario_1_speed = "5.33"; 
        $scenario_1_accuracy = "100";
        $scenario_2 = "Human Operated"; 
        $scenario_2q = "questionnaire_human_operated.php"; 
        $scenario_2_video = "M1-5.mp4";
	      $scenario_2_speed = "6.00"; 
        $scenario_2_accuracy = "78";  
        $deception_warning = ""; 


  } else if ($group_id == "CHMHA"){ 
        $study_alias = "M1-5_A1-5"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 8)"; 
        $scenario_1 = "Human Operated"; 
        $scenario_1q = "questionnaire_human_operated.php";
        $scenario_1_video = "M1-5.mp4"; 
	      $scenario_1_speed = "6.00"; 
        $scenario_1_accuracy = "78";
        $scenario_2 = "Fully Autonomous"; 
        $scenario_2q = "questionnaire_fully_autonomous.php";  
        $scenario_2_video = "A1-5.mp4";
	      $scenario_2_speed = "5.33"; 
        $scenario_2_accuracy = "100";  
        $deception_warning = ""; 


  } else if ($group_id == "TLALM"){ 
        $study_alias = "A2-1_M2-7"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 9)"; 
        $scenario_1 = "Fully Autonomous"; 
        $scenario_1q = "questionnaire_fully_autonomous.php"; 
        $scenario_1_video = "A2-1.mp4"; 
	      $scenario_1_speed = "5.33"; 
        $scenario_1_accuracy = "62";
        $scenario_2 = "Human Operated"; 
        $scenario_2q = "questionnaire_human_operated.php"; 
        $scenario_2_video = "M2-7.mp4";
	      $scenario_2_speed = "6.00"; 
        $scenario_2_accuracy = "56";  
        $deception_warning = "<b> Moment Of Truth </b>: The first video (scenario 1) was actually human-operated and the second video (scenario 2) 
			     was actually fully autonomous!"; 


  } else if ($group_id == "TLMLA"){ 
        $study_alias = "M2-7_A2-1"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 10)"; 
        $scenario_1 = "Human Operated"; 
        $scenario_1q = "questionnaire_human_operated.php";
        $scenario_1_video = "M2-7.mp4"; 
	      $scenario_1_speed = "6.00"; 
        $scenario_1_accuracy = "56";
        $scenario_2 = "Fully Autonomous"; 
        $scenario_2q = "questionnaire_fully_autonomous.php"; 
        $scenario_2_video = "A2-1.mp4";
	      $scenario_2_speed = "5.33"; 
        $scenario_2_accuracy = "62";  
        $deception_warning = "<b> Moment Of Truth </b>: The first video (scenario 1) was actually fully autonomous and the second video (scenario 2) 
			     was actually human-operated!"; 


  } else if ($group_id == "TLAHM"){ 
        $study_alias = "A2-1_M2-2"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 11)"; 
        $scenario_1 = "Fully Autonomous"; 
        $scenario_1q = "questionnaire_fully_autonomous.php"; 
        $scenario_1_video = "A2-1.mp4"; 
	      $scenario_1_speed = "5.33"; 
        $scenario_1_accuracy = "62";
        $scenario_2 = "Human Operated"; 
        $scenario_2q = "questionnaire_human_operated.php"; 
        $scenario_2_video = "M2-2.mp4";
	      $scenario_2_speed = "4.67"; 
        $scenario_2_accuracy = "100";  
        $deception_warning = "<b> Moment Of Truth </b>: The first video (scenario 1) was actually human-operated and the second video (scenario 2) 
			     was actually fully autonomous!"; 


  } else if ($group_id == "THMLA"){ 
        $study_alias = "M2-2_A2-1"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 12)"; 
        $scenario_1 = "Human Operated"; 
        $scenario_1q = "questionnaire_human_operated.php"; 
        $scenario_1_video = "M2-2.mp4";
	      $scenario_1_speed = "4.67"; 
        $scenario_1_accuracy = "100"; 
        $scenario_2 = "Fully Autonomous"; 
        $scenario_2q = "questionnaire_fully_autonomous.php"; 
        $scenario_2_video = "A2-1.mp4"; 
	      $scenario_2_speed = "5.33"; 
        $scenario_2_accuracy = "62"; 
        $deception_warning = "<b> Moment Of Truth </b>: The first video (scenario 1) was actually fully autonomous and the second video (scenario 2) 
			     was actually human-operated!"; 


  } else if ($group_id == "THALM"){ 
        $study_alias = "A2-3_M2-7"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 13)"; 
        $scenario_1 = "Fully Autonomous"; 
        $scenario_1q = "questionnaire_fully_autonomous.php"; 
        $scenario_1_video = "A2-3.mp4"; 
	      $scenario_1_speed = "5.33"; 
        $scenario_1_accuracy = "100";
        $scenario_2 = "Human Operated"; 
        $scenario_2q = "questionnaire_human_operated.php"; 
        $scenario_2_video = "M2-7.mp4";
	      $scenario_2_speed = "6.00"; 
        $scenario_2_accuracy = "56";  
        $deception_warning = "<b> Moment Of Truth </b>: The first video (scenario 1) was actually human-operated and the second video (scenario 2) 
			     was actually fully autonomous!"; 


} else if ($group_id == "TLMHA"){ 
        $study_alias = "M2-7_A2-3"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 14)"; 
        $scenario_1 = "Human Operated"; 
        $scenario_1q = "questionnaire_human_operated.php";
        $scenario_1_video = "M2-7.mp4"; 
	      $scenario_1_speed = "6.00"; 
        $scenario_1_accuracy = "56";
        $scenario_2 = "Fully Autonomous"; 
        $scenario_2q = "questionnaire_fully_autonomous.php"; 
        $scenario_2_video = "A2-3.mp4";
	      $scenario_2_speed = "5.33"; 
        $scenario_2_accuracy = "100";  
        $deception_warning = "<b> Moment Of Truth </b>: The first video (scenario 1) was actually fully autonomous and the second video (scenario 2) 
			     was actually human-operated!"; 


  } else if ($group_id == "THAHM"){ 
        $study_alias = "A2-3_M2-2"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 15)"; 
        $scenario_1 = "Fully Autonomous"; 
        $scenario_1q = "questionnaire_fully_autonomous.php"; 
        $scenario_1_video = "A2-3.mp4"; 
	      $scenario_1_speed = "5.33"; 
        $scenario_1_accuracy = "100";
        $scenario_2 = "Human Operated"; 
        $scenario_2q = "questionnaire_human_operated.php"; 
        $scenario_2_video = "M2-2.mp4";
	      $scenario_2_speed = "4.67"; 
        $scenario_2_accuracy = "100";  
        $deception_warning = "<b> Moment Of Truth </b>: The first video (scenario 1) was actually human-operated and the second video (scenario 2) 
			     was actually fully autonomous!"; 


  } else if ($group_id == "THMHA"){ 
        $study_alias = "M2-2_A2-3"; 
        $study_title = "The placebo effect of autonomy level on trust in human-swarm interaction (Group 16)"; 
        $scenario_1 = "Human Operated"; 
        $scenario_1q = "questionnaire_human_operated.php"; 
        $scenario_1_video = "M2-2.mp4"; 
	      $scenario_1_speed = "4.67"; 
        $scenario_1_accuracy = "100";
        $scenario_2 = "Fully Autonomous"; 
        $scenario_2q = "questionnaire_fully_autonomous.php"; 
        $scenario_2_video = "A2-3.mp4";
	      $scenario_2_speed = "5.33"; 
        $scenario_2_accuracy = "100";  
        $deception_warning = "<b> Moment Of Truth </b>: The first video (scenario 1) was actually fully autonomous and the second video (scenario 2) 
			     was actually human-operated!"; 

  } else { 

        exit("Invalid Group ID. Please contact researcher."); 

  } 


   if ($_SERVER["REQUEST_METHOD"] == "POST"){

        // study activity identifier
        $prolific_pid = $_POST['prolific_pid'];
        $study_id = $_POST['study_id'];
        $session_id = $_POST['session_id'];
        $study_start_time = $_POST['study_start_time'];
        $study_end_time = date("Y-m-d h:i:s");
        $study_title = $_POST['study_title'];
        $study_alias = $_POST['study_alias'];

        // participant consent and demographic questions
        $pcpt_c1 = $_POST['radio_pcpt_c1'];
        $pcpt_c2 = $_POST['radio_pcpt_c2'];
        $pcpt_c3 = $_POST['radio_pcpt_c3'];
        $radio_pcpt_f1 = $_POST['radio_pcpt_f1'];
        $radio_pcpt_f2 = $_POST['radio_pcpt_f2'];
        $radio_pcpt_f3 = $_POST['radio_pcpt_f3'];
        $radio_pcpt_f4 = $_POST['radio_pcpt_f4'];
        $radio_pcpt_p1 = $_POST['radio_pcpt_p1'];
        $radio_pcpt_p2 = $_POST['radio_pcpt_p2'];
        $radio_pcpt_p3 = $_POST['radio_pcpt_p3'];
        $radio_pcpt_p4 = $_POST['radio_pcpt_p4'];
        $radio_pcpt_p5 = $_POST['radio_pcpt_p5'];
        $radio_pcpt_p6 = $_POST['radio_pcpt_p6'];
        $radio_pcpt_p7 = $_POST['radio_pcpt_p7'];
        $radio_pcpt_p8 = $_POST['radio_pcpt_p8'];
        $radio_pcpt_p9 = $_POST['radio_pcpt_p9'];
        $txt_pcpt_p10 = $_POST['txt_pcpt_p10'];
        $txt_pcpt_p11 = $_POST['txt_pcpt_p11'];
        $radio_pcpt_p12 = $_POST['radio_pcpt_p12'];
        $radio_pcpt_p13 = $_POST['radio_pcpt_p13'];
        $radio_pcpt_p14 = $_POST['radio_pcpt_p14'];
        $radio_pcpt_p15 = $_POST['radio_pcpt_p15'];
        $radio_pcpt_p16 = $_POST['radio_pcpt_p16'];
        $txt_pcpt_p17 = $_POST['txt_pcpt_p17'];
        $txt_pcpt_p18 = $_POST['txt_pcpt_p18'];
        $txt_pcpt_p17 = $_POST['txt_pcpt_p17'];
        $txt_pcpt_p18 = $_POST['txt_pcpt_p18'];
        $radio_pcpt_p19 = $_POST['radio_pcpt_p19'];
        $txt_pcpt_p20 = $_POST['txt_pcpt_p20'];
        $radio_pcpt_p21 = $_POST['radio_pcpt_p21'];
        $radio_pcpt_p22 = $_POST['radio_pcpt_p22'];

        // study wsga questionnaires
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
        $j14 = $_POST['radio_wsga_j14'];
        $j15 = $_POST['radio_wsga_j15'];

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
            $radio_pcpt_f2 = "No formal education";
            break;
          case "2":
            $radio_pcpt_f2 = "GCSE or equivalent";
            break;
          case "3":
            $radio_pcpt_f2 = "A-level or equivalent";
            break;
          case "4":
            $radio_pcpt_f2 = "Bachelor's degree or equivalent";
            break;
          case "5":
            $radio_pcpt_f2 = "Master's degree or equivalent";
            break;
          case "6":
            $radio_pcpt_f2 = "Doctoral degree or equivalent";
            break;
          case "7":
            $radio_pcpt_f2 = "Other";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_f3) {
          case "1":
            $radio_pcpt_f3 = "Hardly ever use the computer and do not feel very competent";
            break;
          case "2":
            $radio_pcpt_f3 = "Slightly below average computer user, infrequently using the computer, using few applications";
            break;
          case "3":
            $radio_pcpt_f3 = "Average computer user, using the internet, standard applications etc.";
            break;
          case "4":
            $radio_pcpt_f3 = "User of specialist applications but not an IT specialist";
            break;
          case "5":
            $radio_pcpt_f3 = "Considerable IT expertise short of full professional qualifications";
            break;
          case "6":
            $radio_pcpt_f3 = "Professionally qualified computer scientist or IT specialist";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_f4) {
          case "1":
            $radio_pcpt_f4 = "Not at all";
            break;
          case "2":
            $radio_pcpt_f4 = "I know a bit about the technology but have never used it";
            break;
          case "3":
            $radio_pcpt_f4 = "I have some experience with operating UAVs as a hobby";
            break;
          case "4":
            $radio_pcpt_f4 = "I professionally work with UAVs";
            break;
          default:
            // do nothing
        }

        $pcpt_f1 = mysqli_real_escape_string($con1, $radio_pcpt_f1);
        $pcpt_f2 = mysqli_real_escape_string($con1, $radio_pcpt_f2);
        $pcpt_f3 = mysqli_real_escape_string($con1, $radio_pcpt_f3);
        $pcpt_f4 = mysqli_real_escape_string($con1, $radio_pcpt_f4);

        // convert numbers to text custom questionnaire data
        switch ($radio_pcpt_p1) {
          case "1":
            $radio_pcpt_p1 = "The fully autonomous swarm scenario";
            break;
          case "2":
            $radio_pcpt_p1 = "The human-operated swarm scenario";
            break;
          case "3":
            $radio_pcpt_p1 = "Both swarm scenarios performed equally";
            break;
            case "4":
              $radio_pcpt_p1 = "I don't know";
          default:
            // do nothing
        }

        switch ($radio_pcpt_p2) {
          case "1":
            $radio_pcpt_p2 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p2 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p2 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p2 = "Agree";
            break;
          case "5":
            $radio_pcpt_p2 = "Disagree agree";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p3) {
          case "1":
            $radio_pcpt_p3 = "The fully autonomous scenario";
            break;
          case "2":
            $radio_pcpt_p3 = "The human-operated scenario";
            break;
          case "3":
            $radio_pcpt_p3 = "I trust both scenarios equally";
            break;
          case "4":
            $radio_pcpt_p3 = "I do not trust any of the scenarios";
            break;
          case "5":
            $radio_pcpt_p3 = "I don't know";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p4) {
          case "1":
            $radio_pcpt_p4 = "The performance of the system";
            break;
          case "2":
            $radio_pcpt_p4 = "I don't normally trust autonomous systems";
            break;
          case "3":
            $radio_pcpt_p4 = "Humans are not perfect and therefore I don't normally trust humans";
            break;
          case "4":
            $radio_pcpt_p4 = "The appearance of the system";
            break;
          case "5":
            $radio_pcpt_p4 = "Other reasons not listed";
            break;
          case "6":
            $radio_pcpt_p4 = "I don't know";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p5) {
          case "1":
            $radio_pcpt_p5 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p5 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p5 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p5 = "Agree";
            break;
          case "5":
            $radio_pcpt_p5 = "Strongly agree";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p6) {
          case "1":
            $radio_pcpt_p6 = "Yes";
            break;
          case "2":
            $radio_pcpt_p6 = "No";
            break;
          case "3":
            $radio_pcpt_p6 = "Maybe";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p7) {
          case "1":
            $radio_pcpt_p7 = "Yes";
            break;
          case "2":
            $radio_pcpt_p7 = "No";
            break;
          case "3":
            $radio_pcpt_p7 = "Maybe";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p8) {
          case "1":
            $radio_pcpt_p8 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p8 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p8 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p8 = "Agree";
            break;
          case "5":
            $radio_pcpt_p8 = "Strongly agree";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p9) {
          case "1":
            $radio_pcpt_p9 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p9 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p9 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p9 = "Agree";
            break;
          case "5":
            $radio_pcpt_p9 = "Strongly agree";
            break;
          default:
            // do nothing
        }


        switch ($radio_pcpt_p12) {
          case "1":
            $radio_pcpt_p12 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p12 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p12 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p12 = "Agree";
            break;
          case "5":
            $radio_pcpt_p12 = "Strongly agree";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p13) {
          case "1":
            $radio_pcpt_p13 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p13 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p13 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p13 = "Agree";
            break;
          case "5":
            $radio_pcpt_p13 = "Strongly agree";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p14) {
          case "1":
            $radio_pcpt_p14 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p14 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p14 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p14 = "Agree";
            break;
          case "5":
            $radio_pcpt_p14 = "Strongly agree";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p15) {
          case "1":
            $radio_pcpt_p15 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p15 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p15 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p15 = "Agree";
            break;
          case "5":
            $radio_pcpt_p15 = "Strongly agree";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p16) {
          case "1":
            $radio_pcpt_p16 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p16 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p16 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p16 = "Agree";
            break;
          case "5":
            $radio_pcpt_p16 = "Strongly agree";
            break;
          default:
            // do nothing
        }


        switch ($radio_pcpt_p19) {
          case "1":
            $radio_pcpt_p19 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p19 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p19 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p19 = "Agree";
            break;
          case "5":
            $radio_pcpt_p19 = "Strongly agree";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p21) {
          case "1":
            $radio_pcpt_p21 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p21 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p21 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p21 = "Agree";
            break;
          case "5":
            $radio_pcpt_p21 = "Strongly agree";
            break;
          default:
            // do nothing
        }

        switch ($radio_pcpt_p22) {
          case "1":
            $radio_pcpt_p22 = "Strongly disagree";
            break;
          case "2":
            $radio_pcpt_p22 = "Disagree";
            break;
          case "3":
            $radio_pcpt_p22 = "Neutral";
            break;
          case "4":
            $radio_pcpt_p22 = "Agree";
            break;
          case "5":
            $radio_pcpt_p22 = "Strongly agree";
            break;
          default:
            // do nothing
        }

        $pcpt_p1 = mysqli_real_escape_string($con1, $radio_pcpt_p1);
        $pcpt_p2 = mysqli_real_escape_string($con1, $radio_pcpt_p2);
        $pcpt_p3 = mysqli_real_escape_string($con1, $radio_pcpt_p3);
        $pcpt_p4 = mysqli_real_escape_string($con1, $radio_pcpt_p4);
        $pcpt_p5 = mysqli_real_escape_string($con1, $radio_pcpt_p5);
        $pcpt_p6 = mysqli_real_escape_string($con1, $radio_pcpt_p6);
        $pcpt_p7 = mysqli_real_escape_string($con1, $radio_pcpt_p7);
        $pcpt_p8 = mysqli_real_escape_string($con1, $radio_pcpt_p8);
        $pcpt_p9 = mysqli_real_escape_string($con1, $radio_pcpt_p9);
        $pcpt_p10 = mysqli_real_escape_string($con1, $txt_pcpt_p10);
        $pcpt_p11 = mysqli_real_escape_string($con1, $txt_pcpt_p11);
        $pcpt_p12 = mysqli_real_escape_string($con1, $radio_pcpt_p12);
        $pcpt_p13 = mysqli_real_escape_string($con1, $radio_pcpt_p13);
        $pcpt_p14 = mysqli_real_escape_string($con1, $radio_pcpt_p14);
        $pcpt_p15 = mysqli_real_escape_string($con1, $radio_pcpt_p15);
        $pcpt_p16 = mysqli_real_escape_string($con1, $radio_pcpt_p16);
        $pcpt_p17 = mysqli_real_escape_string($con1, $txt_pcpt_p17);
        $pcpt_p18 = mysqli_real_escape_string($con1, $txt_pcpt_p18);
        $pcpt_p19 = mysqli_real_escape_string($con1, $radio_pcpt_p19);
        $pcpt_p20 = mysqli_real_escape_string($con1, $txt_pcpt_p20);
        $pcpt_p21 = mysqli_real_escape_string($con1, $radio_pcpt_p21);
        $pcpt_p22 = mysqli_real_escape_string($con1, $radio_pcpt_p22);


        // update data table for scenario 1
        $study_scenario = substr($study_alias,0,4);
        $sql = "INSERT INTO placebo_study_data_table (prolific_pid, study_id, `session_id`, study_title, study_alias, study_scenario, study_start_time, study_end_time, pcpt_c1, pcpt_c2, pcpt_c3, pcpt_f1, pcpt_f2, pcpt_f3, pcpt_f4, j1, j2, j3, j4, j5, j6, j7, j8, j9, j10, j11, j12, j13, j14, j15, pcpt_p1, pcpt_p2, pcpt_p3, pcpt_p4, pcpt_p5, pcpt_p6, pcpt_p7, pcpt_p8, pcpt_p9, pcpt_p10, pcpt_p11, pcpt_p12, pcpt_p13, pcpt_p14, pcpt_p15, pcpt_p16, pcpt_p17, pcpt_p18, pcpt_p19, pcpt_p20, pcpt_p21, pcpt_p22) VALUES ('" . $prolific_pid . "', '" . $study_id . "', '" . $session_id . "', '" . $study_title . "', '" . $study_alias . "', '" . $study_scenario . "', '" . $study_start_time . "', '" . $study_end_time . "', '" . $pcpt_c1 . "', '" . $pcpt_c2 . "', '" . $pcpt_c3 . "', '" . $pcpt_f1 . "', '" . $pcpt_f2 . "', '" . $pcpt_f3 . "', '" . $pcpt_f4 . "', '" . $j1 . "', '" . $j2 . "', '" . $j3 . "', '" . $j4 . "', '" . $j5 . "', '" . $j6 . "', '" . $j7 . "', '" . $j8 . "', '" . $j9 . "', '" . $j10 . "', '" . $j11 . "', '" . $j12 . "', '" . $j13 . "', '" . $j14 . "', '" . $j15 . "', '" . $pcpt_p1 . "', '" . $pcpt_p2 . "', '" . $pcpt_p3 . "', '" . $pcpt_p4 . "', '" . $pcpt_p5 . "', '" . $pcpt_p6 . "', '" . $pcpt_p7 . "', '" . $pcpt_p8 . "', '" . $pcpt_p9 . "', '" . $pcpt_p10 . "', '" . $pcpt_p11 . "', '" . $pcpt_p12 . "', '" . $pcpt_p13 . "', '" . $pcpt_p14 . "', '" . $pcpt_p15 . "', '" . $pcpt_p16 . "', '" . $pcpt_p17 . "', '" . $pcpt_p18 . "', '" . $pcpt_p19 . "', '" . $pcpt_p20 . "', '" . $pcpt_p21 . "', '" . $pcpt_p22 . "')";
        if(mysqli_query($con1, $sql)){
            // echo "Records inserted successfully.";
        } else{
            echo "Error inserting record: " . $con->error;
            exit();
        }


        // study lkxr questionnaires
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
        $j14 = $_POST['radio_lkxr_j14'];
        $j15 = $_POST['radio_lkxr_j15'];

        // update data table for scenario 2
        $study_scenario = substr($study_alias,-4);
        $sql = "INSERT INTO placebo_study_data_table (prolific_pid, study_id, `session_id`, study_title, study_alias, study_scenario, study_start_time, study_end_time, pcpt_c1, pcpt_c2, pcpt_c3, pcpt_f1, pcpt_f2, pcpt_f3, pcpt_f4, j1, j2, j3, j4, j5, j6, j7, j8, j9, j10, j11, j12, j13, j14, j15, pcpt_p1, pcpt_p2, pcpt_p3, pcpt_p4, pcpt_p5, pcpt_p6, pcpt_p7, pcpt_p8, pcpt_p9, pcpt_p10, pcpt_p11, pcpt_p12, pcpt_p13, pcpt_p14, pcpt_p15, pcpt_p16, pcpt_p17, pcpt_p18, pcpt_p19, pcpt_p20, pcpt_p21, pcpt_p22) VALUES ('" . $prolific_pid . "', '" . $study_id . "', '" . $session_id . "', '" . $study_title . "', '" . $study_alias . "', '" . $study_scenario . "', '" . $study_start_time . "', '" . $study_end_time . "', '" . $pcpt_c1 . "', '" . $pcpt_c2 . "', '" . $pcpt_c3 . "', '" . $pcpt_f1 . "', '" . $pcpt_f2 . "', '" . $pcpt_f3 . "', '" . $pcpt_f4 . "', '" . $j1 . "', '" . $j2 . "', '" . $j3 . "', '" . $j4 . "', '" . $j5 . "', '" . $j6 . "', '" . $j7 . "', '" . $j8 . "', '" . $j9 . "', '" . $j10 . "', '" . $j11 . "', '" . $j12 . "', '" . $j13 . "', '" . $j14 . "', '" . $j15 . "', '" . $pcpt_p1 . "', '" . $pcpt_p2 . "', '" . $pcpt_p3 . "', '" . $pcpt_p4 . "', '" . $pcpt_p5 . "', '" . $pcpt_p6 . "', '" . $pcpt_p7 . "', '" . $pcpt_p8 . "', '" . $pcpt_p9 . "', '" . $pcpt_p10 . "', '" . $pcpt_p11 . "', '" . $pcpt_p12 . "', '" . $pcpt_p13 . "', '" . $pcpt_p14 . "', '" . $pcpt_p15 . "', '" . $pcpt_p16 . "', '" . $pcpt_p17 . "', '" . $pcpt_p18 . "', '" . $pcpt_p19 . "', '" . $pcpt_p20 . "', '" . $pcpt_p21 . "', '" . $pcpt_p22 . "')";
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
        header("Location: https://app.prolific.co/submissions/complete?cc=CDE5EZ41"); // Hemangi's placebo effect study prolific redirect
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
    <title>Study - The placebo effect of autonomy level on trust in human-swarm interaction | UoS HutSim</title>
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
              echo '<input type="hidden" name="study_start_time" value="'.date("Y-m-d h:i:s").'">';
              echo '<input type="hidden" name="study_title" value="'.$study_title.'">';
              echo '<input type="hidden" name="study_alias" value="'.$study_alias.'">';
          ?>
          <!-- start step indicators -->
          <div class="form-header d-flex mb-4">
              <span class="stepIndicator">Briefing <br>(2 min)</span>
              <span class="stepIndicator">Consent <br>(2 min)</span>
              <!-- <span class="stepIndicator">Tutorial <br>(5 min)</span> -->
              <span class="stepIndicator">Scenario I <br>(2 min)</span>
              <span class="stepIndicator">Questionnaire <br>(2 min)</span>
              <span class="stepIndicator">Scenario II <br>(2 min)</span>
              <span class="stepIndicator">Questionnaire <br>(2 min)</span>
              <span class="stepIndicator">Finish <br>(3 min)</span>
          </div>
          <!-- end step indicators -->
      
          <!-- step one -->
          <div class="step">
              <h4 class="text-center fw-bold mb-4 mt-5">Participant Information Sheet</h4>
              <?php
                include 'participant-information-sheet.php'; 
              ?>
          </div>

          <!-- step two -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Participant Consent and Information</h4>
              <p class="text-center mb-5">Thank you for choosing to take part in this study. Please complete this consent form before taking part in the study. It is required for your participation. This study has been approved by the Faculty Research Ethics Committee (FREC) at the University of Southampton (Ethics/ERGO Number: ERGO/FEPS/81410).</p>
              <div class="mx-0 mx-sm-auto mb-5">
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

              <div class="mx-0 mx-sm-auto mb-5">
              <div class="card">
                  <div class="card-body">
                    <div class="text-center">
                        <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                        <i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                        <p>
                        <strong>Demographic Information</strong>
                        </p>
                    </div>

                    <hr />

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                          <p id="radio_pcpt_f1_question" class="my-3 fw-bold">What is your gender?</p>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f1" value="Male" id="radio_pcpt_f1_1" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f1_1">Male</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f1" value="Female" id="radio_pcpt_f1_2" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f1_2">Female</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f1" value="Non-binary" id="radio_pcpt_f1_3" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f1_3">Non-binary</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f1" value="Prefer not to say" id="radio_pcpt_f1_4" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f1_4">Prefer not to say</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f1" value="Other" id="radio_pcpt_f1_5" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f1_5">Other</label>
                          </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                          <p id="radio_pcpt_f2_question" class="my-3 fw-bold">What level of education do you hold?</p>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f2" value="No formal education" id="radio_pcpt_f2_1" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f2_1">No formal education</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f2" value="GCSE or equivalent" id="radio_pcpt_f2_2" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f2_2">GCSE or equivalent</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f2" value="A-level or equivalent" id="radio_pcpt_f2_3" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f2_3">A-level or equivalent</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f2" value="Bachelor's degree or equivalent" id="radio_pcpt_f2_4" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f2_4">Bachelor's degree or equivalent</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f2" value="Master's degree or equivalent" id="radio_pcpt_f2_5" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f2_5">Master's degree or equivalent</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f2" value="Doctoral degree or equivalent" id="radio_pcpt_f2_6" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f2_6">Doctoral degree or equivalent</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f2" value="Other" id="radio_pcpt_f2_7" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f2_7">Other</label>
                          </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                          <p id="radio_pcpt_f3_question" class="my-3 fw-bold">What is your level of computer expertise?</p>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f3" value="Hardly ever use the computer and do not feel very competent" id="radio_pcpt_f3_1" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f3_1">Hardly ever use the computer and do not feel very competent</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f3" value="Slightly below average computer user, infrequently using the computer, using few applications" id="radio_pcpt_f3_2" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f3_2">Slightly below average computer user, infrequently using the computer, using few applications</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f3" value="Average computer user, using the internet, standard applications etc." id="radio_pcpt_f3_3" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f3_3">Average computer user, using the internet, standard applications etc.</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f3" value="User of specialist applications but not an IT specialist" id="radio_pcpt_f3_4" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f3_4">User of specialist applications but not an IT specialist</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f3" value="Considerable IT expertise short of full professional qualifications" id="radio_pcpt_f3_5" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f3_5">Considerable IT expertise short of full professional qualifications</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f3" value="Professionally qualified computer scientist or IT specialist" id="radio_pcpt_f3_6" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f3_6">Professionally qualified computer scientist or IT specialist</label>
                          </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                          <p id="radio_pcpt_f4_question" class="my-3 fw-bold">How familiar are you with Unmanned Aerial Vehicles (UAVs) and/or Swarm robotics?</p>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f4" value="Not at all" id="radio_pcpt_f4_1" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f4_1">Not at all</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f4" value="I know a bit about the technology but have never used it" id="radio_pcpt_f4_2" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f4_2">I know a bit about the technology but have never used it</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f4" value="I have some experience with operating UAVs as a hobby" id="radio_pcpt_f4_3" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f4_3">I have some experience with operating UAVs as a hobby</label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="radio" name="radio_pcpt_f4" value="I professionally work with UAVs" id="radio_pcpt_f4_4" onchange="validateForm();" />
                              <label class="form-check-label" for="radio_pcpt_f4_4">I professionally work with UAVs</label>
                          </div>
                        </div>
                    </div>

                  </div>
              </div>
              </div>
              
          </div>
      
          <!-- step three -->
          <!-- <div class="step">
          </div> -->
      
          <!-- step four -->
          <div class="step">
              <h4 class="text-center fw-bold mb-3 mt-5">Study Scenario I: <?php echo $scenario_1; ?></h4>
              <p class="text-center mb-3">This is the <?php echo $scenario_1; ?> study scenario. The performance of the system is as shown in the table below.</p>

              <div class="text-center">
                <table class="table table-bordered table-sm">
                  <tr>
                    <th>Speed (target per minutes)</th>
                    <th>Accuracy (percentage %)</th>
                  </tr>
                  <tr>
                    <td><?php echo $scenario_1_speed; ?></td>
                    <td><?php echo $scenario_1_accuracy; ?></td>
                  </tr>
                </table>
              </div>
              
              <p class="text-center mb-3">Do you trust the operation of the swarm in the video below? Please click play to watch the video. It is recommended to watch the video in fullscreen. The red circle indicates the chosen classification option while the black arrow indicates where the unknown object being classified is detected.</p>
              <div class="mb-3 text-center">
                <video class="shadow bg-body rounded" width="640" height="360" controls>
                    <source src="video/<?php echo $scenario_1_video; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
              </div>
              <p class="text-center mb-5">Click Next to continue to the questionnaire.</p>
          </div>

          <!-- step five -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Scenario I Questionnaire</h4>
              <p class="text-center mb-5">This is the <?php echo $scenario_1; ?> study scenario questionnaire. Please complete the form below and click next to continue.</p>
              
              <?php
                $scenario_abbr = "wsga";
                include "".$scenario_1q;
              ?>
              
          </div>

          <!-- step six -->
          <div class="step">
              <h4 class="text-center fw-bold mb-3 mt-5">Study Scenario II: <?php echo $scenario_2; ?></h4>
              <p class="text-center mb-3">This is the <?php echo $scenario_2; ?> study scenario. The performance of the system is as shown in the table below.</p>

              <div class="text-center">
                <table class="table table-bordered table-sm">
                  <tr>
                    <th>Speed (target per minutes)</th>
                    <th>Accuracy (percentage %)</th>
                  </tr>
                  <tr>
                    <td><?php echo $scenario_2_speed; ?></td>
                    <td><?php echo $scenario_2_accuracy; ?></td>
                  </tr>
                </table>
              </div>
              
              <p class="text-center mb-3">Do you trust the operation of the swarm in the video below? Please click play to watch the video.  It is recommended to watch the video in fullscreen. The red circle indicates the chosen classification option while the black arrow indicates where the unknown object being classified is detected.</p>
              <div class="mb-3 text-center">
                <video class="shadow bg-body rounded" width="640" height="360" controls>
                    <source src="video/<?php echo $scenario_2_video; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
              </div>
              <p class="text-center mb-5">Click Next to continue to the questionnaire.</p>
          </div>

          <!-- step seven -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Study Scenario II Questionnaire</h4>
              <p class="text-center mb-5">This is the <?php echo $scenario_2; ?> study scenario questionnaire. Please complete the form below and click next to continue.</p>
              
              <?php 
                $scenario_abbr = "lkxr";
                include "".$scenario_2q;
              ?>

          </div>

          <!-- step eight -->
          <div class="step">
              <h4 class="text-center fw-bold mb-5 mt-5">Submit to Finish</h4>
              <p class="text-center mb-5">Thank you for participating in our study. Please submit to finish and be automatically redirected back to prolific to confirm study completion.</p>
              <div class="mx-0 mx-sm-auto mb-4">
                <div class="card">
                    <div class="card-body">
                    <div class="text-center">
                        <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                        <i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                        <p>
                        <strong>Relative Comparison</strong>
                        </p>
                    </div>

                    <hr />

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p1_question" class="my-3 fw-bold">In your opinion, which of the two swarm scenarios had a better performance?</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p1" value="The fully autonomous swarm scenario" id="radio_pcpt_p1_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p1_1">The fully autonomous swarm scenario</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p1" value="The human-operated swarm scenario" id="radio_pcpt_p1_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p1_2">The human-operated swarm scenario</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p1" value="Both swarm scenarios performed equally" id="radio_pcpt_p1_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p1_3">Both swarm scenarios performed equally</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p1" value="I don't know" id="radio_pcpt_p1_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p1_4">I don't know</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p2_question" class="my-3 fw-bold">The swarm's behaviour seemed trustworthy. </p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="Strongly disagree" id="radio_pcpt_p2_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p2_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="Disagree" id="radio_pcpt_p2_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p2_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="Neutral" id="radio_pcpt_p2_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p2_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="Agree" id="radio_pcpt_p2_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p2_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="Strongly agree" id="radio_pcpt_p2_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p2_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p3_question" class="my-3 fw-bold">Which scenario did you trust more?</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="The fully autonomous scenario" id="radio_pcpt_p3_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p3_1">The fully autonomous scenario</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="The human-operated scenario" id="radio_pcpt_p3_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p3_2">The human-operated scenario</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="I trust both scenarios equally" id="radio_pcpt_p3_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p3_3">I trust both scenarios equally</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="I do not trust any of the scenarios" id="radio_pcpt_p3_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p3_4">I do not trust any of the scenarios</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="I don't know" id="radio_pcpt_p3_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p3_5">I don't know</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p4_question" class="my-3 fw-bold">Which of these options affected your trust the most in the scenario chosen above?</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p4" value="The performance of the system" id="radio_pcpt_p4_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p4_1">The performance of the system</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p4" value="I don't normally trust autonomous systems" id="radio_pcpt_p4_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p4_2">I don't normally trust autonomous systems</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p4" value="Humans are not perfect and therefore I don't normally trust humans" id="radio_pcpt_p4_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p4_3">Humans are not perfect and therefore I don't normally trust humans</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p4" value="The appearance of the system" id="radio_pcpt_p4_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p4_4">The appearance of the system</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p4" value="Other reasons not listed" id="radio_pcpt_p4_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p4_5">Other reasons not listed</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p4" value="I don't know" id="radio_pcpt_p4_6" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p4_6">I don't know</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p5_question" class="my-3 fw-bold">It is important to know if the human or an autonomous system is operating the swarm. </p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p5" value="Strongly disagree" id="radio_pcpt_p5_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p5_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p5" value="Disagree" id="radio_pcpt_p5_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p5_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p5" value="Neutral" id="radio_pcpt_p5_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p5_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p5" value="Agree" id="radio_pcpt_p5_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p5_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p5" value="Strongly agree" id="radio_pcpt_p5_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p5_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p6_question" class="my-3 fw-bold">Will the swarm being autonomous or human-operated affect your decision?</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p6" value="Yes" id="radio_pcpt_p6_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p6_1">Yes</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p6" value="No" id="radio_pcpt_p6_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p6_2">No</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p6" value="Maybe" id="radio_pcpt_p6_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p6_3">Maybe</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p7_question" class="my-3 fw-bold">If you are biased either towards the human-operated system or the autonomous system then, would the performance affect your decision?</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p7" value="Yes" id="radio_pcpt_p7_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p7_1">Yes</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p7" value="No" id="radio_pcpt_p7_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p7_2">No</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p7" value="Maybe" id="radio_pcpt_p7_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p7_3">Maybe</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p8_question" class="my-3 fw-bold">Autonomous systems are more trustworthy than human-operated systems.</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p8" value="Strongly disagree" id="radio_pcpt_p8_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p8_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p8" value="Disagree" id="radio_pcpt_p8_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p8_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p8" value="Neutral" id="radio_pcpt_p8_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p8_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p8" value="Agree" id="radio_pcpt_p8_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p8_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p8" value="Strongly agree" id="radio_pcpt_p8_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p8_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p9_question" class="my-3 fw-bold">Human-operated systems are more trustworthy than autonomous systems.</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p9" value="Strongly disagree" id="radio_pcpt_p9_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p9_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p9" value="Disagree" id="radio_pcpt_p9_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p9_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p9" value="Neutral" id="radio_pcpt_p9_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p9_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p9" value="Agree" id="radio_pcpt_p9_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p9_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p9" value="Strongly agree" id="radio_pcpt_p9_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p9_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                   <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p10_question" class="my-3 fw-bold">List advantages of human-operated system in single words. List atleast one advantage.</p>
                            <div class="mb-2">
                                <textarea class="form-control" name="txt_pcpt_p10" id="txt_pcpt_p10" rows="3" onchange="validateForm();"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p11_question" class="my-3 fw-bold">List advantages of autonomous system in single words. List atleast one advantage.</p>
                            <div class="mb-2">
                                <textarea class="form-control" name="txt_pcpt_p11" id="txt_pcpt_p11" rows="3" onchange="validateForm();"></textarea>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p12_question" class="my-3 fw-bold">An autonomous swarm can be trusted to make ethical decisions on its own.</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p12" value="Strongly disagree" id="radio_pcpt_p12_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p12_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p12" value="Disagree" id="radio_pcpt_p12_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p12_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p12" value="Neutral" id="radio_pcpt_p12_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p12_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p12" value="Agree" id="radio_pcpt_p12_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p12_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p12" value="Strongly agree" id="radio_pcpt_p12_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p12_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p13_question" class="my-3 fw-bold">A human can be trusted more than an autonomous system to make decisions in a critical situation.</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p13" value="Strongly disagree" id="radio_pcpt_p13_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p13_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p13" value="Disagree" id="radio_pcpt_p13_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p13_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p13" value="Neutral" id="radio_pcpt_p13_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p13_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p13" value="Agree" id="radio_pcpt_p13_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p13_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p13" value="Strongly agree" id="radio_pcpt_p13_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p13_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p14_question" class="my-3 fw-bold">Humans should have the ability to override the swarm decisions in critical situations.</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p14" value="Strongly disagree" id="radio_pcpt_p14_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p14_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p14" value="Disagree" id="radio_pcpt_p14_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p14_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p14" value="Neutral" id="radio_pcpt_p14_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p14_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p14" value="Agree" id="radio_pcpt_p14_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p14_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p14" value="Strongly agree" id="radio_pcpt_p14_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p14_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p15_question" class="my-3 fw-bold">You would trust an autonomous system that detects casualties faster but might be wrong in certain classifications rather than a human-operated system that takes much longer than the autonomous system but gives accurate results.</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p15" value="Strongly disagree" id="radio_pcpt_p15_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p15_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p15" value="Disagree" id="radio_pcpt_p15_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p15_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p15" value="Neutral" id="radio_pcpt_p15_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p15_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p15" value="Agree" id="radio_pcpt_p15_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p15_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p15" value="Strongly agree" id="radio_pcpt_p15_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p15_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p16_question" class="my-3 fw-bold">A human-operated system 
                              that has 80% performance (slightly weaker than autonomous) just because it is operated by a human can be trusted and preferred more than
                              an autonomous system that has 85% performance. </p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p16" value="Strongly disagree" id="radio_pcpt_p16_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p16_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p16" value="Disagree" id="radio_pcpt_p16_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p16_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p16" value="Neutral" id="radio_pcpt_p16_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p16_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p16" value="Agree" id="radio_pcpt_p16_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p16_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p16" value="Strongly agree" id="radio_pcpt_p16_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p16_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p17_question" class="my-3 fw-bold">How much performance are you willing to sacrifice just so that the human is accountable for the mission? Answer in percentage (0 - 100). </p>
                            <div class="mb-2">
                                <input type="number" class="form-control" name="txt_pcpt_p17" id="txt_pcpt_p17" step="0.01" onchange="validateForm();">
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p18_question" class="my-3 fw-bold">If the human slows down the mission, how much percentage of speed are you willing to sacrifice to make sure that the human is in the loop? Answer in percentage (0 - 100).  </p>
                            <div class="mb-2">
                                <input type="number" class="form-control" name="txt_pcpt_p18" id="txt_pcpt_p18" step="0.01" onchange="validateForm();">
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p19_question" class="my-3 fw-bold">If the autonomous swarm makes an error while detecting casualties, it can be trusted again.</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p19" value="Strongly disagree" id="radio_pcpt_p19_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p19_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p19" value="Disagree" id="radio_pcpt_p19_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p19_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p19" value="Neutral" id="radio_pcpt_p19_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p19_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p19" value="Agree" id="radio_pcpt_p19_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p19_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p19" value="Strongly agree" id="radio_pcpt_p19_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p19_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p20_question" class="my-3 fw-bold">What has to be done to gain you trust back if the autonomous swarm makes errors while detecting casualties? </p>
                            <div class="mb-2">
                                <textarea class="form-control" name="txt_pcpt_p20" id="txt_pcpt_p20" rows="3" onchange="validateForm();"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p21_question" class="my-3 fw-bold">An autonomous system can be trusted if the swarm provided clear explanation of its intentions and actions in comparison to human-operated swarm.</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p21" value="Strongly disagree" id="radio_pcpt_p21_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p21_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p21" value="Disagree" id="radio_pcpt_p21_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p21_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p21" value="Neutral" id="radio_pcpt_p21_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p21_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p21" value="Agree" id="radio_pcpt_p21_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p21_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p21" value="Strongly agree" id="radio_pcpt_p21_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p21_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    <div class="px-4">
                        <div style="font-size: 0.95rem;">
                            <p id="radio_pcpt_p22_question" class="my-3 fw-bold">An autonomous swarm can be trusted more in low-risk missions as compared to high-risk missions where a human-operator would be preferred.</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p22" value="Strongly disagree" id="radio_pcpt_p22_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p22_1">Strongly disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p22" value="Disagree" id="radio_pcpt_p22_2" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p22_2">Disagree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p22" value="Neutral" id="radio_pcpt_p22_3" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p22_3">Neutral</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p22" value="Agree" id="radio_pcpt_p22_4" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p22_4">Agree</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="radio_pcpt_p22" value="Strongly agree" id="radio_pcpt_p22_5" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_pcpt_p22_5">Strongly agree</label>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
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

          // confirm participant consent to participate in study
          var bool_c1 = validateConsent("c1");
          var bool_c2 = validateConsent("c2");
          var bool_c3 = validateConsent("c3");
          if (bool_c1 || bool_c2 || bool_c3){
              document.getElementById("consent_check_alert").classList.remove("d-none");
          }

          // check if a demographic information radio row question element has been selected
          var radio_pcpt_form = ["f1", "f2", "f3", "f4", "p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8", "p9", "p10", "p11", "p12", "p13", "p14", "p15", "p16", "p17", "p18", "p19", "p20", "p21", "p22"];
          checkFormElement("pcpt",radio_pcpt_form);


          // check if a wsga radio row element has been selected
          var radio_wsga_lkxr_form = ["j1", "j2", "j3", "j4", "j5", "j6", "j7", "j8", "j9", "j10", "j11", "j12", "j13", "j14", "j15"];
          checkFormElement("wsga",radio_wsga_lkxr_form);

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

          // // comment the following line for deployment
          // valid = true;

          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }

        function checkFormElement(element_id_abbr,radio_wsga_lkxr_form){
          // var radio_wsga_lkxr_form = ["md", "pd", "td", "pf", "ef", "fr", "j1", "j2", "j3", "j4", "j5", "j6", "j7", "p1", "p2", "p3", "p4", "p5", "p6", "p7", "p8", "p9", "p10", "p11"];
          for(j=0;j<radio_wsga_lkxr_form.length;j++){
            if (radio_wsga_lkxr_form[j] == "p10" || radio_wsga_lkxr_form[j] == "p11" || radio_wsga_lkxr_form[j] == "p17" || radio_wsga_lkxr_form[j] == "p18" || radio_wsga_lkxr_form[j] == "p20") {
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