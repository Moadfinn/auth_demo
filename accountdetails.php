<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	include 'database.php';
	$pdo = Database::connect();
	$sql = 'SELECT * FROM accounts ORDER BY id DESC';


	$first_name = $_POST['firstName'];
	$last_name = $_POST['lastName'];
	$username = $_POST['username'];

?>
	<center>
		<br><br><h1>Account Details<h1><br>
	</center>
	<!-- List of accounts -->
	<table class="aclist">
		<tbody class="phos">
			<tr>
				<th>
					<h3>Name</h3>
				</th>
				<th>
				</th>
			</tr>
	<? php foreach($pdo->//I STOPPED RIGHT HERE
//https://www.startutorial.com/articles/view/php-crud-tutorial-part-1
//https://www.w3schools.com/php/php_mysql_connect.asp

	): ?>
		<? php //foreach(): ?>
			<tr>
				<td>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
						<input type="hidden" name="param1" value="<?php //account id num here?>">
						<a href="#" onclick="this.parentNode.submit()">Firstname Lastname</a>

				</td>
				<td>
						<input type="submit" value="Delete">
					</form>
				</td>
			</tr>
		<?php //endforeach;?>
	<?php //endforeach;?>
		</tbody>
	</table>
	<form method="POST" action="accountlist.php">
	<table class="aclist">
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
					<input type="hidden" value="1" name="isupdate">
					<input type="submit" value="Submit" name="submit">
				</td>
			</tr>
		</tbody>
	</table>
	</form>


</body>


</html>
