<html>
<head>
	<title>Change Password</title>
</head>
<body>
	<?php 
		session_start();
		if(isset($_SESSION["validate"])){
			echo $_SESSION["validate"];
			session_destroy();
		}
	?>
		<form method="post" action="changepassValidation.php" enctype="">
			<fieldset style="width: 20%;">
				<legend align="center"><b>Change Password</b></legend>
				<table>
					<tr>
						<td>Current password:</td>
						<td><input type="text" name="Password" value="" ></td>
					</tr>
					<tr>
						<td><a style="color:green;">New Password:</a></td>
						<td><input type="password" name="NewPassword" value="" ></td>
					</tr>
                    <tr>
						<td><a style="color:red;">Retype New Password:</a></td>
						<td><input type="password" name="ConPassword" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="" value="Submit">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>