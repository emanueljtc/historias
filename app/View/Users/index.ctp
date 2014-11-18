<div class="users index">
	<div class="page_header">
		<h2><?php echo __('Lista Usuarios'); ?></h2>
		<br>
	</div>
<div class="col-md-12">
	<table class="table table-striped">
		
		<tr>
				<th><?php echo $this->Paginator->sort('ID'); ?></th>
				<th><?php echo $this->Paginator->sort('Grupo'); ?></th>
				<th><?php echo $this->Paginator->sort('Departamento'); ?></th>
				<th><?php echo $this->Paginator->sort('Username'); ?></th>
				<th><?php echo $this->Paginator->sort('Password'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('Apellido'); ?></th>
				<th><?php echo $this->Paginator->sort('Cedula'); ?></th>
				<th><?php echo $this->Paginator->sort('Correo'); ?></th>
				<th><?php echo $this->Paginator->sort('Creado'); ?></th>
				<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		
		<tbody>
		<?php foreach ($users as $user): ?>
			<tr>
				<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($user['Grupo']['nombre'], array('controller' => 'grupos', 'action' => 'view', $user['Grupo']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($user['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $user['Departamento']['id'])); ?>
				</td>
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['apellido']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['dni']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']),array('class'=>'btn btn-sm btn-default')); 
					?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']),array('class' => 'btn btn-sm btn-default'));
					?>
					<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-sm btn-default'), __('¿Seguro que quieres El # %s?', $user['User']['id'])); 
					?>
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
<div class="row">
	<div class="list-group col-md-2 small"> 
		<a href="#" class="list-group-item active">
			<center><?php echo __('Acciones'); ?></center>
			</a>
		
			<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'list-group-item')); ?>
			<?php echo $this->Html->link(__('Lista Grupos'), array('controller' => 'grupos', 'action' => 'index'), array('class' => 'list-group-item')); ?> 
			<?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'grupos', 'action' => 'add'), array('class' => 'list-group-item'), array('class' => 'list-group-item')); ?> 
			<?php echo $this->Html->link(__('Lista Departamentos'), array('controller' => 'departamentos', 'action' => 'index'), array('class' => 'list-group-item')); ?> 
			<?php echo $this->Html->link(__('Nuevo Departamento'), array('controller' => 'departamentos', 'action' => 'add'), array('class' => 'list-group-item')); ?> 
		</ul>
	</div>
</div>
