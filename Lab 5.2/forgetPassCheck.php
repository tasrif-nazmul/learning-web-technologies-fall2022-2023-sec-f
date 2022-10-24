<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['ConfirmPassword'];
    
    
        echo $_POST['email'];
        echo $_POST['password'];
        echo $_POST['ConfirmPassword'];
    

    if($email == "" || $password == "" || $cpassword == ""){
        header('location: forgottenPass.php?err=null');
    }
    else if($_SESSION['user']['email']== $email)
    {
        if($password==$cpassword)
        {
            $_SESSION['user']['password'] = $password;
            header('location: login.php');
        }
        else
        {
            header('location: forgottenPass.php?err=notmatch');
        }
    }
    else{
        header('location: forgottenPass.php?err=invalid');
    }

?>