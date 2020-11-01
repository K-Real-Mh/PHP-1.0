<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require_once ENGINE_DIR . "db.php";

function getProducts(array $ids = [])
{
	$where = '';
	if (!empty($ids)) {
		$in = implode(', ', $ids);
		$where = "WHERE products.id IN ($in)";
	}
	return queryAll("SELECT products.id, name, price, description, path, photo_id FROM products INNER JOIN gallery ON products.photo_id = gallery.id {$where}");
}

function getProductById(int $id)
{
	return queryOne("SELECT products.id, name, price, description, path, photo_id FROM products INNER JOIN gallery ON products.photo_id = gallery.id WHERE products.id ={$id} ");
}

function getComments($product)
{
	return queryAll("SELECT * FROM comments WHERE id_product={$product['id']}");
}

function SendComment($comment, $product)
{
	if (!empty($comment)) {
		execute("INSERT INTO comments(comment, date, id_product) VALUES ('{$comment}', CURRENT_TIMESTAMP, '{$product['id']}' )");
		redirect($_SERVER['REQUEST_URI']);
	}
}

function addImage(string $path)
{
	$sql = "INSERT INTO gallery(path) VALUES ('src/assets/imgs/{$path}')";
	return execute($sql);
}

function updateImage(string $path, int $id)
{
	if (empty($path)) {
		return null;
	}
	$sql = "UPDATE gallery SET path = 'src/assets/imgs/{$path}' WHERE id = {$id}";
	return execute($sql);
}



function updateProduct(int $id, array $data)
{
	if (empty($data)) {
		return null;
	}
	$update_fields = [];
	foreach ($data as $key => $value) {
		$value = "'$value'";
		$update_fields[] = "{$key} = {$value}";
	}
	$update_fields = implode(", ", $update_fields);

	$sql = "UPDATE products SET {$update_fields} WHERE id = {$id}";
	return execute($sql);
}

function createProduct(array $data, $lastId)
{
	if (empty($data)) {
		return null;
	}
	$sql = "INSERT INTO products(name, price, photo_id, description) 
			  VALUES ('{$data['name']}', '{$data['price']}', '{$lastId}', '{$data['description']}')";

	return execute($sql);
}
