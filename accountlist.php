<!DOCTYPE html>
<html>
<head>
	<title>Account List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<br><br><h1>Account List<h1><br>
	</center>
	<table class="aclist">
		<tbody class="phos">
			<tr>
				<th>
					<h3>Name</h3>
				</th>
				<th>
				</th>
			</tr>
	<? php //foreach(): ?>
		<? php //foreach(): ?>
			<tr>
				<td>
					<a href="">php-generated name</a>
				</td>
				<td>
					<form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						<input type="submit" value="Delete">
					</form>
				</td>
			</tr>
		<?php //endforeach;?>
	<?php //endforeach;?>
			<tr>
				<td>
					<form action="accountdetails.php" method="post">
						<input type="submit" value="Add Account">
					</form>
				</td>
				<td>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>