<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

function getGalleryImages()
{
	return queryAll("SELECT * FROM gallery ORDER BY view DESC");
}

function getGalleryImageById(int $id)
{
	return queryOne("SELECT * FROM gallery WHERE id ={$id}");
}

function incrementImageViews(int $id)
{
	return execute("UPDATE gallery SET view = view + 1  WHERE id={$id}");
}

function addImage(string $path)
{
	$sql = "INSERT INTO gallery(path) VALUES ('src/assets/imgs/{$path}')";
	return execute($sql);
}
