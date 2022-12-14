<?php

  // raise admin page to view all java processes
  // option to kill all java processes

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard | UoS HutSim</title>
    </head>
    <body>
        <div style="max-width: 960px; text-align: center; border: solid 1px black; margin-right: auto; margin-left: auto; padding-bottom: 20px;">
            <h2>HutSim Simulator</h2>
            <p>The java version running on this server is...</p> <?php echo  exec('java --version'); ?> <br>
            <br>
            <div style="font-weight: bold;"> 
              <?php
                // kill related java pid instance
                if ($_POST['stopped_pid'] != ""){
                      echo exec('kill '.$_POST['stopped_pid']);
                      echo "Stopped HutSim PID: ".$_POST['stopped_pid']."<br><br>";
                }
              ?> 
            </div>
            <form action="hs_start.php" method="post">
                <input type="submit" value="Start HutSim">
            </form>
        </div>
    </body>
</html>