<div class="historia index">
	<h2><?php echo __('Historia'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('paciente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('enfermedad'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($historia as $historium): ?>
	<tr>
		<td><?php echo h($historium['Historium']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($historium['Paciente']['dni'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
		</td>
		<td><?php echo h($historium['Historium']['enfermedad']); ?>&nbsp;</td>
		<td><?php echo h($historium['Historium']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($historium['Historium']['created']); ?>&nbsp;</td>
		<td><?php echo h($historium['Historium']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $historium['Historium']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $historium['Historium']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $historium['Historium']['id']), array(), __('Are you sure you want to delete # %s?', $historium['Historium']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Historium'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
