<img src="<?= $product['path'] ?>" alt="">
<h1><?= $product['name'] ?></h1>
<h2><?= $product['price'] ?></h2>
<h2><?= $product['description'] ?></h2>
<?php
foreach ($comments as $item) :
?>
	<h3><?= $item['comment'] ?></h3>
	<p><?= $item['date'] ?></p>
<? endforeach;?>
		
		
<form action="" method="post" enctype="multipart/form-data">
	<textarea rows="10" cols="45" name="text"></textarea>
	<input type="submit">
</form>