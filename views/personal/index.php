<h1>Приветствую <?= $user['login'] ?></h1>
	<p>Ваши права пользователя: <?= $user['title'] ?></p>

<?php
if ($user['title'] == 'admin') :
?>
<a href="../admin/products/">Админка</a>
<? endif ?>
<a href="../">Продукты</a>
<a href="../basket.php">Корзина</a>

<form action="exit.php" method="post">
<input type="submit" value="Выход" name="exit">
</form>