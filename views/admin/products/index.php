<style>
	table {
		border-collapse: collapse;
	}

	td {
		padding: 2px 4px;
		border: 1px solid black;
	}
</style>
<a href="/admin/edit">Создать</a>
<table>
	<?php foreach ($products as $product) :  ?>
		<tr>
			<td>
				<?= $product['id'] ?>
			</td>
			<td>
				<a href="/admin/edit?id=<?= $product['id'] ?>">
					<?= $product['name'] ?>
				</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>