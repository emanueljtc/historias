<div class="departamentos"
	<div class="page_header">
		<h2><?php echo __('Lista Departamentos'); ?></h2>
		<br>
	</div>
	<div class="col-md-12">
		    <table class="table table-striped">
				
				
					<tr>
							
						<th><?php echo $this->Paginator->sort('ID');?></th>
						<th><?php echo $this->Paginator->sort('Nombre');?></th>
						<th class="actions"><?php echo __('Acciones'); ?></th>
					</tr>
				
				
		
				<?php foreach ($departamentos as $departamento): ?>
				<tr>
					<td><?php echo h($departamento['Departamento']['id']); ?></td>
					<td><?php echo h($departamento['Departamento']['nombre']); ?></td>
					<td class="actions">
						<?php 
						echo $this->Html->link(__('Editar'), array('action' => 'edit', $departamento['Departamento']['id']), array('class' => 'btn btn-sm btn-default')); 
						?>
						<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $departamento['Departamento']['id']), array('class' => 'btn btn-sm btn-default'), __('¿Seguro que quieres El # %s?', $departamento['Departamento']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
	</div>
	</tbody>
	</table>
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
	  <a href="#" class="list-group-item active"><?php echo __('Acciones'); ?></a>
		<?php echo $this->Html->link(__('Nuevo Departamento'), array('action' => 'add'), array('class' => 'list-group-item')); ?></li>
		<?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class' => 'list-group-item')); ?>
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class' => 'list-group-item')); ?>
	</div>
</div>