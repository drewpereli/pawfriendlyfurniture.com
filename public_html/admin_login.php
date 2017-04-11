<?php
	define("PAGE_NAME", "admin_login");
	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";
	require_once __DIR__ . '/../resources/templates/navbar.php'; 
?>

<div class="row">
	<div class="col-xs-12">
		<h1>Admin Log In</h1>
		<form>
			<div class="form-group">
				<label for="name">Name</label>
				<input id="name" name="name" class="form-control"/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input id="password" name="password" class="form-control"/>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Log In" class="form-control"/>
			</div>
		</form>
	</div>
</div>

<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>

