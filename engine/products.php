<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

function getProducts()
{
	return queryAll("SELECT * FROM products INNER JOIN gallery ON products.photo_id = gallery.id");
}

function getProductById(int $id)
{
	return queryOne("SELECT * FROM products INNER JOIN gallery ON products.photo_id = gallery.id WHERE products.id ={$id} ");
}

function getComments($product)
{
queryAll("SELECT * FROM comments WHERE id_product={$product['id']}");
}

function SendComment($comment, $product)
{
	if (!empty($comment)) {
		execute("INSERT INTO comments(comment, date, id_product) VALUES ('{$comment}', CURRENT_TIMESTAMP, '{$product['id']}' )");
	}
}

function addImage(string $path)
{
	$sql = "INSERT INTO gallery(path) VALUES ('src/assets/imgs/{$path}')";
	return execute($sql);
}