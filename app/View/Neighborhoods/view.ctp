<div class="neighborhoods view">
<h2><?php  echo __('Neighborhood');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($neighborhood['Neighborhood']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($neighborhood['Neighborhood']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Neighborhood'), array('action' => 'edit', $neighborhood['Neighborhood']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Neighborhood'), array('action' => 'delete', $neighborhood['Neighborhood']['id']), null, __('Are you sure you want to delete # %s?', $neighborhood['Neighborhood']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Neighborhood'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employees');?></h3>
	<?php if (!empty($neighborhood['Employee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Neighborhood Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($neighborhood['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id'];?></td>
			<td><?php echo $employee['name'];?></td>
			<td><?php echo $employee['neighborhood_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
