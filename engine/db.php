<?php

// Проверка

function connectionCheck()
{
	global $connection;
	global $host;
	global $login;
	global $password;
	global $db;
	if (!$connection) {
		$connection = mysqli_connect($host, $login, $password, $db);
	}
}

/** Выполнение запроса без выборки */
function execute(string $query)
{
	global $connection;
	connectionCheck();
	return mysqli_query($connection, $query);
}

/** Когда в ответе строго одна строка  */
function queryOne(string $query)
{
	global $connection;
	connectionCheck();
	$res = mysqli_query($connection, $query);
	return mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
}

/** обычный селект */
function queryAll(string $query)
{
	global $connection;
	connectionCheck();
	$res = mysqli_query($connection, $query);
	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}



