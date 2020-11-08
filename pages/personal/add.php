<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	session_start();
	if(!isset($_SESSION['basket'])){
		redirect('/');
	}
	$order = $_SESSION['basket'];
	addOrder();
	$last_id = mysqli_insert_id(connectionCheck());
	foreach($order as $key => $value)
	{
		addOrderProduct($key, $value, $last_id);
	}
	unset ($_SESSION['basket']);
	redirect('/personal/orders');
}
redirect('/');