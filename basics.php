<?php
    session_start();
    require 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylish.css">
        <title>Connection</title>
    </head>
    <body>
        <div id="main">
            <h1>Login</h1>
            <form action="basics.php" method="post">
                <label>Email:</label><br>
                <input type="text" name="email" placeholder="Enter email id"><br>
                <label>Password:</label><br>
                <input type="password" name="password" id="" placeholder="Enter password"><br>
                <input name="login" type="submit" value="Login" style="margin-top: 10px;">
                <br><h2>OR</h2>
                <a href="basics2.php"><input type="button" value="REGISTER"></a>


            </form>
            <?php
                if(isset($_POST['login'])){
                $email=$_POST['email'];

                $password=$_POST['password'];

                $query="select * from people WHERE email='$email' AND password='$password'";

                $query_run=mysqli_query($con,$query);

                if(mysqli_num_rows($query_run)>0)
                {
                    //valid
                    $_SESSION['email']=$email;
                    
                    header('location:home.php');
                }
                else
                {
                    //invalid
                    echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
                }
            }
            ?>
        </div>
    </body>
</html>