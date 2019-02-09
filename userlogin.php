<?php

    
    if(isset($_POST['login_submit']))
    {
        session_id("user");
        session_start();
        $_SESSION['user_login_successful']=true;
        $con=mysqli_connect("localhost","root","","bankdb");
        if(!$con)
            echo ("unsuccesful connection".mysqli_error($con));
        $username=$_POST['username'];
        $password=$_POST['password'];
        $check_login="select username,password,Email,Phone,Profession,Address,acc_creation_date from login_details where username='$username' and password='$password'";
        $execute_check_login=mysqli_query($con,$check_login);
        $count=0;
        while($row=mysqli_fetch_assoc($execute_check_login))
        {
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
            $_SESSION['Email']=$row['Email'];
            $_SESSION['Phone']=$row['Phone'];
            $_SESSION['Profession']=$row['Profession'];
            $_SESSION['Address']=$row['Address'];
            $_SESSION['acc_creation_date']=$row['acc_creation_date'];
            $count++;
        }
        
        if($count==1)
        {
            header("Location: welcomeuser.php");
        }
        else
        {
            $_SESSION['user_login_successful']=false;
            echo "<script type='text/javascript'>alert('Login unsuccessful. Try Logging again!!');location=\"user.php\"</script>";
        }
    }
    else
        header("Location: user.php");

?>