<?php
    require_once 'db.php';
        
    function login($user){
        $con = getconnection();
        $sql = "select * from login where id='{$user['id']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }

    function adduser($user){
        $con = getconnection();
        $sql1 = "INSERT INTO `login`(`id`, `name`, `email`, `password`, `usertype`) VALUES ('{$user['id']}','{$user['name']}','{$user['email']}','{$user['password']}','{$user['usertype']}')";
        $result = mysqli_query($con, $sql1);
        
        if($result){
            return $_SESSION['registration']="Registration successfull";
            header('location: login.php');
        }
    }

    function showallusers($name){
        $con = getconnection();
        $sql = "SELECT * FROM login WHERE `name` LIKE '".$name."' ORDER BY id ASC;";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function searchbyID($user){
        $con = getconnection();
        $sql = "select * from {$user['role']} where id='{$user['id']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['name']=$user['name'];
        }
    }
    function forgetpassword($user){
        $con = getconnection();
        $sql = "select * from login where username='{$user['username']}' and phonenumber='{$user['phone']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
?>