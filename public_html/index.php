<?php
	define("PAGE_NAME", "index");
	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";

	//$images = preg_grep('/^([^.])/', scandir(__DIR__ . "/img/slider/"));
?>
	<span class="" style="">
		<div class="row">
			<div class="col-xs-12">
				<h2>Mission Statement</h2>
				Our Mission Statement is simple: we <i>love</i> cats.<br/>
				We want to build furniture that is sturdy, cozy, and reasonably priced. Our goal is to provide a place for cats to play, nap, and hide when they feel like it. We take pride in our craftsmanship. We do what we can to please our whiskered friends, because they have given us so much. We invite you to look at our website and we hope you enjoy our trees. test test test
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h2>Background Information</h2>
				<span>
					<img class="col-xs-3 pull-right img-responsive hidden-sm hidden-xs" src="http://i.imgur.com/NZvN6Cp.jpg"/>
					Paw Friendly Furniture LLC, is a business located in Cross Plains just west of Madison

WISCONSIN. We have been building cat furniture for over a decade. The reason we started building furniture is

quite simple. We were so disappointed in paying high prices for low end cat trees that just didn’t last, due to poor

construction, and lack of pride.
					<br/><br/>
					Our cat trees are not just trees. They are built sturdy and strong, just like human furniture.
					<br/><br/>
					<b>For more information on our cat trees and where they can be purchased, and how to submit an order, please <a href="contact.php">contact us</a>!</b>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h2>How to Contact Us</h2>
				<span>
					<img class="col-xs-3 pull-left img-responsive hidden-sm hidden-xs" src="http://i.imgur.com/hkLE4tf.jpg" />
					Please call or email us with your order or to discuss order options.
					<br/><br/>
					Mike &amp; Corrine Carson<br/>
					608-712-1088<br/>
					<a href="mailto:pawfriendlyfurniture@gmail.com">
						pawfriendlyfurniture@gmail.com
					</a>
					<img src="img/logo.jpg" class="col-sm-5 hidden-xs pull-right sm-logo"/>
					<img src="img/logo.jpg" class="col-xs-6 col-xs-offset-3 visible-xs xs-logo"/>
				</span>
			</div>
		</div>
		
	</span>
<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>
