<div class="historia index">
	<div class="page_header">
		<h2><?php echo __('Lista Historia'); ?></h2>
		<br>
	</div>
	<div class="col-md-12">
		<table class="table table-striped">
					
			
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('paciente_id'); ?></th>
					<th><?php echo $this->Paginator->sort('enfermedad'); ?></th>
					<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
					<th><?php echo $this->Paginator->sort('creado'); ?></th>
					<th><?php echo $this->Paginator->sort('modificado'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			
			<tbody>
				<?php foreach ($historia as $historium): ?>
						<tr>

							<td>
								<?php echo $this->Html->link($historium['Paciente']['dni'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
							</td>
							<td><?php echo h($historium['Historium']['enfermedad']); ?>&nbsp;</td>
							<td><?php echo h($historium['Historium']['observaciones']); ?>&nbsp;</td>
							<td><?php echo h($historium['Historium']['created']); ?>&nbsp;</td>
							<td><?php echo h($historium['Historium']['modified']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $historium['Historium']['id']), array('class' => 'btn btn-sm btn-default')); ?>
								<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $historium['Historium']['id']), array('class' => 'btn btn-sm btn-default')); ?>
								<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $historium['Historium']['id']), array('class' => 'btn btn-sm btn-default'), __('¿Seguro que quieres El # %s?', $historium['Historium']['id'])); ?>
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

<div class="row">
	<div class="list-group col-md-2 small"> 	
		<a href="#" class="list-group-item active">
		<?php echo __('Acciones'); ?>
		</a>
			<?php echo $this->Html->link(__('Nueva Historia'), array('action' => 'add'), array('class' => 'list-group-item')); ?>
			<?php echo $this->Html->link(__('Lista Pacientes'), array('controller' => 'pacientes', 'action' => 'index'), array('class' => 'list-group-item')); ?> 
			<?php echo $this->Html->link(__('Nuevo Paciente'), array('controller' => 'pacientes', 'action' => 'add'), array('class' => 'list-group-item')); ?> 
	</div>
	
</div>
