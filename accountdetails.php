<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<?php

	$first_name = $_POST['firstName'];
	$last_name = $_POST['lastName'];
	$username = $_POST['username'];

?>

	<form method="POST" action="accountlist.php">
	<center>
		<br><br><h1>Account Details<h1><br>
	</center>
	<table class="acDetails">
		<tbody>
			<tr>
				<td>
					<h3 class="phos">First Name</h3>
				</td>
				<td>
					<input type="text" name="firstName" value="<?php echo $first_name; ?>" size="30" maxlength="128">
				</td>
			</tr>
			<tr>
				<td>
					<h3 class="phos">Last Name</h3>
				</td>
				<td>
					<input type="text" name="lastName" value="<?php echo $last_name; ?>" size="30" maxlength="128">
				</td>
			</tr>
			<tr>
				<td>
					<h3 class="phos">Username</h3>
				</td>
				<td>
					<input type="text" name="username" value="<?php echo $username; ?>" size="30" maxlength="128">
				</td>
			</tr>
			<tr>
				<td>
					<h3 class="phos">Password</h3>
				</td>
				<td>
					<input type="password" name="password" value="<?php echo $password; ?>" size="30" maxlength="128">
				</td>
			</tr>
			<tr>
				<td>
					<a href="accountlist.php"><button class="button" type="button">Back</button></a>
				</td>			
				<td>
					<input type="submit" value="Submit" name="submit">
				</td>
			</tr>
		</tbody>
	</table>
	</form>

	
</body>


</html>