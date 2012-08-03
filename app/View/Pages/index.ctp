<?php 
	echo $this->Html->css('slideshow');
	echo $this->Html->css('bootstrap');
	echo $this->Html->script('jquery-1.7.2.min.js', true);
	echo $this->Html->script('jqFancyTransitions.1.8', true);
?>
<script>
$(document).ready( function(){
	$('#slideshowHolder').jqFancyTransitions({ 
		width: 530, 
		height: 300, 
		navigation: true, 
		titleOpacity: 1,
		position: top
		});
});
</script>

<div id="services" class="well">
	<div style="font-size: 20px; margin-bottom:10px">Nossos Serviços</div>
	<div align="center">
		<?php echo $this->Html->image('s1.png')?>
		<?php echo $this->Html->image('s2.png')?>
		<?php echo $this->Html->image('s3.png')?>
	</div>
</div>
<div id="events" class="well">
	<div id="slideshowHolder">
	<?php foreach($events as $event):
		echo $this->Html->image('events/'.$event['Event']['image'], 
			array(
				'width'=>'530',
				'height'=>'200',
				'alt'=>'
					<span style=padding:8px 4px><b>'.$event['Event']['name'].'</b></span><br>
					<span style=padding:8px 4px>'.$this->Time->format('d/m/Y',$event['Event']['date']).' às '.$this->Time->format('H:i',$event['Event']['time']).'</span>'));
	endforeach;?>
	</div>
</div>
<?php if($news){?>
<div id="news">
	<div style="font-size: 20px; margin-bottom:10px">Notícias</div>
	<?php foreach($news as $noticia):?>
	<div class="noticia">
		<div><em><?php echo $this->Time->format('d/m/y',$noticia["News"]["date"]);?></em></div>
		<div><b><?php echo $this->Html->link($noticia["News"]["title"],array('controller'=>'News','action'=>'view',$noticia["News"]["id"]));?></b></div>
	</div>
	<br/>
	<?php endforeach;?>
	<div class="btn btn-danger whiteLink" style="padding: 5px; width: 19%; float: right" align="center">
		<b><?php echo $this->Html->link('Mais Notícias', array('controller'=>'News','action'=>'listar'));?></b></div>
</div>
<?php }?>
<div id="links">
	<div style="font-size: 20px; margin-bottom:10px">Links Úteis</div>
	<ul class="links">
		<?php foreach ($links as $link):?>
		<li><?php echo "<a href=".$link["Link"]["url"]." target=_blank>".$link["Link"]["link"]."</a>"?></li>
		<?php endforeach;?>
	</ul>
</div>
<div id="support">
	<div style="font-size: 20px; margin-bottom:10px">Apoio</div>
		<?php foreach ($supports as $support):?>
		<div style="float: left; width: 20%; padding:0px 10px; text-align: center"><?php echo "<a href=".$support["Support"]["url"]." target=_blank>".$this->Html->image('supports/'.$support["Support"]["image"], array('width'=>'90px'))."</a>"?></div>
		<?php endforeach;?>
</div>