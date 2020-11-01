<?php
function get(string $name)
{
	if (isset($_GET[$name])) {
		return $_GET[$name];
	}
	return null;
}

function post(string $name)
{
	if (isset($_POST[$name])) {
		return $_POST[$name];
	}
	return null;
}

function redirect(string $url)
{
	header("Location: {$url}");
}

function hashh(string $string)
{
	return md5($string . 'd5f8');
}
