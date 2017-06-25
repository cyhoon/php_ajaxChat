<?php
	/*include "./db_count.php";
	$count = db_count();
	$count = $count['count'];*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>익명채팅</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>

<div id="wrap">
	<h1>	익명	채팅	</h1>
	<!-- <h3 id="count"> 누적 채팅 수 :    </h3> -->
	<div class="counter">
		<!-- <span> 안녕 ~ </span><br> -->
		누적 채팅수<br><div id="count">start</div>
		오늘 채팅수<br><div id="today_count">start</div>
	</div>
	<div id="write">
		name: <input type="text" id="writer">
		content: <input type="text" id="content">
		<button type="button" id="submit">submit</button>
	</div>
	<div id="view">

	</div>
</div>
<script type="text/javascript" src="./assets/script/cyh.js"></script>
</body>
</html>