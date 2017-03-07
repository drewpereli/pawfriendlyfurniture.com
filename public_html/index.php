<?php
	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";

	//$images = preg_grep('/^([^.])/', scandir(__DIR__ . "/img/slider/"));
	$captions = array(
			"Paw Friendly Cat Furniture",
			"Truly a Ma and Paw Business"
			);
	$numImages = 5;
?>
	<div id="ninja-slider-container">
		<div id="ninja-slider">
			<div class="inner">
				<ul>
					<?php 
						for ($i = 0 ; $i < $numImages ; $i++) : 
							$img = "slider" . ($i+1) . ".jpg";
							$caption = $i < sizeof($captions) ? $captions[$i] : false;
					?>
							<li>
								<a class="ns-img" href="img/slider/<?=$img;?>"></a>
								<?php if ($caption) : ?>
									<div class="caption"><?=$caption;?></div>
								<?php endif; ?>
							</li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>
	<?php require_once __DIR__ . '/../resources/templates/navbar.php'; ?>
	<div class="row">
		<div class="col-xs-12">
			<h2 class="text-center">Welcome to Paw Friendly Cat Furniture!</h2>
			<span class="col-xs-8">
				<div>We are your home for Safe-N-Staple-free furniture for your cats. Special orders & special needs are what we are all about. Plus, your cat's paws will not be hurt by staples - GUARANTEED!</div>
				<h3>Our Products</h3>
				<div>
				We sell both designs that are in our standard catalog, as well as custom designs that will compliment your cat's needs as well as your home.</div>
				<h3>Why Buy from Us</h3>
				<ul>
					<li>Safe &amp; Staple Free</li>
					<li>Your cats will never worry about sharp staples in their paws</li>
					<li>Locally made in Southern Wisconsin</li>
					<li>A portion of our profits are donated to 
						<a href="http://www.angelswish.org/">Angel's Wish</a> to help homeless animals.</li>
					<li>Saves on your furniture</li>
					<li>Hours of fun and enjoyment for your cats</li>
					<li>Heavy Duty construction</li>
					<li>Unsurpassed quality</li>
					<li>Truly a "Ma & Paw" business!</li>
				</ul>
			</span>
			<img class="col-xs-4" src="img/FullSizeR.jpg" />
		</div>
	</div>
<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>
