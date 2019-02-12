<?php

    session_id("user");
    session_start();
    $_SESSION['user_login_successful']=isset($_SESSION['user_login_successful'])?$_SESSION['user_login_successful']:null;
    if($_SESSION['user_login_successful']==true)
        header("Location: welcomeuser.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body background="image.jpg">
<br><br><br><br><br>
    <div class="container">
        <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6">
                        <h1 style="font-size: 60px">User Login</h1>
                </div>

        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="userlogin.php" method="POST">
                    <div class="form-group">
                        <label for="usernamelabel">User Name:</label>
                        <input type="text" class="form-control" name="username">
                        <br>
                        <label for="passwordlabel">Password:</label>
                        <input type="password" class="form-control" value="password" name="password">
                        <br>
                        <input type="submit" class="btn btn-success btn-lg" value="login" name="login_submit">
                        <br><br>
                    </div> 
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3"><pre><h5><a href="forgotpassword.php" class="href">Forgot Password</a></h5><h5>New User ? <a href="registration.php" class="href"><u>Register here</u></a></h5></div></pre></div>
        </div>
    </div>
</body>
</html>