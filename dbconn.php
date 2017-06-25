<?php
	
	// DB SETTING
	$host = "127.0.0.1";
	$db_id = "root";
	$db_pw = "";
	$db = "chatting";

	try{
		$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$db_id,$db_pw);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		echo $e->getMessage();
	}

?>