<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ROOT_DIR . "engine/draw.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="src/layout/styles/style.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<?php drawImg2($imgs) ?>
		<?php drawPopup($imgs) ?>
	</div>
	<script src="src/components/js/popups.js"></script>
</body>
</html>