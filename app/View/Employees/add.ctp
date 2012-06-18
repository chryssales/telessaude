<div class="employees form">
<?php echo $this->Form->create('Employee');?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
		echo $this->Js->writeBuffer();
		echo $this->Form->input('name');
		echo $this->Form->input('neighborhood_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('controller' => 'neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Neighborhood'), array('controller' => 'neighborhoods', 'action' => 'add')); ?> </li>
	</ul>
</div>
