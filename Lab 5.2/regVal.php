<?php
    session_start();
    $email = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    if($_name =='name' || $_email == 'email' || $username == "" || $password == "" || $email == ""){
        header('location: regestration.php?err=null');
    }else{
        $user = ['name'=> $name, 'email'=>$email, 'username'=> $username, 'password'=>$password, 'email'=>$email];
        $_SESSION['user'] = $user;
        header('location: login.php');
    }

?>