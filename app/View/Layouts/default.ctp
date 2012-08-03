<?php $cakeDescription= __d('cake_dev','Telessaúde Redes da Região Metropolitana de João Pessoa');
if(!empty($_SESSION['Usuario'])){
	session_start();
	var_dump($_SESSION['Usuario']);exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('default');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('autocomplete');
		echo $this->Html->css('jquery.twitter');

		echo $this->Html->script(array('jquery-1.7.2.min','jquery.twitter','twitter','jquery-ui-1.8.21.custom.min'));
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		
	?>
</head>
<body>
<!-- TOP MENU DIV -->
		<div id="topo" class="topo">
			<div id="left" class="leftColumn" style="float: left">&nbsp;</div>
			<div id="center" class="middleColumn" style="float: left">
				<div class="headerIcons">
					<a href='https://www.facebook.com/TelessaudeRedesJp' target="_blank"><?php echo $this->Html->image('facebookHeader.png',array('align'=>'right'))?></a>
				</div>
				<div class="headerIcons">
					<a href='http://twitter.com/#!/TSRedesJP' target="_blank"><?php echo $this->Html->image('twitterHeader.png',array('align'=>'right'))?></a></div>
				<div class="headerIcons">
				<?php echo $this->Html->image('email.png', array(
					'align'=>'right',
					'url'=>array('controller'=>'pages','action'=>'contato')))?></div>
				<div class="headerIcons">
				<?php echo $this->Html->image('home.png', array(
					'align'=>'right',
					'url'=>array('controller'=>'pages','action'=>'index')))?></div>
			</div>
			<div id="right" class="rightColumn" style="float: left">&nbsp;</div>
		</div>
		<!-- END OF TOP MENU DIV -->
<div id="body-content">
		<!-- TOP MENU DIV ->
		<div id="top" class="top">
			<div id="left" class="leftColumn" style="float: left">&nbsp;</div>
			<div id="center" class="middleColumn" style="float: left"><?php //echo $this->Html->image('header.png',array('align'=>'right'))?></div>
			<div id="right" class="rightColumn" style="float: left">&nbsp;</div>
		</div>
		<!-- END OF TOP MENU DIV -->
		<!-- MIDDLE CONTENT -->
		<div id="middle" align="center" style="height:100%">
			<div id="left" class="leftColumn" style="float:left; display:block; background: url('../img/leftShadow.png') repeat-y right; height:auto !important">&nbsp;</div>
			<div id="center" class="middleColumn" style="float: left">
				<div id="header">
					<div class="logoheader">
						<?php echo $this->Html->image('logo.png',array('align'=>'middle','width'=>'450'))?>
					</div>
					<div class="loginheader">
						
						<div id="search" class="well input-append">
							<?php 
								echo $this->Form->create('Search', array(
									'url'=> array(
										'controller'=>'Pages',
										'action'=>'search'),
									'style'=>'margin-bottom: 0px'));
								echo $this->Form->input('search',array(
										'label'=>'',
										'placeholder'=>'Digite sua busca...',
										'div'=>false));
								echo $this->Form->end(array('label'=>'buscar','class'=>'btn','div'=>false));
							?>
						</div>
					</div>
				</div>
				<div id="menu" style="clear: both">
					<ul>
						<li><?php echo $this->Html->link('Página Inicial',array('controller'=>'pages','action'=>'index'))?></li>	
						<li><?php echo $this->Html->link('Apresentação',array('controller'=>'pages','action'=>'apresentacao'))?></li>
						<li><?php echo $this->Html->link('Equipe',array('controller'=>'pages','action'=>'equipe'))?></li>
						<li><?php echo $this->Html->link('Serviços',array('controller'=>'pages','action'=>'servicos'))?></li>
						<li><?php echo $this->Html->link('Municípios Participantes',array('controller'=>'pages','action'=>'municipios'))?></li>
						<li><?php echo $this->Html->link('Eventos',array('controller'=>'events','action'=>'listar'))?></li>
						<li><?php echo $this->Html->link('Biblioteca',array('controller'=>'pages','action'=>'biblioteca'))?></li>
						<li><?php echo $this->Html->link('Contato',array('controller'=>'pages','action'=>'contato'))?></li>
					</ul>
				</div>
				<div id="content" align="left" style="clear:left; background-color:#ffffff">
					<?php echo $this->Session->flash(); ?>

					<?php echo $this->fetch('content'); ?>
					<br style="clear:both"/>&nbsp;
				</div>
			</div>
			<div id="right" class="rightColumn" style="float: left; background: url('rightShadow.png') repeat-y">&nbsp;</div>
		</div>
		<!-- END OF MIDDLE CONTENT -->
		<!-- PAGE BOTTOM -->
		<div id="bottom" style="background-color:#326a9a; clear: both;" align="center">
			<br>
			<div id="social" align="center">
				<div id="tweet">
					<div class="sectionTitle whiteBottomBorder whiteLink">Ultimos Tweets / <span style="color:#70c0ed">@TSRedesJP</span>
					</div>
					<div id="twitter">
						<script type="text/javascript">
							$(document).ready(function() {
							    showTweets('tsredesjp',10);
							});
						</script>
					</div>
				</div>
				<div id="sociallinks">
					<div class="sectionTitle whiteBottomBorder whiteLink">Redes Sociais</div>
					<div style="float: left; padding-right: 30px;">
						<?php echo $this->Html->image('twitter.png',array('width'=>'30','align'=>'absmiddle'))?>
						<a href="http://twitter.com/#!/TSRedesJP" target="_blank" class="whiteLink">Siga-nos no Twitter</a>
					</div>
					<div style="float: left;">
						<?php echo $this->Html->image('facebook.png', array('width'=>'30','align'=>'absmiddle'))?>
						<a href="https://www.facebook.com/TelessaudeRedesJp" target="_blank" class="whiteLink">Encontre-nos no Facebook</a>
					</div><br>
					<div>
						<?php echo $this->Html->image('logopb.png')?>
					</div>
				</div>
			</div>
			<div id="bottom" class="whitePadding" style="clear: both; background-color:#000000;" align="center">
				<div id="menuBottom" style="clear: both">
					<ul>
						<li><?php echo $this->Html->link('Página Inicial',array('controller'=>'pages','action'=>'index'))?></li>	
						<li><?php echo $this->Html->link('Apresentação',array('controller'=>'pages','action'=>'apresentacao'))?></li>
						<li><?php echo $this->Html->link('Equipe',array('controller'=>'pages','action'=>'equipe'))?></li>
						<li><?php echo $this->Html->link('Serviços',array('controller'=>'pages','action'=>'servicos'))?></li>
						<li><?php echo $this->Html->link('Municípios Participantes',array('controller'=>'pages','action'=>'municipios'))?></li>
						<li><?php echo $this->Html->link('Agenda',array('controller'=>'pages','action'=>'agenda'))?></li>
						<li><?php echo $this->Html->link('Biblioteca',array('controller'=>'pages','action'=>'biblioteca'))?></li>
						<li><?php echo $this->Html->link('Contato',array('controller'=>'pages','action'=>'contato'))?></li>
					</ul>
				</div>	
			</div>
			<div id="copyright" class="whitePadding" style="background-color:#326a9a; " align="center">Copyright (c) 2012 Secretaria Municipal de Saúde, Telessaúde Redes</div>
		</div>
		<!-- END OF BOTTOM -->
	</div>
			
</body>
</html>
