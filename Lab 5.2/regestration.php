<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "username/password not found ...";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>


<html>
<head>
    <title>Regestration</title>
</head>
<body>

        <form method="post" action="regVal.php" enctype="">
            <fieldset>
                <legend>Regestration</legend>
                <tr>
                    <a href="home.php">Home </a>
                    <a href="login.php">Login </a>
                    <a href="regestration.php">Registration</a></br>
                </tr>
                Name: <input type="text" name="name" value=""/> <br>
                Email: <input type="email" name="email" value=""/> <br>
                Username: <input type="text" name="username" value=""/> <br>
                password: <input type="password" name="password" value=""/> <br>
                
                <input type="submit" name="btn" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>