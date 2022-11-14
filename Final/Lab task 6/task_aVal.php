<?php
    session_start();
    $name=$_POST['name'];
    $buingp=$_POST['buingp'];
    $sellingp=$_POST['sellingp'];
    $display=$_POST['display'];

    if(empty($name) || empty($buingp) || empty($sellingp))
    {
        $_SESSION['err']="All must be filled up";
        header('location: task_A.php');
    }
    
        
    else if(empty($display))
    {
            header('location: display.php');
    }
    else if($display == 'Yes')
    {
        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql1 ="INSERT INTO `products`(`Name`, `BuyingPrice`, `SellingPrice`, `Display`) VALUES ('{$name}','{$buingp}','{$sellingp}','{$display}')";
        $result1 = mysqli_query($con, $sql1);
        if($result1>0){
            $_SESSION['msg']="Add successful<br>";
            header('location: display.php');
        }

    }
        
    
?>