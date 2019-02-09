<?php

    session_id("registration");
    session_start();
    session_unset();
    session_destroy();
    
    session_id("user");
    session_start();
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
                <div class="col-sm-5">
                        <h1 style="font-size: 60px">Online Banking</h1>
                </div>

        </div>
        <br><br><br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3"><u><h1><a href="admin.php" style="color:black"><b>ADMIN</b></a></h1></u></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"><u><h1><a href="user.php"style="color:black"><b>USER</b></a></h1></u></div>                
        </div>
    </div>
</body>
</html>