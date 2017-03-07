<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Paw Friendly Furniture, LLC</title>
	<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link href="https://bootswatch.com/cerulean/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<!-- bootstrap side nav bar -->
	<!--
	<link href="https://raw.githubusercontent.com/samrayner/bootstrap-side-navbar/gh-pages/assets/stylesheets/navbar-fixed-side.css" type="text/css" rel="stylesheet" />
	-->

	<link href="css/global.css" type="text/css" rel="stylesheet" />
	<link href="css/navbar.css" type="text/css" rel="stylesheet" />
	<link href="css/ninja-slider.css" type="text/css" rel="stylesheet" />
	<script src="js/ninja-slider.js"></script>
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
	</script>
</head>