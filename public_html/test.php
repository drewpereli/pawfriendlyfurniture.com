<?php
	define("PAGE_NAME", "about");
	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";
	require_once __DIR__ . '/../resources/templates/navbar.php';
?>
<?php
	echo "working....";
	$dir = __DIR__ . "/img/gallery";
	//$images = glob($dir, "*.jpg");
	//$handle = opendir(dirname(realpath(__FILE__)).'/img/');
	$handle = opendir(__DIR__ .'/img/gallery/');
	$images = array();
	while($file = readdir($handle)){
		if($file !== '.' && $file !== '..'){
			array_push($images, $file);
		}
	}
	?> <div class="collage"><?php
	$height = round(sizeof($images) / 2);
	$i = 0;
	echo "<div class='col-xs-6'>";
    foreach ($images as $file){
        if($file !== '.' && $file !== '..'){
            echo "<img src='img/gallery/$file' class='img-responsive' />";
        }
        $i++;
        if ($i == $height){
        	echo "</div><div class='col-xs-6'>";
        }
    }
    ?></div></div>
<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>