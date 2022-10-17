<?php
    session_start();
    $spchar = 0;
    if(isset($_POST["Id"]) && isset($_POST["Password"])){
        $Password = $_POST["Password"];
        $Name = $_POST["Id"];
        $sz = strlen($Password);
        for($i = 0; $i < $sz;$i++){
            if($Password[$i] == '@'|| $Password[$i] == '$' || $Password[$i] == '%' || $Password[$i] == '#'){
                $spchar++;
            }
        }
        $sz = strlen($Name);
        $spchar1 = 0;
        for($i = 0; $i < $sz;$i++){
            if($Name[$i] != '.'&& $Name[$i] != '_' && $Name[$i] != '-' && !ctype_alnum($Name[$i])){
                $spchar1++;
            }
        }
    }
    if(strlen($_POST["Id"]) < 2 || $spchar1 > 0 || strlen($_POST["Password"]) < 8 || $spchar < 1){
        $_SESSION["validate"] = "INVALID USERNAME or PASSWORD!";
        header("location:login.php");
    }
    else{
        $_SESSION["validate"] = "Login sucsess";
        header("location:login.php");
    }
?>