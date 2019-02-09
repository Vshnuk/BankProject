
<?php

  session_id("admin");
  session_start();
  if($_SESSION['admin_login_successful']!=true)
      header("Location: admin.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
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
      <div class="col-sm-7"></div>
      <div class="col-sm-2"><a href="adminlogout.php" style="color:black"><u>logout</u></a></div>
    </div>
</div>
</body>
</html>