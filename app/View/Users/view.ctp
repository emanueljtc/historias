<div id="general">
	<center>
		<?php echo $this->element('b3');?>
	  <center>
	<div class="col-lg-12">
			<br>
			<h3>Detalles Usuario </h3>
			<br>
		<div class="bloque"> 
		
		<table class="table table-striped table-hover">
		
		
		<tbody>
			<tr class="success">
				<td>Rol</td>
				<td>Username</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Cedula</td>
			    <td>Creado</td>
				
			</tr>
			
			<tr>
				
				
				<td><?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>&nbsp;</td>
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['apellido']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['dni']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
				
				
			</tr>
	    
		</tbody>
	</table>
		</div>
		</div>
	</div>
	<br>
	<div class="btn-group btn-group-justified">
		  
			<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-info'), array('class' => 'btn btn-default')); ?></li>
			<?php echo $this->Html->link(__('Lista Usuarios'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Nuevo Departamento'), array('controller' => 'departamentos', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
		</div>

</div>