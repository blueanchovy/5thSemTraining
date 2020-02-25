<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylish.css">
        <title>Home</title>
    </head>
    <body>
      <div id="main">
        <h1>Welcome User</h1>
        <form action="basics.php" method="post">
          <input name="logout" type="submit" value="LOGOUT">
        </form>
        <?php
          if(isset($_POST['logout']))
          {
            session_destroy();
            header('location:basics.php');
          }
        ?>
      </div>
    </body>