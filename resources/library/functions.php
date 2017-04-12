<?php

	function logIn($id){
		$_SESSION["user_id"] = $id;
	}

	function logOut($id){
		unset($_SESSION["user_id"]);
	}

	function loggedIn(){
		return isset($_SESSION["user_id"]);
	}

?>