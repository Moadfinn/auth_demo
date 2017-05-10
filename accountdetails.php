<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<?php

	$first_name = $_POST['firstName'];

?>

	<form method="POST" action="account_edit.php">
	<center>
		<br><br><h1>Account Details<h1><br>
	</center>
	<table class="acDetails">
		<tbody>
			<tr>
				<td>
					<h3 class="phos">First Name</h3>
					<input type="text" name="firstName" value="<?php echo $first_name; ?>" size="30" maxlength="128">
				</td>
			</tr>
		</tbody>
	</table>
	First Name
	<input type="text" name="firstName" value="<?php echo $first_name; ?>">
	<input type="submit" value="Submit" name="submit">
	</form>

	
</body>


</html>