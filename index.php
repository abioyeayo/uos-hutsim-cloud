<!DOCTYPE html>
<html>
  <head>
    <title>Login | UoS HutSim</title>
    <style>
      input {
        margin-right: 5px;
      }
    </style>
  </head>
  <body>
  <?php
        echo 'Time: '. time();
      ?>
    <div style="max-width: 960px; text-align: center; border: solid 1px black; margin-right: auto; margin-left: auto; padding-bottom: 20px;">
      <h2>HutSim Cloud Login</h2>
      <p>Welcome to the University of Southampton human swarm team simulator research platform. Please login to continue.</p>
      <br>
      <form action="hutsim/" method="post">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="demo@uos-hutsim.cloud">
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" placeholder="******">
        <input type="submit" value="Login">
      </form>
      <br>
      <?php
        echo 'Time: '. time();
      ?>
    </div>
  </body>
</html>