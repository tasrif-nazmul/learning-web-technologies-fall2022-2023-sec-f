<?php
    session_start();
    $spchar = 0;
    $spchar1 = 0;
    $NewPass = $_POST["NewPassword"];
    $ConPass = $_POST["ConPassword"];
    if(isset($NewPass) && isset($ConPass))
    {
        $Password = $_POST["Password"];
        $sz = strlen($NewPass);
        for($i = 0; $i < $sz;$i++){
            if($NewPass[$i] == '@'|| $NewPass[$i] == '$' || $NewPass[$i] == '%' || $NewPass[$i] == '#'){
                $spchar1++;
            }
        }
    }
    if($spchar1 < 1 || strlen($_POST["NewPassword"]) < 8 || $NewPass != $ConPass || $Password == $NewPass){
        $_SESSION["validate"] = "INVALID New PASSWORD!";
        header("location:changepass.php");
    }
    else{
        $_SESSION["validate"] = "Password Changed";
        header("location:changepass.php");
    }
?>