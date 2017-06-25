<?php

		include "./dbconn.php";


		global $pdo;

		$sql = "SELECT `name`, `msg` , `date` FROM `cha2t` WHERE `date` >=curdate() ORDER BY `date` DESC";

		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($result);

?>