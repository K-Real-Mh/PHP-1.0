<form action="" method="post" enctype="multipart/form-data">
	<? if (!is_null($product)): ?>
	
	<input type="hidden" value="<?= $product['id'] ?>" name="product[id]">
	<input type="hidden" value="<?= $product['photo_id'] ?>" name="product[photo_id]">
	<? endif; ?>
	<div>
		<label for="">Название</label>
		<input type="text" value="<?= $product['name'] ?? '' ?>" name="product[name]">
	</div>
	<div>
		<label for="">Описание</label>
		<input type="text" value="<?= $product['description'] ?? '' ?>" name="product[description]">
	</div>
	<div>
		<label for="">Цена</label>
		<input type="text" value="<?= $product['price'] ?? 0 ?>" name="product[price]">
	</div>
	<div>
		<img src="../../<?= $product['path'] ?? '' ?>" alt="">
	<input type="file" name="image">
	</div>
	
	<input type="submit" value="<?= is_null($product) ? 'Создать' : 'Редактировать' ?>">
</form>