<?php
  require 'connection.php'
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="main">
      <h1>REGISTER</h1>
      <form action="register.php" method="post">
        <label>Email</label><br>

        <input type="text" name="email" id=""><br>

        <label>Password</label><br>

        <input type="text" name="password" id=""><br>

        <label>Confirm Password</label><br>

        <input type="text" name="cpassword" id=""><br>

        <input type="submit" value="Sign Up" id="btn" name="submit_btn"><br>

        <h2>OR</h2>

        <a href="index.php"><input type="button" value="Go Back"></a>
      </form>
      <?php
        if(isset($_POST['submit_btn']))
        {
          $email=$_POST['email'];
          $password=$_POST['password'];
          $cpassword=$_POST['cpassword'];

          if($password==$cpassword)
          {
            $query="select * from user WHERE email='$email'";
            $query_run=mysqli_query($con,$query);

            if(mysqli_num_rows($query_run)>0)
            {
              echo '<script>alert("User already exists")</script>';
            }
            else
            {
              $query="insert into user values('$email','$password')";
              $query_run=mysqli_query($con,$query);
              if($query_run)
              {
                echo '<script>alert("User Registered")</script>';
              }
              else
              {
                echo '<script>alert("Error")</script>';
              }
          }
          else
          {
            echo '<script>alert("Password and confirm password do not match")</script>';
          }
        }
      ?>
    </div>
  </body>
</html>