<?php
// 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
// если $a и $b положительные, вывести их разность;
// если $а и $b отрицательные, вывести их произведение;
// если $а и $b разных знаков, вывести их сумму;
$a = -2;
$b = 5;
$result = null;

if ($a >= 0 && $b >= 0) {
	$result = $a - $b;
} elseif ($a < 0 && $b < 0) {
	$result = $a * $b;
} elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
	$result = $a + $b;
}
echo "$result <br>";

//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

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
	return $arg1 / $arg2;
}

$result = addition($a, $b);
echo "$result <br>";

$result = subtraction($a, $b);
echo "$result <br>";

$result = multiplication($a, $b);
echo "$result <br>";

$result = division($a, $b);
echo "$result <br>";

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

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
			return "Что-то пошло не так";
	};
}

$result = mathOperation($a, $b, "addition");
echo "$result <br>";

$result = mathOperation($a, $b, "subtraction");
echo "$result <br>";

$result = mathOperation($a, $b, "multiplication");
echo "$result <br>";

$result = mathOperation($a, $b, "division");
echo "$result <br>";

$result = mathOperation($a, $b, "умножай");
echo "$result <br>";

// 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
//  РЕШЕНИЕ: см. файл "hw1.4.php"

// 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power(int $val, int $pow): int
{
	$pow = round(abs($pow));
	if ($pow == 1) {
		return $val;
	}
	return $val * power($val, $pow - 1);
}

$result = power($a, $b);
echo "$result <br>";

// 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
// 22 часа 15 минут
// 21 час 43 минуты

function timeGet($numb, $time)
{
	if ($time == "hours") {
		$a = " часов";
		$b = " час";
		$c = " часа";
	} elseif ($time == "minutes") {
		$a = " минут";
		$b = " минута";
		$c = " минуты";
	} else {
		echo "Что-то пошло не так";
	}

	if (($numb > 4 && $numb < 21) || ($numb % 10 > 4) || ($numb % 10 == 0)) {
		return "$numb $a";
	} elseif ($numb % 10 == 1) {
		return "$numb $b";
	} else {
		return "$numb $c";
	}
}

function getTime()
{
	$hour = timeGet(date("H"), "hours");
	$minute = timeGet(date("i"), "minutes");
	return "Текущее время: $hour $minute";
}

$result = getTime();
echo "$result <br>";
