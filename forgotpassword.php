<?php

    if(isset($_POST['forgot_submit']))
    {
        $con=mysqli_connect("localhost","root","","bankdb");
        if(!$con)
            echo ("unsuccesful connection".mysqli_error($con));
        $email=$_POST['forgotemail'];
        $check_email="select password,Email from login_details where Email='$email'";
        $execute_check_email=mysqli_query($con,$check_email);
        $count=0;
        while($row=mysqli_fetch_assoc($execute_check_email))
        {
            $password=$row['password'];
            $count++;
        }
        if($count==1)
        {
            $sender = '27vignesh30@gmail.com';
            $recipient=$email;
            $subject = "Bank project Password";
            $message = "Your password is ".$password;
            $headers = 'From:' . $sender;
            if (mail($recipient, $subject, $message, $headers))
            {
                header("Location: forgotnext.php");
            }
            else
            {
                echo "<script type='text/javascript'>alert('Enter valid Email');location=\"forgotpassword.php\"</script>";
            }
        }
        else
        {

        }
    }
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
<br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                        <h1 style="font-size: 30px">Enter Email to reset password!</h1>
                </div>

        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="forgotemaillabel">Email :</label>
                        <input type="text" class="form-control" name="forgotemail">
                        <br>
                        <input type="submit" class="btn btn-success btn-lg" value="Send Mail" name="forgot_submit">
                        <br><br>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>