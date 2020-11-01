<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "products.php";
require_once ENGINE_DIR . "users.php";
require_once ENGINE_DIR . "base.php";
$products = getProducts();
session_start();
if(!isset($_SESSION['user_id'])) {
	redirect('/login.php');
} else {
	$user = getUserById($_SESSION['user_id']);
	notAdmin($user);
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
		<?php include VIEWS_DIR . 'admin/products/index.php'; ?>
	</div>
</body>

</html>