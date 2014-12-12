<div id="general">
<center><br><br><br><br><br><br>
	<div class="col-lg-12">
		<div class="bloque"> 
		<h2><?php echo __('Usuario'); ?></h2>
		<table class="table table-striped table-hover">
		
		
		<br><br>
		<tbody>
			<tr class="success">
				<td>Username</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Cedula</td>
				<td>Email</td>
				<td>Modificado</td>
			</tr>
			
			<tr>
				
				
				
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['apellido']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['dni']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
			
				<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
				
			</tr>
	    
		</tbody>
	</table>
		</div>
		</div>
	</div>
	<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Departamentos'), array('controller' => 'departamentos', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nuevo Departamento'), array('controller' => 'departamentos', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
	</div>

</div>