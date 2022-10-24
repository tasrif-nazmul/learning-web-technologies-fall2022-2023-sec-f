<?php 

    if(isset($_GET['err'])){
        
        if($_GET['err'] == 'null'){
            echo "All fields must be field";
        }

        else if($_GET['err'] == 'invalid'){
            echo "Password and confirm password must be same";
        }

        else if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>


<html>
<head>
    <title>Regestration</title>
</head>
<body>
    <center>
<form action="regVal.php" method="post">
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
                        <table>
                            <tr>
                                <td>
                                    Name 
                                </td>
                                <td>
                                    <input type="text" name="name"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    <input type="email" name="email"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Username 
                                </td>
                                <td>
                                    <input type="text" name="username"><br>
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
                        <fieldset>
                            <legend align="center">Gender</legend>
                            <input type="radio" name="gender" value="male"/> Male 
                            <input type="radio" name="gender" value="female"/> Female 
                            <input type="radio" name="gender" value="other"/> Other
                        </fieldset>
                        <fieldset>
                            <legend  align="center">Date of Birth</legend>
                            <input type="date" name="dob"> 
                        </fieldset>
                        
                        <br>
                        <input type="submit" name="btn" value="Submit"/>
                        <input type="reset" name="reset" placeholder="Reset">
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
    <?php
        #echo $_GET['name']." <br>";
        #echo $_GET['email']." <br>";
        #echo $_GET['username']." <br>";
        #echo $_GET['password']." <br>";
        #echo $_GET['ConfirmPassword']." <br>";
        #echo $_GET['gender']." <br>";
        #echo $_GET['dob']." <br>";
    ?>
</center>
</body>
</html>