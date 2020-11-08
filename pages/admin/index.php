<?php
session_start();
if(!isset($_SESSION['user_id'])) {
	redirect('/login');
} else {
	$user = getUserById($_SESSION['user_id']);
	notAdmin($user);
}

echo render('admin/products/index', ['products' => getProducts()]);
?>

