		<div class="full-content">
			<?php foreach($data as $row) : ?>
				<h1 class="header"><?=$row["title"];?></h1> 
				<div class="content"><?= $row["content"];?></div>
			<?php endforeach; ?>
		</div>

		 	<div class="btn-return">
 				<a href="./">Все новости &gt;&gt;</a>
 			</div>

		
		
	

