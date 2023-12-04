<?php
	define("BASEURL", "http://localhost/Web");
	define("BASEPATH", $_SERVER["DOCUMENT_ROOT"]."/Web");
	function connect($host, $db, $user, $password) {
			$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
		try {
			$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
			return new PDO($dsn, $user, $password, $options);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	return define("DB", connect('localhost', 'si', 'root', ''));
?>