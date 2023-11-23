<div class="menu">
				<ul>
				<?php 
					
					foreach($poleStranek AS $stranka){
						echo "<li><a href='?id-stranky={$stranka->getId()}'>{$stranka->getMenu()}</a></li>";
					}
				?>
				</ul>
</div>
