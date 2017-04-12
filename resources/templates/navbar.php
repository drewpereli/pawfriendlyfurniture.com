<div class="navbar-container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Paw Friendly</a>
		    </div>
		    <div class="collapse navbar-collapse" id="navbar-collapse">
		    	<ul class="nav navbar-nav">
		    		<?php
		    			$pages = array("products", "you_design", "purchase", "gallery", "contact");
		    			foreach ($pages as $page) :
		    		?>
		    				<li class="<?=$page===PAGE_NAME?'active':'';?>">
		    					<?php if ($page==='gallery') : ?>
		    						<a href="<?=$page;?>.php" 
			    						class="hidden-xs hidden-sm">
			    						<?=ucfirst(str_replace("_", " ", $page));?>	
			    					</a>
		    						<a href="http://pawfriendlyfurniture.imgur.com/all/" 
		    							class="hidden-md hidden-lg" target="_blank">
			    						<?=ucfirst(str_replace("_", " ", $page));?>	
			    					</a>
		    					<?php else : ?>
		    						<a href="<?=$page;?>.php" >
			    						<?=ucfirst(str_replace("_", " ", $page));?>	
			    					</a>
		    					<?php endif; ?>
		    				</li>
		    		<?php endforeach; ?>
		    	</ul>
		    	<?php if (loggedIn()) : ?>
			    	<ul class="nav navbar-nav navbar-right">
	    		        <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="cat_shows.php">Cat Shows</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
					    			<a href="log_out.php">Log Out</a>
					    		</li>
							</ul>
						</li>
			    	</ul>
			    <?php endif; ?>
		    </div>
		</div>
	</nav>
</div>