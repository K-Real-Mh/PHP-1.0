<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "users.php";
authorizationCheck('/personal/');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$login = post('login');
	$password = hashh(post('password'));
	userCheck($login, $password);
}

include VIEWS_DIR . 'login.php';
?>

