<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";

	$images = preg_grep('/^([^.])/', scandir(__DIR__ . "/img/slider/"));
?>
	<div id="ninja-slider-container">
		<div id="ninja-slider">
			<div class="inner">
				<ul>
					<?php foreach ($images as $img) : ?>
						<li><a class="ns-img" href="img/slider/<?=$img;?>"></a></li>
					<?php endforeach; ?>
				</ul>
				<div class="navsWrapper">
	                <div id="ninja-slider-prev"></div>
	                <div id="ninja-slider-next"></div>
	            </div>
			</div>
		</div>
	</div>
<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>
