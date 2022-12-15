<!DOCTYPE html>
<html>
   <head>
      <title>Running | UoS HutSim</title>
   </head>
   <body>
     <div style="max-width: 960px; text-align: center; border: solid 1px black; margin-left: auto; margin-right: auto; padding: 20px; margin-top: 20px;"> 
         <?php
            echo exec('java --version');
            echo "<br><br>";
            $port = rand(1024, 65535);
            exec('java -jar hut.jar '.$port.'> /dev/null 2>&1 & echo $!', $output);
      
            // var_dump($output);
            echo "Process ID: ".$output[0]." | Port: ".$port;
         ?> 
         <br>
         <h2>HutSim simulator started</h2>
         <br>
         <br>
         <a href='http://uos-hutsim.cloud:<?php echo $port; ?>/' target='_blank'>
             <button>View Simulator</button>
         </a>
         <form action="index.php" method="post" style="float: right;">
            <input type="hidden" name="stopped_pid" value="<?php echo $output[0]; ?>">
            <input type="submit" value="Stop HutSim" style="background-color: yellow;">
         </form>
     </div>
   </body>
</html>