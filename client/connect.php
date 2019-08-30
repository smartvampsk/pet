<?php
	$host = 'localhost'; $db = 'pat'; $username = 'root'; $password = '';
	$pdo = new PDO('mysql:dbname='.$db.';host='.$host,$username,$password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>