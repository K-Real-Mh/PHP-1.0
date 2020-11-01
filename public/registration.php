<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "users.php";
authorizationCheck('/personal/');
include VIEWS_DIR . 'registration.php';
?>


