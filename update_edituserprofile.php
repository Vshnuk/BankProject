<?php
    
    if(isset($_POST['edit_submit']))
    {
        session_id("user");
        session_start();
        $_SESSION['user_login_successful']=true;
        $con=mysqli_connect("localhost","root","","bankdb");
        if(!$con)
            echo ("registration unsuccessful".mysqli_error($con));
        $username=$_SESSION['username'];
        $email=$_POST['edit_email'];
        $phone=$_POST['edit_phone'];
        $profession=$_POST['edit_profession'];
        $address=$_POST['edit_address'];
        $update_sql="update login_details set Email='$email',Phone=$phone,Profession='$profession',Address='$address' where username='$username'";
        $execute_update_query=mysqli_query($con,$update_sql);
        if($execute_update_query)
        {
            $_SESSION['Email']=$email;
            $_SESSION['Phone']=$phone;
            $_SESSION['Profession']=$profession;
            $_SESSION['Address']=$address;
            header("Location: userprofile.php");
        }
        else
        {
            header("Location: edituserprofile.php");
        }
    }
    else
    {
        header("Location: edituserprofile.php");
    }
?>