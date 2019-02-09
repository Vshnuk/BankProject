<?php
    
    if(isset($_POST['reg_submit']))
    {
        session_id("registration");
        session_start();
        $_SESSION['registration']=true;
        $con=mysqli_connect("localhost","root","","bankdb");
        if(!$con)
            echo ("registration unsuccessful".mysqli_error($con));
        $username=$_POST['reg_username'];
        $password=$_POST['reg_password'];
        $email=$_POST['reg_email'];
        $phone=$_POST['reg_phone'];
        $profession=$_POST['reg_profession'];
        $address=$_POST['reg_address'];
        $insert_sql="insert into login_details(username,password,Email,Phone,Profession,Address) values ('$username','$password','$email',$phone,'$profession','$address')";
        $execute_insert_query=mysqli_query($con,$insert_sql);
        if($execute_insert_query)
            header("Location: index.php");
        else
        {
            $_SESSION['registration']=false;
            header("Location: registration.php");
        }
    }
    else
    {
        header("Location: index.php");
    }
?>