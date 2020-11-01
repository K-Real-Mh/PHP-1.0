<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require_once ENGINE_DIR . "products.php";
require_once ENGINE_DIR . "users.php";
require_once ENGINE_DIR . "base.php";
session_start();
if(!isset($_SESSION['user_id'])) {
	redirect('/login.php');
} else {
	$user = getUserById($_SESSION['user_id']);
	notAdmin($user);
}

//$product['images'] = getProductImages($id);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$product = post('product');
	if (isset($product['id'])) {
		$id = $product['id'];
		unset($product['id']);
		$photo_id = $product['photo_id'];
		uploadFile('image', IMG_DIR);
		$filename = $_FILES['image']['name'];
		array_shift($product);
		updateImage($filename, $photo_id);
		updateProduct($id, $product);

	} else {
		uploadFile('image', IMG_DIR);
		$filename = $_FILES['image']['name'];
		addImage($filename);
		$lastId = mysqli_insert_id(connectionCheck());
		createProduct($product, $lastId);
	}
	redirect($_SERVER['REQUEST_URI']);
}

$product = null;
if ($id = get('id')) {
	$product = getProductById($id);
}

include VIEWS_DIR . 'admin/products/edit.php';
