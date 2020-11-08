<?php
// require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
// require_once ENGINE_DIR . "db.php";

function getUserById(int $id)
{
	$sql = "SELECT * FROM users WHERE id={$id}";
	return queryOne($sql);
}


function notAdmin(array $user)
{
	if ($user['title'] != 'admin') {
		redirect('/login');
	}
}

function addUser(string $login, string $password)
{
	$sql = "INSERT INTO users(login, password) VALUES ('{$login}', '{$password}')";
	execute($sql);
}

function authorizationCheck(string $path)
{
	session_start();
	if (isset($_SESSION['user_id'])) {
		redirect($path);
	}
}

function userCheck(string $login, string $password)
{
	$sql = "SELECT * FROM users 
	WHERE login = '{$login}' 
	AND password = '{$password}'";
	if ($user = queryOne($sql)) {
		$_SESSION['user_id'] = $user['id'];
		redirect('/personal');
	} else {
		echo "Не авторизованы!";
	}
}
