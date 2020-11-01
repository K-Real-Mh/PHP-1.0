<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require_once ENGINE_DIR . "products.php";
require_once ENGINE_DIR . "base.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$productId = post('id');
	$productQty = post('qty');
	session_start();
	if(isset($_SESSION['basket'][$productId]))
	{
		$_SESSION['basket'][$productId] += $productQty;
	} else {
		$_SESSION['basket'][$productId] = $productQty;
	}
}


redirect($_SERVER['HTTP_REFERER']);