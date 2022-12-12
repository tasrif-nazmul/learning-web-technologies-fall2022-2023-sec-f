<?php
    require_once '../models/loginmodel.php';
    require_once 'validators.php';
    $id = $_POST["id"];
    $password = $_POST["password"];
    $conpass = $_POST["conpass"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $usertype = $_POST["usertype"];

    
        $user=['id'=>$id,'name'=>$name,'password'=>$password,'usertype'=>$usertype ,'email'=>$email];
        $status=adduser($user);
        if(isset($_SESSION['registration']))
        {
            header('location:../views/login.php');
        }
        else
        {
            $_SESSION['regierr']="Registration cannot done";
        }
    
?>