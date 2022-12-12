<?php
    $name = $_REQUEST['name'];
    $name1=$name.'%';
    require_once '../models/loginmodel.php';
    $results=showallusers($name1);
    $rows=mysqli_num_rows($results);
        if($rows>0){
            echo "<table border='1'>
            <tr>
            <th colspan='4'>Users</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
            </tr>";
            while($row = mysqli_fetch_assoc($results)){
                echo "<tr><td>". $row['id']."</td><td>". $row['name']."</td><td>". $row['email']."</td><td>". $row['usertype']."</td></tr>";
            }
            echo "
            <tr>
            <td colspan='4' align='right'><a href='admindashboard.php'>Go Home</a></td>
            </tr></tabel>";
        }
        else{
            echo "No emoloyee added yet...";
        }
?>