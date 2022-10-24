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

        <form method="post" action="loginVal.php" enctype="">
            <fieldset>
                <legend>Login</legend>
                <tr>
                    <a href="home.php">Home </a>
                    <a href="login.php">Login </a>
                    <a href="regestration.php">Registration</a></br>
                </tr>
                Username: <input type="text" name="username" value=""/> <br>
                password: <input type="password" name="password" value=""/> <br>
                <input type="submit" name="btn" value="Submit"/>
                <a href="forgottenPass.php">Forgotten Password</a>
            </fieldset>
        </form>
</body>
</html>