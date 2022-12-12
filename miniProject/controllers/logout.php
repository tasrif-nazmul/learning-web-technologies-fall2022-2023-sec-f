<?php
    session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location: index.html');
    }
    setcookie('logstatus', 'true', time()-3600, '/');
    unset($_SESSION['user']);
    header('location: ../views/login.php');
?>