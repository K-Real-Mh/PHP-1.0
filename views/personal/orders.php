<style>
	table {
		border-collapse: collapse;
	}

	td {
		padding: 2px 4px;
		border: 1px solid black;
	}
</style>


<?php foreach ($orders as $order) :  ?>
	<form action="/personal/changeOrder" method="post">
		<h1>Заказ №<?= $order['orderId'] ?></h1>
		<input type="hidden" value="<?= $order['orderId'] ?>" name="id">
		<p>Статус: <?= $order['status'] ?></p>
		<table>
		<?php foreach ($order['products'] as $product) :  ?>
				<tr>
					<td>
						id :<?= $product['id'] ?>
					</td>
					<td>
						<a href="product.php?id=<?= $product['id'] ?>">
							<?= $product['name'] ?>
						</a>
					</td>
					<td>
						<?= $product['qty'] ?> шт.
					</td>
					<td>
						Цена за шт. <?= $product['price'] ?>
					</td>
					<td>
						Сумма <?= $product['price'] * $product['qty'] ?>
					</td>
				</tr>
		<?php endforeach; ?>
		</table>
		<input type="submit" value="Отменить заказ">
	</form>
<?php endforeach; ?>
</form>