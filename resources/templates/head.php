<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Paw Friendly Furniture, LLC</title>
	<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<link href="bootstrap/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" />

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!--
	<link href="collage_plus/collage_plus.css" type="text/css" rel="stylesheet" />
	<script src="collage_plus/jquery.collagePlus.min.js"></script>-->

	
	<link href="galereya/galereya/jquery.galereya.css" type="text/css" rel="stylesheet" />
	<script src="galereya/galereya/jquery.galereya.min.js"></script>


	<link href="css/global.css" type="text/css" rel="stylesheet" />
	<link href="css/navbar.css" type="text/css" rel="stylesheet" />
	<link href="css/ninja-slider.css" type="text/css" rel="stylesheet" />
	<script src="js/ninja-slider.js"></script>
	<?php if (file_exists(__DIR__ . "/../../public_html/css/" . PAGE_NAME . ".css")) : ?>
		<link href="css/<?=PAGE_NAME;?>.css" type="text/css" rel="stylesheet" />
	<?php endif; ?>
	<script>
		$(()=>{
			function textNodesUnder(node){
			  var all = [];
			  for (node=node.firstChild;node;node=node.nextSibling){
			    if (node.nodeType==3) all.push(node);
			    else all = all.concat(textNodesUnder(node));
			  }
			  return all;
			}
			setTimeout(()=>{
				var nodes = textNodesUnder(document);
				for (var i in nodes){
					//console.log(nodes[i].textContent);
					if (nodes[i].textContent == "Ninja Slider trial version")
						nodes[i].parentNode.removeChild(nodes[i]);
				}
			}, 1);
		});

		$(window).on("load", ()=>{
			$('.collage').galereya({
				spacing: 0,
				disableSliderOnClick: true
			}).removeClass("collage-unfinished");
			$(".galereya-cell-overlay").off();
		})

		
	</script>
</head>