<?php
  
    if(isset($_POST['admin_login_submit']))
    {
        session_id("admin");
        session_start();
        $_SESSION['admin_login_successful']=true;
        $con=mysqli_connect("localhost","root","","bankdb");
        if(!$con)
            echo ("unsuccesful connection".mysqli_error($con));
        $username=$_POST['adminusername'];
        $password=$_POST['adminpassword'];
        $check_login="select * from admin_login_details where admin_username='$username' and admin_password='$password'";
        $execute_check_login=mysqli_query($con,$check_login);
        $count=0;
        while($row=mysqli_fetch_assoc($execute_check_login))
            $count++;
        if($count==1)
        {
            header("Location: welcomeadmin.php");
        }
        else
        {
            $_SESSION['admin_login_successful']=false;
            echo "<script type='text/javascript'>alert('Login unsuccessful. Try Logging again!!');location=\"user.php\"</script>";
        }
    }
    else
        header("Location: index.php");

?>