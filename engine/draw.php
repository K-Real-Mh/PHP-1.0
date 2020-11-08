<?php
function drawMenu()
{
	$menu = [
		[
			'label' => 'Каталог',
			'link' => '/'
		],
		[
			'label' => 'Корзина',
			'link' => '/basket'
		],
		[
			'label' => 'Заказы',
			'link' => '/personal/orders'
		],
		[
			'label' => 'Личный кабинет',
			'link' => '/personal'
		],
		[
			'label' => 'Админка',
			'link' => '/admin'
		],
	];

	foreach ($menu as $item) {
		echo "<li><a href=\"{$item['link']}\">{$item['label']}</a></li>";
	}
	echo "</ul>";
}
