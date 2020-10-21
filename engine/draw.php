<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
$directory = ROOT_DIR . "public/src/assets/imgs";
// $imgs = scandir($dir);
$imgs = content($directory);

function content($dir)
{
	$openDir = opendir($dir);
	$arr = [];
	while ($element = readdir($openDir)) {
		if ($element != "." && $element != "..") {
			$arr[] = $element;
		}
	}
	return $arr;
	closedir($openDir);
}

function drawImg(array $arr)
{
	echo "<ul class='galary'>";
	foreach ($arr as $item) {
		echo "<li class='galary__photo'><a href='src/assets/imgs/{$item}' target='_blank'><img src='src/assets/imgs/{$item}' alt=''></a></li>";
	}
	echo "</ul>";
}

function drawImg2(array $arr)
{
	echo "<ul class='galary'>";
	foreach ($arr as $item) {
		echo "<li class='galary__photo'><a href='#{$item}' class='popup-link'><img src='src/assets/imgs/{$item}' alt=''></a></li>";
	}
	echo "</ul>";
}

function drawPopup(array $arr)
{
	foreach ($arr as $item) {
		echo 
	"<div id='{$item}' class='popup'>
		<div class='popup__body'>
			<div class='popup__content popup__content_image'>
				<a href='#header' class='popup__close close-popup'>X</a>
				<div class='popup__image'>
					<img src='src/assets/imgs/{$item}' alt=''>
				</div>
			</div>
		</div>
	</div>";
	}
}
