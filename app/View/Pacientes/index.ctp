<div class="pacientes index">
	<div class="page_header">
		<center><h2><?php echo __('Lista Pacientes'); ?></h2></center>
		<br>
	</div>
	<center>
	<div class="col-lg-12">
		<table class="table table-striped table-hover">
			
			<tr>
					
					<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('Apellido'); ?></th>
					<th><?php echo $this->Paginator->sort('Cedula'); ?></th>
					<th><?php echo $this->Paginator->sort('Edad'); ?></th>
					<th><?php echo $this->Paginator->sort('Sexo'); ?></th>
					<th><?php echo $this->Paginator->sort('Direccion'); ?></th>
					<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			
			<tbody>
			<?php foreach ($pacientes as $paciente): ?>
				<tr>
					
					<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['apellido']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['dni']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['edad']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['sexo']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['direccion']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['fecha_nacimiento']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['modified']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('V'), array('action' => 'view', $paciente['Paciente']['id']),array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Html->link(__('E'), array('action' => 'edit', $paciente['Paciente']['id']),array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Form->postLink(__('D'), array('action' => 'delete', $paciente['Paciente']['id']), array('class' => 'btn btn-sm btn-default'), __('¿Seguro que quieres El # %s?', $paciente['Paciente']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<paginador><!-- etiqueta personalidad-->
		<?php echo $this->element('paginador');?>
	</paginador>
	</div>
</div>

<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Historia'), array('controller' => 'historia', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nueva Historia'), array('controller' => 'historia', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
</div>


<!-- <div class="pacientes index">
	<h2><?php echo __('Pacientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pacientes as $paciente): ?>
	<tr>
		<td><?php echo h($paciente['Paciente']['id']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['dni']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['edad']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['fecha_nacimiento']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['created']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paciente['Paciente']['id']), array(), __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Paciente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Historia'), array('controller' => 'historia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historium'), array('controller' => 'historia', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->