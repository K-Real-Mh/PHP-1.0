<ul class="galary">
			<?php
			foreach ($products as $item) :
			?>
				<li class="galary__photo">
					<a href="/product.php?id=<?=$item['id']?>">
						<img src="<?=$item['path']?>" alt="">
						<h2><?=$item['name']?></h2>
						<p><?=$item['price']?></p>
					</a>
				</li>
			<? endforeach;?>
</ul>