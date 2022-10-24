<?php 
    session_start();
    if(!isset($_SESSION['status'])){
        header('location: login.php?err=bad_request');
    }

?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <form>
        <fieldset>
            <table>
            <tr>
                    <a href="eashboard.php">Dashboard </a> </br>
                    <a href="login.php">View Profile </a></br>
                    <a href="regestration.php">Edit Profile</a></br>
                <tr>
                    <td><h2>Welcome to xCompany</h2></td>
                </tr>
                <tr>
                    <td>Copyright @ 2017</td>
                </tr>
            </table>
        </fieldset>
    </form> 

   
</body>
</html>