<?php
session_start();
if(!isset($_SESSION['user_id'])) {
	redirect('/login');
}


echo render('personal/index', ['user' => getUserById($_SESSION['user_id'])]);
?>



