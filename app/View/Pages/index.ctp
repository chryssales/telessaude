<div id="services" style="margin: 0px 10px 5px 10px; padding-top: 5px">
	<div style="font-size: 20px; margin-bottom:10px">Nossos Serviços</div>
	<div align="center">
		<?php echo $this->Html->image('s1.png')?>
		<?php echo $this->Html->image('s2.png')?>
		<?php echo $this->Html->image('s3.png')?>
	</div>
</div>
<div id="events" style="width:65%; float:left; background-color: #A70000; margin: 5px 10px 5px 10px">
	<?php echo $this->Html->image('eventos.png')?>
</div>
<div id="links" style="width:30%; float:right; margin: 5px 10px 5px 10px; position: relative">
	<div style="font-size: 20px; margin-bottom:10px">Links Úteis</div>
	<ul>
		<?php foreach ($links as $link):?>
		<li><?php echo "<a href=".$link["Link"]["url"]." target=_blank>".$link["Link"]["link"]."</a>"?></li>
		<?php endforeach;?>
	</ul>
</div>
<div id="news" style="width:65%; float:left; margin: 5px 10px 0px 10px">
	<div style="font-size: 20px; margin-bottom:10px">Notícias</div>
	<?php foreach($news as $noticia):?>
	<div>
		<div><em><?php echo $noticia["News"]["date"]?></em></div>
		<div><b><?php echo $this->Html->link($noticia["News"]["title"],array('controller'=>'News','action'=>'view',$noticia["News"]["id"]));?></b></div>
	</div>
	<br/>
	<?php endforeach;?>
	<div style="background-color: #A70000; color:#FFFFFF; padding: 5px; width: 19%; float: right" align="center"><b>Mais Notícias ></b></div>
</div>
<div id="support" style="width:30%; float:right; margin: 5px 10px 5px 10px; position: relative">
	<div style="font-size: 20px; margin-bottom:10px">Apoio</div>
	<ul>
		<?php foreach ($supports as $support):?>
		<li><?php echo "<a href=".$support["Support"]["url"]." target=_blank>".$support["Support"]["image"]."</a>"?></li>
		<?php endforeach;?>
	</ul>
</div>