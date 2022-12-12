<?php
    session_start();
    $host="localhost";
    $dbusername="root";
    $dbpass="";
    $dbname="mini_project";
    
    function getconnection(){
        global $host;
        global $dbusername;
        global $dbpass;
        global $dbname;
        return $con=mysqli_connect($host,$dbusername,$dbpass,$dbname);
    }
?>