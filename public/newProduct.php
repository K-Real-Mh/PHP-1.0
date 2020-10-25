<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "base.php";
require_once ENGINE_DIR . "files.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "products.php";

$name = (string) post('name');
$price = (int) post('price');
$description = (string) post('description');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	uploadFile('image', IMG_DIR);
	$filename = $_FILES['image']['name'];
	addImage($filename);
	$lastId = mysqli_insert_id(connectionCheck());
	execute("INSERT INTO products(name, price, photo_id, description) VALUES ('{$name}', '{$price}', '{$lastId}', '{$description}')" );
}

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
	<?php include VIEWS_DIR . "newProduct.php"; ?>
	</div>
</body>

</html>