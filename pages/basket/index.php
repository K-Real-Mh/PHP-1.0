<?php
session_start();

if(!isset($_SESSION['user_id'])) {
	redirect('/login');
}

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
echo render('basket', ['basket' => $basket]);