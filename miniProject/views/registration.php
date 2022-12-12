<?php
    session_start();
    if(isset($_SESSION["regValid"])){
        echo $_SESSION["regValid"];
        unset($_SESSION["regValid"]);
    }
?>
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
                                    <legend>REGISTRATION</legend>
                                    <form method="post" action="../controllers/registrationValidator.php" onsubmit="return checkAll()">
                                        <table>
                                            <tr>
                                                <td>
                                                    <span id="error"><span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ID</td>
                                                <td>
                                                    <input onkeyup="f1()" type="text" name="id" value="" id="id1" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    <input onkeyup="passCheck()" type="password" name="password" value="" id="pass1" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>
                                                    <input onkeyup="cpassCheck()" type="password" name="conpass" value="" id="conpass1" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>
                                                    <input onkeyup="f4()" type="text" name="name" value="" id="name1" />
                                                    <p id="nameerr"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    <input onkeyup="f5()" type="text" name="email" value="" id="email1" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>User Type</td>
                                                <td>
                                                    <select onclick="f6()" name="usertype" id="usertype1">
                                                        <option value="User">User</option>
                                                        <option value="Admin">Admin</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" name="" value="Register" />
                                                    <a href="login.php">Login</a>
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
            var passError=true;
            var cPassError=true;
            function passCheck()
            {
                let password = document.getElementById('pass1').value;
                
                if(password.length<8)
                {
                    passError=true;
                    document.getElementById('error').innerHTML = "Password must be 8 charecter...";
                }
                else if(((password.split('0').length - 1)<1) && ((password.split('1').length - 1)<1) && ((password.split('2').length - 1)<1) && ((password.split('3').length - 1)<1) && ((password.split('4').length - 1)<1) && ((password.split('5').length - 1)<1) && ((password.split('6').length - 1)<1) && ((password.split('7').length - 1)<1) && ((password.split('8').length - 1)<1) && ((password.split('9').length - 1)<1))
                {
                    passError=true;
                    document.getElementById('error').innerHTML = "Use atlest one number...";
                }

                else if(((password.split('!').length - 1)<1) && ((password.split('@').length - 1)<1) && ((password.split('#').length - 1)<1) && ((password.split('$').length - 1)<1) && ((password.split('%').length - 1)<1) && ((password.split('&').length - 1)<1) && ((password.split('*').length - 1)<1))
                {
                    passError=true;
                    document.getElementById('error').innerHTML = "Use atlest one special charecter...";
                }
                
                else if(((password.split('A').length - 1)<1) && ((password.split('B').length - 1)<1) && ((password.split('C').length - 1)<1) && ((password.split('D').length - 1)<1) && ((password.split('E').length - 1)<1) && ((password.split('F').length - 1)<1) && ((password.split('G').length - 1)<1) && ((password.split('H').length - 1)<1) && ((password.split('I').length - 1)<1) && ((password.split('J').length - 1)<1) && ((password.split('K').length - 1)<1) && ((password.split('L').length - 1)<1) && ((password.split('M').length - 1)<1) && ((password.split('N').length - 1)<1) && ((password.split('O').length - 1)<1) && ((password.split('P').length - 1)<1) && ((password.split('Q').length - 1)<1) && ((password.split('R').length - 1)<1) && ((password.split('S').length - 1)<1) && ((password.split('T').length - 1)<1) && ((password.split('U').length - 1)<1) && ((password.split('V').length - 1)<1) && ((password.split('W').length - 1)<1) && ((password.split('X').length - 1)<1) && ((password.split('Y').length - 1)<1) && ((password.split('Z').length - 1)<1))
                {
                    passError=true;
                    document.getElementById('error').innerHTML = "Use atlest one upercase...";
                }
                else if(((password.split('a').length - 1)<1) && ((password.split('b').length - 1)<1) && ((password.split('c').length - 1)<1) && ((password.split('d').length - 1)<1) && ((password.split('e').length - 1)<1) && ((password.split('f').length - 1)<1) && ((password.split('g').length - 1)<1) && ((password.split('h').length - 1)<1) && ((password.split('i').length - 1)<1) && ((password.split('j').length - 1)<1) && ((password.split('k').length - 1)<1) && ((password.split('l').length - 1)<1) && ((password.split('m').length - 1)<1) && ((password.split('n').length - 1)<1) && ((password.split('o').length - 1)<1) && ((password.split('p').length - 1)<1) && ((password.split('q').length - 1)<1) && ((password.split('r').length - 1)<1) && ((password.split('s').length - 1)<1) && ((password.split('t').length - 1)<1) && ((password.split('u').length - 1)<1) && ((password.split('v').length - 1)<1) && ((password.split('w').length - 1)<1) && ((password.split('x').length - 1)<1) && ((password.split('y').length - 1)<1) && ((password.split('z').length - 1)<1))
                {
                    passError=true;
                    document.getElementById('error').innerHTML = "Use atlest one lowercase...";
                }
                
                else
                {
                    passError=false;
                    document.getElementById('error').innerHTML = "";
                }
            }
            function cpassCheck()
            {
                let ConfirmPassword = document.getElementById('conpass1').value;
                let password = document.getElementById('pass1').value;
                if(password != ConfirmPassword)
                {
                    cPassError=true;
                    document.getElementById('error').innerHTML="Same as Password";
                }
                else
                {
                    cPassError=false;
                    document.getElementById('error').innerHTML="";
                }
            }
        function checkAll()
            {  

                let id = document.getElementById('id1').value;
                let password = document.getElementById('pass1').value;
                let conpass = document.getElementById('conpass1').value;
                let name = document.getElementById('name1').value;
                let email = document.getElementById('email1').value;
                let usertype = document.getElementById('usertype1').value;

                if(id=="" || password=="" || conpass=="" || name=="" || email=="" || usertype=="")
                { 
                    alert("Must be fillup all information"); event.preventDefault(); 
                }
                else if(!passError==false)
                {
                    alert("Password error! Password should be atleast 8 charecter, 1 upercase 1 lowercase, 1 number and 1 special charecter "); event.preventDefault();
                }
                else if(!cPassError==false)
                {
                    alert("Password and confirm password must be same"); event.preventDefault();
                }
            }
        
        
    </script>
</body>

</html>