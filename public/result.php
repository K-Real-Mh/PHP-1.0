<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "base.php";
require_once ENGINE_DIR . "calculate.php";
$number1 = (int) post('number1');
$number2 = (int) post('number2');
$select = (string) post('select');
$result = mathOperation($number1, $number2, $select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="src/layout/styles/style.css">
	<title>Document</title>
</head>

<body>
	<div class="container">
		<?php include VIEWS_DIR . "resultCalc.php"; ?>
	</div>
</body>

</html>