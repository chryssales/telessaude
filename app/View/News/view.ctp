<div class="content">
	<div class="news view">
	<div class="newsHeading"><?php echo h($news['News']['title']); ?></div>
	<div class="newsDate"><?php echo h($this->Time->format("d/m/y",$news['News']['date'])); ?></div>
	<div class="newsBody"><?php echo $news['News']['body']; ?></div>
	<div class="newsSource">Fonte: <?php echo h($news['News']['source']); ?></div>
		<?php echo h($news['News']['image']); ?>
	</div>
</div>
