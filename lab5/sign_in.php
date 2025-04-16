<?php
	$user = 'u68792'; 
	$pass = '1210453'; 
	$db = new PDO('mysql:host=localhost;dbname=u68792', $user, $pass,
	[PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); 
?>
