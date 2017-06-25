<?php
	
	include "./dbconn.php";

	$sql = "SELECT COUNT(*) as count FROM cha2t WHERE `date` >= curdate();";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	$result = $result['count'];
	echo json_encode($result);

?>