<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	session_start();
	$exit = post('exit');
	if($exit != null) {
		unset($_SESSION['user_id']);
		redirect('/login');
	}
	redirect('/login');
}


redirect('/login');