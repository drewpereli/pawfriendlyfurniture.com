<?php
	define("PAGE_NAME", "our_pricing");
	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";
	require_once __DIR__ . '/../resources/templates/navbar.php';
?>
	<div class="row">
		<span class="col-xs-12 col-md-8 col-md-offset-2">
			<h2 class="col-xs-12">Base Tree Pricing</h2>
			<ul class="col-xs-12">
				<li><b>Three Level:</b> $125.00</li>
				<li><b>Four Level:</b> $160.00</li>
				<li><b>Five Level:</b> $190.00</li>
				<li><b>Six Level:</b> $230.00</li>
			</ul>
			<h2 class="col-xs-12">Bed Pricing</h2>
			<div class="col-xs-12">Bed pricing is per bed</div>
			<div class="col-xs-12">&nbsp;</div>
			<ul class="col-xs-12">
				<li><b>Scoop Bed:</b> $25.00</li>
				<li><b>18" Flat Round Bed:</b> $20.00</li>
				<li><b>24" Round Top Bed w/ Rim:</b> $55.00</li>
				<li><b>Tunnel w/ Diamond Hole:</b> $75.00</li> 
				<li><b>Extra 3/8" Sisal rope:</b> $15.00 per section</li>
			</ul>
			<div>Deliver options are available and negotiable.</div>
		</span>
	</div>

<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>