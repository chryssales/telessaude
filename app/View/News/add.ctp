<div class="news form">
<?php echo $this->Form->create('News');?>
	<fieldset>
		<legend><?php echo __('Add News'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('date');
		echo $this->Form->input('body');
		echo $this->Form->input('source');
		echo $this->Form->input('image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index'));?></li>
	</ul>
</div>