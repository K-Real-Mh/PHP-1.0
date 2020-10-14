<?php
$h1 = "Заголовок";
$title = "Привет";
$year = date('Y');
$menu = ['One', 'two', 'three', ['1', '2', '3']];
?>

<head>
	<title>
		<?php echo $title; ?>
	</title>
</head>

<body>
	<h1><?php echo $h1; ?></h1>
	<?php echo $year; ?>
	<ul>
	<?php 
	foreach($menu as $value) {
		if (is_array($value)) {
			echo "<ul>";
			foreach($value as $intValue) {
				echo "<li>$intValue</li>";
			}
			echo "</ul>";
		} else {
			echo "<li>$value</li>";
		}
	}     
	?>
	</ul>
</body>

