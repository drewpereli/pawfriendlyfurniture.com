<?php
	define("PAGE_NAME", "gallery");
	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";
	require_once __DIR__ . '/../resources/templates/navbar.php';
?>
	<div class="row">
		<div class="col-xs-12">
			<div id="spinner" class="col-xs-12 col-md-4 col-md-offset-4 text-center">
				<img src="img/spinner.gif" class=""/>
				<div>Loading images...</div>
			</div>
			<div id="gallery" class="">
				<?php
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
					shuffle($images);
				?> 
				<div class="collage collage-unfinished">
				    <?php foreach ($images as $file) :
				        if($file !== '.' && $file !== '..') : ?>
				            <img 
				            	src="img/gallery/<?=$file;?>" 
				            	data-fullsrc="img/gallery/<?=$file;?>"
				            	class="img-responsive" 
				            />
				        <?php endif;?>
				    <?php endforeach; ?>
			    </div>
			</div>
			<script>
				$(window).on("load", function(){
					$("#spinner").remove();
				});
			</script>
		</div>
	</div>
<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>