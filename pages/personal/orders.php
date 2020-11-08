<?php
$getOrders =  getOrders();
foreach ($getOrders as $order) {
	$productOrder = getProductOrders($order);

	$products = [];

	foreach ($productOrder as $product) {
		$getProduct = getProductById($product['id_product']);
		$products[] = [
			'id' => $getProduct['id'],
			'name' => $getProduct['name'],
			'price' =>  $getProduct['price'],
			'qty' => $product['qty']
		];
	}

	$orders[] = [
		'orderId' => $order['id'],
		'status' => $order['status'],
		'products' => $products
	];
}

echo render('personal/orders', ['orders' => $orders]);