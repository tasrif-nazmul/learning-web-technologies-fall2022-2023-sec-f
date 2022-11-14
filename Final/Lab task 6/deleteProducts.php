<?php 

session_start();

	if (isset($_GET['delete'])) 
    {
		$product_name = $_GET['delete'];

        setcookie('row_name',$product_name,time()+60*60,'/');
		 
		  
	}


    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql = "select * from products where Name='{$product_name}'";
    $result = mysqli_query($con, $sql);

    $data  = mysqli_fetch_assoc($result);

    if (!isset($data))
    { 
        header('location: display.php?err=null_values');
    }
?>


<html>
<head>
    <title>Delete Product</title>

    <body>
    <fieldset>
    <legend>DELETE PRODUCT</legend>
         <table>
             
            <form method="post" action="deleteProductsVal.php" enctype=""> 
                
                <table>
                    <tr><td>Name: <?php echo $data['Name']; ?></td></tr>
                    <tr><td>Buying Price: <?php echo $data['BuyingPrice']; ?></td></tr>
                    <tr><td>Selling Price: <?php echo $data['SellingPrice']; ?></td></tr>
                    <tr><td>Displayable: <?php echo $data['Display']; ?></td></tr>
                    
                   
                    <tr><td><hr></td></tr>
                    <tr><td><input type="submit" value="Delete" ></input> </td></tr>


</form>
</table>