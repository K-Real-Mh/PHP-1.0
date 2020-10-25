<form action="/result.php" method="post" enctype="multipart/form-data">
	<label for="number1">Число 1</label>
	<input type="text" name="number1">
	<label for="number2">Число 2</label>
	<input type="text" name="number2">
	<select name="select">
		<option value="addition">Сложить</option>
		<option value="subtraction">Вычесть</option>
		<option value="multiplication">Умножить</option>
		<option value="division">Поделить</option>
	</select>
	<input type="submit">
</form>