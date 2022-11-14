<?php

$Name= $_POST["name"];
$BuyingPrice= $_POST["buingp"];
$SellingPrice= $_POST["sellingp"];
$display=$_POST["display"];
$row_name;

if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];
}

if($Name=="" || $BuyingPrice =="" || $SellingPrice==""  )
{

    header('location: editProducts.php?err=null');

}

else{  if($display!="yes"){$display="no";}



        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "update products set Name='{$Name}', BuyingPrice='{$BuyingPrice}', SellingPrice='{$SellingPrice}', display='{$display}' where name='{$row_name}'";
        $status = mysqli_query($con, $sql);
        
        
        if($status){
            header('location: display.php?message=update_successful');

            setcookie('row_name',$row_name,time()-60,'/');
        }else{
           echo "Update Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: display.php?err=update_failed');
        }
}
 




?>