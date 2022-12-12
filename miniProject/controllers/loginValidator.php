<?php
    require_once '../models/loginmodel.php';
    $uid = $_POST["id"];
    $password = $_POST["password"];
    
    
        $user=['id'=>$uid, 'password'=>$password];
        $status=login($user);
    if($status)
    {
        if(isset($_SESSION['user']))
        {
            $role=$_SESSION['user']['usertype'];
            
            setcookie('logstatus', 'true', time()+3600, '/');
            if($role=="Admin")
            {   
                header('location: ../views/admindashboard.php');
            }
            if($role=="User")
            {
                header('location: ../views/userdashboard.php');
            }
        }
    }
        else
        {
            header('location: ../views/login.php?err=incorrect');
        }
    
?>