<?php

    session_id("user");
    session_start();
    if($_SESSION['user_login_successful']!=true)
        header("Location: user.php");
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
                <h1 style="font-size: 60px">Edit Profile Details</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <br><br>
                <form action="update_edituserprofile.php" method="POST">
                    <div class="form-group">
                        <label for="edit_useremaillabel">Email:</label>
                        <input type="text" class="form-control" name="edit_email" value="<?php echo $_SESSION['Email']?>">
                        <label for="edit_userphoneabel">Phone:</label>
                        <input type="text" class="form-control" name="edit_phone" value="<?php echo $_SESSION['Phone']?>">
                        <label for="edit_userprofessionlabel">Profession:</label>
                        <input type="text" class="form-control" name="edit_profession" value="<?php echo $_SESSION['Profession']?>">
                        <label for="edit_userAddresslabel">Address:</label>
                        <textarea name="edit_address" cols="30" rows="=40" class="form-control" ><?php echo $_SESSION['Address']?></textarea>
                        <br><br>
                        <input type="submit" class="btn btn-primary" value="Update" name="edit_submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div>
    </div>
</body>
</html>