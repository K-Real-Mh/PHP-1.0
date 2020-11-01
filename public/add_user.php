<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require_once ENGINE_DIR . "products.php";
require_once ENGINE_DIR . "base.php";
require_once ENGINE_DIR . "users.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$login = post('login');
	$password = hashh(post('password'));
	addUser($login, $password);
}

redirect('login.php');