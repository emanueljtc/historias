<div class="pacientes index">
	<div class="page_header">
		<h2><?php echo __('Lista Pacientes'); ?></h2>
		<br>
	</div>
	<div class="col-md-12">
		<table class="table table-striped">
			
			<tr>
					<th><?php echo $this->Paginator->sort('ID'); ?></th>
					<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('Apellido'); ?></th>
					<th><?php echo $this->Paginator->sort('Cedula'); ?></th>
					<th><?php echo $this->Paginator->sort('Creado'); ?></th>
					<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			
			<tbody>
			<?php foreach ($pacientes as $paciente): ?>
				<tr>
					<td><?php echo h($paciente['Paciente']['id']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['apellido']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['dni']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['created']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['modified']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $paciente['Paciente']['id']),array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $paciente['Paciente']['id']),array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $paciente['Paciente']['id']), array('class' => 'btn btn-sm btn-default'), __('¿Seguro que quieres El # %s?', $paciente['Paciente']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<paginador><!-- etiqueta personalidad-->
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>
		<nav>
		  <ul class="pagination">
		    <li><?php echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled')); ?></li>
		    <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
		    <li><?php echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled')); ?></li>
		  </ul>
		</nav>
	</paginador>
	</div>
</div>
<div class="row">
	<div class="list-group col-md-2 small"> 	
		<a href="#" class="list-group-item active">
		<center><?php echo __('Acciones'); ?></center>
		</a>
		
			<?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'add'),   array('class' => 'list-group-item')); ?>
			<?php echo $this->Html->link(__('Lista Historia'), 
					array('controller' => 'historia', 'action' => 'index'), array('class' => 'list-group-item')); ?> 
			<?php echo $this->Html->link(__('Nueva Historia'), 
					array('controller' => 'historia', 'action' => 'add'), array('class' => 'list-group-item')); ?> 
		
	</div>
</div>
