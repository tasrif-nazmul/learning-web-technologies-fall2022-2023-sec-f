<?php
    session_start();
    if(!isset($_COOKIE['logstatus']))
    {
        header('location:login.php?err=bad_request');
    }
    if (isset($_GET['err'])) 
    {
        if ($_GET['err'] == 'null') 
        {
            echo "Must be filled all info";
        } 
    }
?>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <center>
        <form action="../controllers/changePassVal.php" method="POST">
            <table>
                <tr>
                    <td>
                        <input type="text" name="id" placeholder="enter your id">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="newPass" placeholder="enter new password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="newPassC" placeholder="re-type new password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Change password">
                    </td>
                </tr>
            </table>
        </form>
    </center>
    
</body>
</html>