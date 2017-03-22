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
					//First check if refresh is needed
					$refreshURL = "https://api.imgur.com/oauth2/token";
					$refreshData = array(
							"refresh_token"=>IMGUR_REFRESH_TOKEN,
							"client_id"=>IMGUR_CLIENT_ID,
							"client_secret"=>IMGUR_CLIENT_SECRET,
							"grant_type"=>"refresh_token"
						);

					$ch = curl_init();
					curl_setopt($ch,CURLOPT_URL, $refreshURL);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch,CURLOPT_POST, count($refreshData));
					curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($refreshData));
					$response = curl_exec($ch);
					$token = json_decode($response)->access_token;
					$ch = curl_init("https://api.imgur.com/3/account/PawFriendlyFurniture/images/0");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					    'Authorization: Bearer ' . $token
					    ));
					$json = curl_exec($ch);
					curl_close($ch);
					$json = json_decode($json);
					$images = array();
					foreach ($json->data as $d){
						array_push($images, $d->link);
					}
					shuffle($images);
				?> 
				<div class="collage collage-unfinished">
				    <?php foreach ($images as $i=>$src) : ?>
			            <img 
			            	src="<?=$src;?>" 
			            	data-fullsrc="<?=$src;?>"
			            	class="img-responsive" 
			            />
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