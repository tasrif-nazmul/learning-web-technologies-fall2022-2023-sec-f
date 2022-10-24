<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "All field must be filled";
        }

        if($_GET['err'] == 'invalid'){
            echo "Invalid email";
        }

        if($_GET['err'] == 'notmatch'){
            echo "Password and Confirm password do not match";
        }
    }

?>

<html>
<head>
    <title>Forgotten Password</title>
</head>
<body>
    <form action="forgetPassCheck.php" method="post">
        <fieldset>
            <table>
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
                    
                    <table>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                <input type="email" name="email" value=""/> <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Password 
                            </td>
                            <td>
                                <input type="password" name="password"><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Confirm Password
                            </td>
                            <td>
                                <input type="password" name="ConfirmPassword"><br>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="btn" value="Submit"/>
                </tr>
                <tr>
                    <td>Copyright @ 2017</td>
                </tr>
            </table>
        </fieldset>
    </form> 

   
</body>
</html>