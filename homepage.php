<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: rgb(100,200,400);">  
  <div id="head">
      <h1>Sample Database Management System</h1>
  </div><br><br>
  <div id="main">
      <h1>Welcome User</h1>
      <form>
         
          <input name="logout" type="submit" id="btn" value="LOGOUT" style="background-color: red; margin-bottom: 10px;">  
      </form>
      <?php
        if(isset($_POST['logout'])){
        session_destroy();
        header('location:index.php');
        }
      ?>
  </div>
</body>
</html>