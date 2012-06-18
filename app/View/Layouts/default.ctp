<?php $cakeDescription= __d('cake_dev','Telessaúde Redes da Região Metropolitana de João Pessoa')?>
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
		echo $this->Html->css('autocomplete');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		$this->Html->script('https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js', false);
		$this->Html->script('https://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.3/scriptaculous.js', false);
	?>
</head>
<body>	<div id="body">
		<!-- TOP MENU DIV -->
		<div id="top" class="top">
			<div id="left" class="leftColumn" style="float: left">&nbsp;</div>
			<div id="center" class="middleColumn" style="float: left"><?php echo $this->Html->image('header.png',array('align'=>'right'))?></div>
			<div id="right" class="rightColumn" style="float: left">&nbsp;</div>
		</div>
		<!-- END OF TOP MENU DIV -->
		<!-- MIDDLE CONTENT -->
		<div id="middle" align="center" style="height:100%">
			<div id="left" class="leftColumn" style="float:left; display:block; background: url('../img/leftShadow.png') repeat-y right; height:auto !important">&nbsp;</div>
			<div id="center" class="middleColumn" style="float: left">
				<div id="header">
					<div style="float: left; width: 35%; margin-top: 25px; margin-right: 40px; margin-bottom:20px">
						<?php echo $this->Html->image('logo.png',array('align'=>'middle'))?>
					</div>
					<div style="float: left; width: 58%">
						<div id="login" class="borderLogin" style="background-color:#e7e8e9; height: 60px; text-align:left; padding-left: 10px; padding-top:50px">
							<form>
								<label for="login">Usuário: </label>
								<input id="login" name="username" class="grayBorder"/>
								<label for="senha">Senha: </label>
								<input id="senha" name="password" class="grayBorder"/>
							</form>
							<div class="smallRedLink">Esqueci minha senha</div>
						</div>
						<div id="search" style="margin-top:5px; text-align:right">
							<?php 
								echo $this->Form->create(null,
									array('url'=> array('controller'=>'Pages','action'=>'search')));
								echo $this->Form->input('search',array('label'=>'','class'=>'grayBorder'));
								echo $this->Form->end(
									array('label'=>'',
									'div'=>array('class'=>'searchButton'))
								);
							?>
						</div>
					</div>
				</div>
				<div id="menu" style="clear: both">
					<ul class="menuTop">
						<li><?php echo $this->Html->link('Página Inicial',array('controller'=>'Pages','action'=>'home'))?></li>	
						<li><?php echo $this->Html->link('Apresentação',array('controller'=>'Pages','action'=>'apresentacao'))?></li>
						<li><?php echo $this->Html->link('Equipe',array('controller'=>'Pages','action'=>'equipe'))?></li>
						<li><?php echo $this->Html->link('Serviços',array('controller'=>'Pages','action'=>'servicos'))?></li>
						<li><?php echo $this->Html->link('Notícias',array('controller'=>'Pages','action'=>'noticias'))?></li>
						<li><?php echo $this->Html->link('Agenda',array('controller'=>'Pages','action'=>'agenda'))?></li>
						<li><?php echo $this->Html->link('Artigos',array('controller'=>'Pages','action'=>'artigos'))?></li>
						<li><?php echo $this->Html->link('Contato',array('controller'=>'Pages','action'=>'contato'))?></li>
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
			<div id="social" align="center" style="width:55%">
				<div id="twitter" style="float: left; width:60%; position: relative; margin-right:50px">
					<div class="sectionTitle whiteBottomBorder whiteLink">Ultimos Tweets / <span style="color:#70c0ed">@TSRedesJP</span></div>
					<div style="text-align: left; color: #FFFFFF">
						<div><em>6 de junho de 2012</em></div>
						<div class="whiteBottomBorder">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor nisi sed justo suscipit tincidunt. Donec urna mi, laoreet non rhoncus non, tincidunt vitae arcu.</div>
					</div>
					<div style="text-align: left; color: #FFFFFF">
						<div><em>5 de junho de 2012</em></div>
						<div class="whiteBottomBorder">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec purus massa, mattis sed posuere at, consectetur eget erat.</div>
					</div>
					<div style="text-align: left; color: #FFFFFF">
						<div><em>3 de junho de 2012</em></div>
						<div class="whiteBottomBorder">Integer facilisis varius metus eget egestas. Proin felis ligula, posuere vitae consequat vitae, pellentesque at neque. Aenean lorem libero, vulputate auctor posuere 
	at, rutrum ut dui.</div>
					</div>
				</div>
				<div id="sociallinks" style="float: left; width: 30%; position: relative; text-align: left">
					<div class="sectionTitle whiteBottomBorder whiteLink">Redes Sociais</div>
					<div>
						<?php echo $this->Html->image('twitter.png',array('width'=>'30','align'=>'absmiddle'))?>
						<a href="http://twitter.com/#!/TSRedesJP" target="_blank" class="whiteLink">Siga-nos no Twitter</a>
					</div><br>
					<div>
						<?php echo $this->Html->image('facebook.png', array('width'=>'30','align'=>'absmiddle'))?>
						<a href="https://www.facebook.com/TelessaudeRedesJp" target="_blank" class="whiteLink">Encontre-nos no Facebook</a>
					</div><br>
					<div>
						<?php echo $this->Html->image('logopb.png')?>
					</div>
				</div>
			</div>
			<div id="bottom" class="whitePadding" style="clear: both; background-color:#000000;" align="center">Página Inicial    |    Apresentação    |    Equipe    |    Serviços    |    Notícias    |    Agenda    |    Artigos    |    Contato</div>
			<div id="copyright" class="whitePadding" style="background-color:#326a9a; " align="center">Copyright (c) 2012 Secretaria Municipal de Saúde, Telessaúde Redes</div>
		</div>
		<!-- END OF BOTTOM -->
	</div>
			
</body>
</html>
