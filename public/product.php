<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "base.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "products.php";
$id = (int) get('id');
$product = getProductById($id);
$comment = (string) post('text');
SendComment($comment, $product);
// $comments = queryAll("SELECT * FROM comments WHERE id_product={$product['id']}");
$comments = getComments($product);
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
	<?php include VIEWS_DIR . "product.php"; ?>
	</div>
</body>

</html>