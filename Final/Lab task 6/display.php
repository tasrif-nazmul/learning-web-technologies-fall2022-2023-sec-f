<?php
    session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <table border='2'>
        <tr><td><a href="task_A.php">Add Products</a></td></tr>
        <tr><td><a href="task_B.php">Display</a></td></tr>
        <tr><td><a href="search.php">Search</a></td></tr>
    </table>
</body>
</html>