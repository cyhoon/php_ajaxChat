<?php
	
	include "./dbconn.php";

	/*function db_count(){
		$sql = "SELECT COUNT(*) as count FROM cha2t;";
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		// return $result;
		echo json_encode($result);
	}*/

	$sql = "SELECT COUNT(*) as count FROM cha2t;";
	global $pdo;
	$stmt = $pdo->prepare($sql);
	$stmt->execute();

	$result = $stmt->fetch(PDO::FETCH_ASSOC);

	$result = $result['count'];
	// return $result;
	echo json_encode($result);

?>