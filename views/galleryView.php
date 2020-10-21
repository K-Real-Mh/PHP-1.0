<ul class="galary">
			<?php
			foreach ($gallery as $item) :
			?>
				<li class="galary__photo"><a href="/photo.php?id=<?=$item['id']?>" target="_blank"><img src="<?=$item['path']?>" alt=""></a></li>
			<? endforeach;?>
</ul>