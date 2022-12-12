<?php
    session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:login.php?err=bad_request');
    }
?>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <center>
        <h1>Welcome <?php if(isset($_SESSION['user']['name'])) echo $_SESSION['user']['name'];?>!</h1>
        <h3><a href="profile.php">Profile</a></h3>
        <h3><a href="changepassword.php">Change Password</a></h3>
        <h3><a href="viewusers.php">View User</a><br></h3>
        <h3><a href="../controllers/logout.php">Logout</a></h3>
    </center>
    
</body>
</html>