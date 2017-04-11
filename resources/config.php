<?php
	require_once "library/vendor/autoload.php";
	require_once "secrets.php";
	$noHeader = array("admin_login", "admin_panel");

	ORM::configure('mysql:host=localhost;dbname=paw_friendly_db');
	ORM::configure('username', DB_USER);
	ORM::configure('password', DB_PASSWORD);
?>