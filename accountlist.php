<!DOCTYPE html>
<html>
<head>
	<title>Account List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
$user = "root";
$pword = "root";
$db = "WHWebApp";
$host = "localhost";
$port = "27583";

$link = mysqli_init();
if (!$link) {
	die('mysqli_init failed');
}
$mysqli = mysqli_real_connect(
   $link,
   $host,
   $user,
   $pword,
   $db,
   $port
);
if (!$mysqli) {
	die('Connect Error: ' . mysqli_connect_error());
}

$isupdate = $_POST('isupdate');
if ($isupdate != null && $isupdate == 1) {
	$stmt = "";
}

?>
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
					<form action="accountdetails.php" method="POST">
						<input type="hidden" name="param1" value="<?php //account id num here?>">
						<a href="#" onclick="this.parentNode.submit()">Firstname Lastname</a>
					</form>
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
