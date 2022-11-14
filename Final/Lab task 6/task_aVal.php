<?php
    session_start();
    $name=$_POST['name'];
    $buingp=$_POST['buingp'];
    $sellingp=$_POST['sellingp'];

    if(empty($name) || empty($buingp) || empty($sellingp)){
        $_SESSION['err']="All must be filled up";
        header('location: task_A.php');
    }
    else{
        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        if(empty($_POST['display'])){
            $display="No";
        }
        else{
            $display="Yes";
        }
        $sql1 ="INSERT INTO `products`(`Name`, `BuyingPrice`, `SellingPrice`, `Display`) VALUES ('{$name}','{$buingp}','{$sellingp}','{$display}')";
        $result1 = mysqli_query($con, $sql1);
        if($result1>0){
            $_SESSION['msg']="Add successful<br>";
            header('location: display.php');
        }
        else{
            $_SESSION['msg']="Add is not successful<br>";
            header('location: task_A.php');
        }
    }
?>