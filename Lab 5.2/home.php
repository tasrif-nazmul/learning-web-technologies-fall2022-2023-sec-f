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
<center>
    <form>
        <table border="1px" width="700px" height="300px">
            <tr>
                <td><img src="x.png" width="30px">company</td>
                <td align="center"><a href="home.php">Home</a></td>
                <td align="center"><a href="logout.php">Log Out</a></td>
                <td align="center"><a href="registration.php">Regestration</a></td>
            </tr>
            <tr >
            <td colspan="4" align="center"><h2>Welcome to XCompany</h2></td>
            </tr>
            <tr>
                <td colspan="4" align="center">Copyright @ 2017</td>
            </tr>
        </table>
    </form>
    </center>

   
</body>
</html>