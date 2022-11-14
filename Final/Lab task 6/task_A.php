<?php
    session_start();
    if(isset($_SESSION['err']))
    {
        echo $_SESSION['err'];
        unset($_SESSION['err']);
    }
?>
<html>
    <head>
        <title>Add Product</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <form method="post" action="task_aVal.php">
                        <fieldset>
                            <legend><b>ADD PRODUCT</b></legend>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <input type="text" name="name" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Buing Price</td>
                                    <td>
                                        <input type="number" name="buingp" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Selling Price</td>
                                    <td>
                                        <input type="number" name="sellingp" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="checkbox" name="display" value="Yes">Display</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="" value="Save" />
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>