<?php
function addition(int $arg1, int $arg2): int
{
	return $arg1 + $arg2;
}

function subtraction(int $arg1, int $arg2): int
{
	return $arg1 - $arg2;
}

function multiplication(int $arg1, int $arg2): int
{
	return $arg1 * $arg2;
}

function division(int $arg1, int $arg2): int
{
	if($arg2 != 0) {
		return $arg1 / $arg2;
	}
	return null;
}

function mathOperation(int $arg1, int $arg2, $operation)
{
	switch ($operation) {
		case "addition":
			return addition($arg1, $arg2);
			break;
		case "subtraction":
			return subtraction($arg1, $arg2);
			break;
		case "multiplication":
			return multiplication($arg1, $arg2);
			break;
		case "division":
			return division($arg1, $arg2);
			break;
		default:
			return false;
	};
}