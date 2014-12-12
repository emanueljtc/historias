<div class="users index">
	<div class="page_header">
		<center><h2><?php echo __('Lista Usuarios'); ?></h2></center>
		<br>
	</div>
<center>
<div class="col-lg-12">
	<table class="table table-striped table-hover">
		
		<tr class="success">
				
				
				
				<th><?php echo $this->Paginator->sort('Username'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('Apellido'); ?></th>
				<th><?php echo $this->Paginator->sort('Cedula'); ?></th>
				<th><?php echo $this->Paginator->sort('Correo'); ?></th>
				
				<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		
		<tbody>
		<?php foreach ($users as $user): ?>
			<tr>
				
				
				
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['apellido']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['dni']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
			
				<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('V'), array('action' => 'view', $user['User']['id']),array('class'=>'btn btn-sm btn-default')); 
					?>
					<?php echo $this->Html->link(__('E'), array('action' => 'edit', $user['User']['id']),array('class' => 'btn btn-sm btn-default'));
					?>
					<?php echo $this->Form->postLink(__('D'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-sm btn-default'), __('¿Seguro que quieres El # %s?', $user['User']['id'])); 
					?>
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

<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Departamentos'), array('controller' => 'departamentos', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nuevo Departamento'), array('controller' => 'departamentos', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
	</div>
