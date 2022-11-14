<?php
    $con = mysqli_connect('localhost', 'root','','product_db');
    $sql = "select Name, SellingPrice - BuyingPrice profit from products";
    $result = mysqli_query($con, $sql);
    // $data = mysqli_fetch_assoc($result);
    // print_r($data);

    echo "<table border=1> 
            <tr>
            <td colspan=4 align='center'><a href='task_A.php'>Add Product</a></td>
            </tr>
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result)){
        echo    "<tr>
                    <td>{$data['Name']}</td>        
                    <td>{$data['profit']}</td>  
                    <td> <a href ='editProducts.php?edit={$data['Name']}'>Edit</a></td>   
                    <td> <a href ='deleteProducts.php?delete={$data['Name']}'>Delete</a></td>            
                </tr>";
    }

    echo "</table>";
?>