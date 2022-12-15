<?php

  // raise admin page to view all java processes
  // option to kill all java processes

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reset | UoS HutSim</title>
    </head>
    <body>
        <div style="max-width: 960px; text-align: center; border: solid 1px black; margin-right: auto; margin-left: auto; padding-bottom: 20px;">
            <p>HutSim - hard reset</p>
            <div style="font-weight: bold;"> 
              <?php
                  // kill all java process
                  echo exec("pkill -f 'java -jar'");
                  echo "All java processes have been terminated.<br><br>";
              ?> 
            </div>
            <form action="hs_start.php" method="post">
                <input type="submit" value="Start HutSim">
            </form>
        </div>
    </body>
</html>