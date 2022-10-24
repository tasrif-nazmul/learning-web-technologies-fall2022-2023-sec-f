<?php 
    session_start();
    if(!isset($_SESSION['status'])){
        header('location: login.php?err=bad_request');
    }

?>

<html>
<head>
    <title>Home</title>
</head>
<body>
    <form>
        <fieldset>
            <table>
            <tr>
                    <a href="home.php">Home </a>
                    <a href="login.php">Login </a>
                    <a href="regestration.php">Registration</a></br>
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