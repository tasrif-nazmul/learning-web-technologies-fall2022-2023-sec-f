<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "Invalid username or password. Please Check";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>


<html>
<head>
    <title>Login</title>
</head>
<body>
<center>
    <form action="loginVal.php" method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                    <img src="x.png" width="30px">company
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="login.php">Login</a> |
                    <a href="registration.php">Registration</a>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    <fieldset>
                    Username <input type="text" name="username">
                    <br>
                    Password <input type="password" name="password"><br>
                    <input type="submit" name="btn" value="Submit"/>
                    <a href="forgottenPass.php">Forgotten Password</a></td>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    Copyright @ 2017
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>