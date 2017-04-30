<div class="news">
<h1 class="header">Новости</h1>
	<?php foreach ($data as $row): ?>
 		<div class="date"><?=date("d.m.Y", $row['idate']);?></div>
		<div class="title"><a href="./view.php?id=<?= $row['id'];?>"><?=$row['title']?></a></div>
		<div class="announce"><?=$row['announce']?><br><br></div>
 	<?php endforeach; ?>
</div>
 




	<div class="pages">
	<h3>Страницы:</h3>
		<?php for($i = 1; $i <= $count_of_pages; $i++): ?>
 			<div class="btn-pages">
 				<?php if( $_GET['page'] == $i ): ?>
 					<div class="btn-page-selected"><a href="./news.php?page=<?=$i?>"><?=$i?></a></div>
 				
 			<?php else : ?>
 				<a href="./news.php?page=<?=$i?>"><?=$i?></a>
 			<?php endif; ?>
 			</div>
 		<?php endfor; ?>
 
	</div>

 	


