<?php
    session_start();
    require_once '../models/loginmodel.php';
    $username = $_POST["username"];
    $phone = $_POST["phone"];

    if(empty($username) || empty($phone)){
        if(empty($username)){
            $_SESSION["emtusername"] ="*Must provide username";
        }
        if(empty($phone)){
            $_SESSION["emtphone"] ="*Must provide the phone number";
        }
        header("location: ../views/forgetpass.php");
    }

    else{
        $user=['username'=>$username, 'phone'=>$phone];
        $status=forgetpassword($user);
        if(isset($_SESSION['user'])){
            $pass=$_SESSION['user']['password'];
            $_SESSION['password']="Your password is : {$pass}";
            header('location: ../views/login.php');
        }
        else{
            $_SESSION['password']="Invalid Username or Phone Number";
            header('location: ../views/forgetpass.php');
        }
    }
?>