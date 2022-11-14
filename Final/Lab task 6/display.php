<?php
    $con = mysqli_connect('localhost', 'root','','product_db');
    $sql = "select * from products";
    $result = mysqli_query($con, $sql);
    // $data = mysqli_fetch_assoc($result);
    // print_r($data);

    echo "<table border=1> 
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
                <th>EDIT & DELETE</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result)){
        echo    "<tr>
                    <td>{$data['Name']}</td>        
                    <td>{$data['BuyingPrice']}</td>        
                    <td>{$data['SellingPrice']}</td>        
                </tr>";
    }

    echo "</table>";
?>