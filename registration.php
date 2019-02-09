<?php
    session_id("registration");
    session_start();
    $_SESSION['registration']=isset($_SESSION['registration'])?$_SESSION['registration']:true;

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
<br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1 style="font-size: 60px">User Registration</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <?php
                    if($_SESSION['registration']==false)
                        echo "register again with different username";
                ?>
                <br><br>
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <label for="reg_username_label">User Name:</label>
                        <input type="text" class="form-control" name="reg_username">
                        <label for="reg_userpassword_label">Password:</label>
                        <input type="password" class="form-control" name="reg_password">
                        <label for="reg_useremaillabel">Email:</label>
                        <input type="text" class="form-control" name="reg_email">
                        <label for="reg_userphoneabel">Phone:</label>
                        <input type="text" class="form-control" name="reg_phone">
                        <label for="reg_userprofessionlabel">Profession:</label>
                        <input type="text" class="form-control" name="reg_profession">
                        <label for="reg_userAddresslabel">Address:</label>
                        <textarea name="reg_address" cols="30" rows="=40" class="form-control"></textarea>
                        <br><br>
                        <input type="submit" class="btn btn-primary" value="Register" name="reg_submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>