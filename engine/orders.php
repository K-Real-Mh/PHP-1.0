<?php 

function addOrder()
{
	$sql = "INSERT INTO orders (status) VALUES ('в обработке')";
	execute($sql);
}

function addOrderProduct(int $key, int $value, int $last_id)
{
	$sql = "INSERT INTO orders_products (id_product, qty, id_order) VALUES ($key, $value, $last_id)";
	execute($sql);
}

function delOrder(int $id)
{
	$sql = "UPDATE orders SET status = 'Отменен' WHERE id = {$id}";
	execute($sql);
}

function getOrders()
{
	$sql = "SELECT * FROM orders";
	return queryAll($sql);
}

function getProductOrders(array $order)
{
	$sql = "SELECT id_product, qty FROM orders_products WHERE id_order ={$order['id']} ";
	return queryAll($sql);
}