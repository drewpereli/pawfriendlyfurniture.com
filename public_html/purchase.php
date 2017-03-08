<?php
	define("PAGE_NAME", "purchase");
	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";
	require_once __DIR__ . '/../resources/templates/navbar.php';
?>
	<div class="row">
		<div class="col-xs-12">
			<h1>Where to purchase the best cat trees</h1>
			Our cat trees can be purchased directly from us and at various pet shows in Southern Wisconsin.
			<br/><br/>
			We also sell to <a href="https://www.facebook.com/felineunderground/">Mad Cat</a> which has 3 locations in Madison, WI.
			<h2>Direct Sales</h2>
			Please <a href="contact.php">contact us</a> to obtain current prices, to order our <a href="products.php">cat trees</a>, or to <a href="youdesign.php">design a custom order</a>.
			<br/><br/>
			Please note: because of shipping costs, we are not able to ship these products. We apologize for the inconvenience. We look forward to seeing you soon!
			<h2>Pet Shows</h2>
			We have several different options available at various pet shows in Wiscnosin, as well as Illinois and Iowa, and we also welcome special orders. 
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3" id="credit-cards">
			<span class="col-xs-12 col-sm-4"><img src="img/credit_cards/master_card.png" class="img-responsive" /></span>
			<span class="col-xs-12 col-sm-4"><img src="img/credit_cards/visa.png" class="img-responsive" /></span>
			<span class="col-xs-12 col-sm-4"><img src="img/credit_cards/discover.png" class="img-responsive"/></span>
		</div>
	</div>
<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>