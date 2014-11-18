<div class="departamentos index">
	<h2><?php echo __('Departamentos'); ?></h2>
	<table class="table table table-striped table-hover" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($departamentos as $departamento): ?>
	<tr>
		<td><?php echo h($departamento['Departamento']['id']); ?>&nbsp;</td>
		<td><?php echo h($departamento['Departamento']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $departamento['Departamento']['id']), array('class' => 'btn btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $departamento['Departamento']['id']), array('class' => 'btn btn-default'), __('Are you sure you want to delete # %s?', $departamento['Departamento']['id'])); ?>
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
	<nav>
	  <ul class="pagination">
	    <li><?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?></li>
	    <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
	    <li><?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?></li>
	  </ul>
	</nav>
</div>

<div class="row">
	<div class="list-group col-md-2 small">
	  <a href="#" class="list-group-item active"><?php echo __('Actions'); ?></a>
		<?php echo $this->Html->link(__('New Departamento'), array('action' => 'add'), array('class' => 'list-group-item')); ?></li>
		<?php echo $this->Html->link(__('List Departamento Pacientes'), array('controller' => 'departamento_pacientes', 'action' => 'index'), array('class' => 'list-group-item')); ?>
		<?php echo $this->Html->link(__('New Departamento Paciente'), array('controller' => 'departamento_pacientes', 'action' => 'add'), array('class' => 'list-group-item')); ?>
		<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => 'list-group-item')); ?>
		<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'list-group-item')); ?>
	</div>
</div>