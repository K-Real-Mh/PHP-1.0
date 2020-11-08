<?php
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