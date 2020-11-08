<?php
authorizationCheck('/personal');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$login = post('login');
	$password = hashh(post('password'));
	userCheck($login, $password);
}

echo render('login', []);
?>

