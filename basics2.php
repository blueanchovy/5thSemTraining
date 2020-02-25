<?php
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
            <h1>Register</h1>
            <form action="basics2.php" method="post">
                <label>Email:</label><br>
                <input type="text" name="email" placeholder="Enter email id"><br>
                <label>Enter Password:</label><br>
                <input type="text" name="password" id="" placeholder="Enter password"><br>
                <label>Confirm Password:</label><br>
                <input type="text" name="cpassword" id="" placeholder="Re-Enter Password"><br>
                <input name="submit_btn" type="submit" value="Register" style="margin-top: 10px;">
                <br><h2>OR</h2>
                <a href="basics.php"><input type="button" value="Go Back"></a>
            </form>
            <?php
                if(isset($_POST['submit_btn']))
                {
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $cpassword=$_POST['cpassword'];

                    if($password==$cpassword)
                    {
                        $query="select * from people WHERE email='$email'";
                        $query_run=mysqli_query($con,$query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                            echo '<script type="text/javascript">alert("user already exists")</script>';
                        }
                        else
                        {
                            $query="insert into people values('$email','$password')";
                            $query_run=mysqli_query($con,$query);

                            if($query_run)
                            {
                                echo '<script type="text/javascript">alert("User Registered")</script>';
                            }
                            else
                            {
                                echo '<script type="text/javascript">alert("Error!")</script>';
                            }
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("Password entry and reentry do not match")</script>';
                    }
                }           
            ?>
        </div>
    </body>
</html>