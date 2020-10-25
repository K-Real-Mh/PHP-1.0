<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once CONFIG_DIR . "config.php";
require_once ENGINE_DIR . "db.php";
$id = $_GET['id'];
execute("UPDATE gallery SET view = view + 1  WHERE id=$id");
$photo = queryOne("SELECT * FROM gallery WHERE id = $id");
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
		<?php include VIEWS_DIR . "photoView.php"; ?>
	</div>
</body>

</html>