<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "products.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "users.php";
require_once ENGINE_DIR . "base.php";

session_start();
if(!isset($_SESSION['user_id'])) {
	redirect('/login.php');
}

$user = getUserById($_SESSION['user_id']);

include VIEWS_DIR . 'personal/index.php';
?>



