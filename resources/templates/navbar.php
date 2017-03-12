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
		    					<a href="<?=$page;?>.php"><?=ucfirst(str_replace("_", " ", $page));?></a>
		    				</li>
		    		<?php endforeach; ?>
		    	</ul>
		    </div>
		</div>
	</nav>
</div>