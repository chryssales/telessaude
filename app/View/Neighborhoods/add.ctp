<div class="neighborhoods form">
<?php echo $this->Form->create('Neighborhood');?>
	<fieldset>
		<legend><?php echo __('Add Neighborhood'); ?></legend>
	<?php
		echo $this->Form->label('Nome');
		echo $this->Js->autoComplete('Neighborhood.name', 'neighborhoods/autoComplete');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
