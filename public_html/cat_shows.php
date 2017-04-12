<?php
	define("PAGE_NAME", "cat_shows");
	require_once __DIR__ . "/../resources/config.php";

	$p = $_POST;
	unset($_POST);
	if (isset($p["add"])){
		unset($p["add"]);
		$show = ORM::for_table("cat_shows")->create()->set($p)->save();
	}
	if (isset($p["remove"])){
		ORM::for_table("cat_shows")->find_one($p["show_id"])->delete();
	}
	if (isset($p["edit"])){
		
	}

	$shows = ORM::for_table("cat_shows")->order_by_asc("start_date")->find_many();

	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";
	require_once __DIR__ . '/../resources/templates/navbar.php'; 
?>
	<div class="row">
		<div class="col-xs-12">
			<h1>Cat Shows</h1>
			<form method="post">
				<div class="form-group">
					<label for="start_date">Start Date</label>
					<input id="start_date" name="start_date" type="date" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="end_date">End Date</label>
					<input id="end_date" name="end_date" type="date" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="start_date">Venue</label>
					<input id="venue" name="venue" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="location">Location (e.g. city, state, area)</label>
					<input id="location" name="location" class="form-control" required/>
				</div>
				<div class="form-group">
					<input type="submit" name="add" value="Add Show" class="form-control" />
				</div>
			</form>
		</div>
		<?php if (sizeof($shows) >= 1) : ?>
			<div class="col-xs-12">
				<table class="table table-responsive table-bordered">
					<?php $year = 0; ?>
					
					<?php foreach($shows as $show) : ?>
						<?php 
							$start = new DateTime($show->start_date);
							$end = new DateTime($show->end_date);
						?>
						<?php if ($start->format("Y") != $year) : ?>
							<?php $year = $start->format("Y"); ?>
							<tr><th colspan="4"><?= $year; ?></th></tr>
						<?php endif; ?>
						<tr>
							<td>
								<?php 
									echo $start->format("F jS");
									if ($start != $end)
										echo " to " . $end->format("F jS"); 
								?>
							</td>
							<td>
								<?= $show->venue; ?>
							</td>
							<td>
								<?= $show->location; ?>
							</td>
							<td>
								<form method="POST">
									<input type="hidden" name="show_id" value="<?=$show->id;?>" />
									<input type="submit" value="Remove" name="remove" class="btn btn-danger"/>
								</form>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		<?php endif; ?>
	</div>
<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>