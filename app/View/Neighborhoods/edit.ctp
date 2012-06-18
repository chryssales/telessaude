<div class="neighborhoods form">
<?php echo $this->Form->create('Neighborhood');?>
	<fieldset>
		<legend><?php echo __('Edit Neighborhood'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Neighborhood.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Neighborhood.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
