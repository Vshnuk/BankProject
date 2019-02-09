<?php

    session_start();
    $_SESSION['admin_login_successful']=isset($_SESSION['admin_login_successful'])?$_SESSION['admin_login_successful']:null;
    if($_SESSION['admin_login_successful']==true)
        header("Location: welcomeadmin.php");

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
    <br><br><br><br><br><br>
    <div class="container">
        <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6">
                        <h1 style="font-size: 60px">Admin Login</h1>
                </div>

        </div>
        <br><br><br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="admin_login.php" method="POST">
                    <div class="form-group">
                        <label for="adminnamelabel">User Name:</label>
                        <input type="text" class="form-control" name="adminusername">
                        <br>
                        <label for="adminpasswordlabel">Password:</label>
                        <input type="password" class="form-control" value="password" name="adminpassword">
                        <br>
                        <input type="submit" class="btn btn-success btn-lg" value="login" name="admin_login_submit">
                        <br><br>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>S