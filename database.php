<?php

private static $user = 'root';
private static $pword = 'root';
private static $db = 'whwebapp';
private static $host = 'localhost';
private static $port = '27583';

private static $dbc = null;

public function _construct() {
	die('Init function is not allowed');
}

public static function connect() {
	//one connection only
	if (null == self::$dbc) {
		try {
			self::$dbc = new PDO("mysql:host=$host;dbname=$db", $user, $pword);
		}
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	return self::$dbc;
}

public static function disconnect() {
	self::$dbc = null;
}

?>
