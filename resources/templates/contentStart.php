<body>
	<div id="foreground" class="container-fluid">
			<div id="header-container">
				<?php if (PAGE_NAME === "index") : 
					$captions = array(
					"Paw Friendly Cat Furniture, LLC",
					"Pawsitively Purrfect!"
					);
					$numImages = 5;
				?>
						<div id="ninja-slider-container">
							<div id="ninja-slider">
								<div class="inner">
									<ul>
										<?php 
											for ($i = 0 ; $i < $numImages ; $i++) : 
												$img = "slider" . ($i+1) . ".jpg";
												$caption = $i < sizeof($captions) ? $captions[$i] : false;
										?>
												<li>
													<a class="ns-img" href="img/slider/<?=$img;?>"></a>
													<?php if ($caption) : ?>
														<div class="caption"><?=$caption;?></div>
													<?php endif; ?>
												</li>
										<?php endfor; ?>
									</ul>
								</div>
							</div>
						</div>
				<?php elseif (PAGE_NAME !== "gallery") : ?> 
					<img class="img-responsive" src="img/headers/<?=PAGE_NAME;?>.jpg" />
				<?php endif; ?>
			</div>
		<?php require_once(__DIR__ . "/navbar.php");?>
		<div class="col-xs-12" id="main-content">