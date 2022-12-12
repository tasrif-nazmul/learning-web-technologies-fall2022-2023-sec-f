<?php
$id = $_POST['id'];
$newPass = $_POST['newPass'];
$newPassC = $_POST['newPassC'];

if($id == "" || $newPass == "" || $newPassC == "")
{
    header('location: ../views/changePass.php?err=null');
}

?>