<?php
	define("PAGE_NAME", "admin_login");
	require_once __DIR__ . "/../resources/config.php";
	//If we're trying to log in, process data
	$p = $_POST;
	unset($_POST);
	
	if (isset($p["submit"])){
		$user = ORM::for_table("users")->where("name", $p['name'])->findOne();
		if (!$user){
			$flasher->danger = "Invalid username.";
		}
		else{
			if (!password_verify($p["password"], $user->password_hash)){
				$flasher->danger = "Incorrect password.";
				unset($p["password"]);
			}
			else{
				//Log in the user
				$flasher->success = "You are now logged in.";
				logIn($user->id);
				header("Location: /admin_panel.php");
				die();
			}
		}
	}

	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";
	require_once __DIR__ . '/../resources/templates/navbar.php'; 
?>
<div class="row">
	<div class="col-xs-12">
		<?php if ($flasher->hasAny()) : ?>
			<?php $flash_messages = $flasher->getAll(); ?>
			<div class="flash-messages">
				<?php foreach($flash_messages as $type=>$message) : ?>
					<div class="col-xs-12 alert alert-<?=$type;?> alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						</button>
						<?=$message;?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<h1>Admin Log In</h1>
		<form method="POST">
			<div class="form-group">
				<label for="name">Name</label>
				<input 
					id="name" 
					name="name" 
					class="form-control"
					value="<?=isset($p['name'])?$p['name']:'';?>"
				/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input id="password" name="password" type="password" class="form-control"/>
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

