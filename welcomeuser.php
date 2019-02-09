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
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body background="image.jpg">
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="collapse navbar-collapse navbar-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="./posts.php">View all posts</a>
                            </li>
                            <li>
                                <a href="./add_post.php">Add posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./catogeries.php"><i class="fa fa-fw fa-wrench"></i> Catogeries </a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Comments </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="userprofile.php"><i class="fa fa-fw fa-file"></i>Profile</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" style-left:"100px">
                      <li style="padding-right:30px"><a href="userlogout.php"><span class="glyphicon glyphicon-log-in" ></span> Logout</a></li>
                </ul>
      </div>           
      </nav>
      <br><br><br>
<div class="container">     
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7"><h1 style="font-size:60px"><?php echo "Hi ".$_SESSION['username']."! Welcome,"; ?></h1></div>
    </div>
</div>
</body>
</html>