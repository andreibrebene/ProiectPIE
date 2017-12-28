<?php
session_start();
// Define database
define('dbhost', 'localhost');
define('dbuser', 'id3278032_sql_pie');
define('dbpass', 'proiectpie');
define('dbname', 'id3278032_sql_pie');
// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}
?>