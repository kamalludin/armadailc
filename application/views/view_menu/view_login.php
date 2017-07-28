<!DOCTYPE html>
<html>
<head>
	<title>Login ILC</title>
</head>
<body>
	<div align="center">
		<h1>Login<br/> PT Indah Cargo Logistik</h1>
		<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Login"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>