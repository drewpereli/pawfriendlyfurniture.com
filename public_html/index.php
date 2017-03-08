<?php
	define("PAGE_NAME", "index");
	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";

	//$images = preg_grep('/^([^.])/', scandir(__DIR__ . "/img/slider/"));
?>
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<h2>Mission Statement</h2>
			Our Mission Statement is simple: we <i>love</i> cats.<br/>
			We want to build furniture that's safe, sturdy and reasonable priced. Our goal is to provide a place for cats to play, nap, and hide when they feel like it. We take pride in our craftsmanship. We do what we can to please our whiskered friends, because they have given us so much. We invite you to look at our website and we hope you enjoy our trees.
		</div>
		<img class="col-md-4 hidden-sm hidden-xs img-responsive" src="img/gallery/12.jpg" />
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2>Background Information</h2>
			Paw Friendly Cat Furniture, LLC., is a "Ma &amp; Paw" business Cross Plains, Wisconsin. We have been making kittys a place to feel safe and warm, by making them high quality cat trees for over a decade.
			<br/><br/>
			Our unique features in our furniture include our heavy-duty construction and the love we put into each tree we build.
			<br/><br/>
			Each tree is unique, grown by nature and featuring beautiful markings on the trunks of the trees that only nature has created.
			<br/><br/>
			We provide several options, inculuding "standard" designs and custom orders. Custom orders and special needs are what we're all about.
			<br/><br/>
			<b>For more information on our cat trees and where they can be purchased, and how to cubmit a custom design, please <a href="contact.php">contact us</a>!</b>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2>How to Contact Us</h2>
			Please call or email us with your order or to discuss custom order options.
			<br/><br/>
			Mike &amp; Corrine Carson<br/>
			608-712-1088<br/>
			<a href="mailto:pawfriendlyfurniture@gmail.com">pawfriendlyfurniture@gmail.com</a>
		</div>
	</div>
<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>
