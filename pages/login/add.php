<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$login = post('login');
	$password = hashh(post('password'));
	addUser($login, $password);
}

redirect('/login');