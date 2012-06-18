<div class="neighborhoods index">
	<h2><?php echo __('Neighborhoods');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($neighborhoods as $neighborhood): ?>
	<tr>
		<td><?php echo h($neighborhood['Neighborhood']['id']); ?>&nbsp;</td>
		<td><?php echo h($neighborhood['Neighborhood']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $neighborhood['Neighborhood']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $neighborhood['Neighborhood']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $neighborhood['Neighborhood']['id']), null, __('Are you sure you want to delete # %s?', $neighborhood['Neighborhood']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Neighborhood'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>