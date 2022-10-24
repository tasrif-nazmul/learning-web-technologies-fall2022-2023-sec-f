<?php



    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['ConfirmPassword'];
    $gender = $_POST['gender'];
    $dob =  $_POST['dob'];
    
    

    
    if($name =="" || $email == "" || $username == "" || $password == "" || $cpassword == "" || $gender == "" || $dob == ""){
        header('location: registration.php?err=null');
    }
    else if($password!=$cpassword)
    {
        header('location: registration.php?err=invalid');
    }
    else{
        $user = ['name'=> $name, 'email'=>$email, 'username'=> $username, 'password'=>$password, 'gender'=>$gender, 'dob'=>$dob];
        $_SESSION['user'] = $user;
        header('location: login.php');
    }

?>