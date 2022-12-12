
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <table width="100%" height="100%">
        <tr>
            <td>
                <center>
                    <table>
                        <tr>
                            <td>
                                <fieldset>
                                    <legend>Login</legend>
                                    <form method="POST" action="../controllers/loginValidator.php"  onsubmit="return checkAll()">
                                        <table>
                                            <tr>
                                                <td align="center">
                                                <?php
                                                    session_start();
                                                    if(isset($_SESSION["regValid"])){
                                                        echo $_SESSION["regValid"];
                                                        unset($_SESSION["regValid"]);
                                                    }
                                                    if (isset($_GET['err'])) 
                                                    {
                                                        if ($_GET['err'] == 'incorrect') 
                                                        {
                                                            echo "Incorrect id or password";
                                                        } 
                                                        if ($_GET['err'] == 'bad_request') 
                                                        {
                                                            echo "Please Login first";
                                                        } 
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Login
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" name="id" value="" id="id1" placeholder="User ID" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="password" name="password" value="" id="pass1" placeholder="Password" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="Checkbox" name="remerberme" value="rememberme" />Remember me
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit" name="" value="Login" />
                                                    <a href="registration.php">
                                                        Register
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </fieldset>
                            </td>
                        </tr>
                    </table>
                </center>
            </td>
        </tr>
    </table>
    <script>
        function checkAll()
            {  

                let id = document.getElementById('id1').value;
                let password = document.getElementById('pass1').value;

                if(id=="" || password=="")
                { 
                    alert("Must be fillup ID and Password field"); event.preventDefault(); 
                }
                
            }
    </script>
</body>

</html>

