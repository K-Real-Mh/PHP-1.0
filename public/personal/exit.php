<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require_once ENGINE_DIR . "products.php";
require_once ENGINE_DIR . "base.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	session_start();
	$exit = post('exit');
	if($exit != null) {
		unset($_SESSION['user_id']);
		redirect('/login.php');
	}
	redirect('/login.php');
}


redirect('/login.php');