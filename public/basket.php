<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "base.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "products.php";

session_start();
$basket = [];
if (!empty($_SESSION['basket'])) {
	$productsIds = array_keys($_SESSION['basket']);
	$products = getProducts($productsIds);
	foreach($products as $product)
	{
		$basket[] = [
			'product' => $product,
			'qty' => $_SESSION['basket'][$product['id']]
		];
	}
}
include VIEWS_DIR . "basket.php";
