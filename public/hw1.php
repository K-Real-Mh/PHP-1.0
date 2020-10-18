<?php
echo "Hello, World!";
echo "<br>";
$name = "GeekBrains user";
echo "Hello, $name!";
echo "<br>";
define('MY_CONST', 100);
echo MY_CONST;
echo "<br>";
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
echo "<br>";
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";
echo "<br>";
$a = 1;
echo "$a";
echo '$a';
echo "<br>";
$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;
echo "<br>";
$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень
echo "<br>";
$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a;
echo "<br>";
$a = 0;
echo $a++;     // Постинкремент
echo ++$a;    // Преинкремент
echo $a--;     // Постдекремент
//echo ­­--$a;    // Предекремент
$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно
// Объяснить, как работает данный код: 
$a = 5;
$b = '05';
var_dump($a == $b); // Почему true? Потому, что PHP – язык с динамической типизацией, переменная b изменила свой тип данных на integer
var_dump((int)'012345'); // Почему 12345? Потому, что вручную был приведен тип integer
var_dump((float)123.0 === (int)123.0); // Почему false? Потому, что сравнение по значению и типу, типы разные
var_dump((int)0 === (int)'hello, world'); // Почему true? Потому, что сравнение по значению и типу, мы вручную приводим тип integer и текст принимает значение 0.
echo "<br>";
// Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: a = 2b = 1, . Дополнительные переменные использовать нельзя.
$a = 1;
$b = 2;
$a+=+$b-$b=$a;
var_dump($a, $b); // ответ нашел на stackoverflow но до конца не понял как это работает
