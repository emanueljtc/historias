<div class="general">
	<center>
		<?php echo $this->element('b4');?>
	  </center>
	<center>
	<div class="departamentos"
			
			<br><br>
			<h3>Lista General </h3>
			<br>
				<center>
		<div class="col-lg-7">
			    <table class="table table-striped table-hover">
					
					
						<tr class="success">
								
							
							<th><?php echo $this->Paginator->sort('Nombre');?></th>
							<th class="actions"><?php echo __('Acciones'); ?></th>
						</tr>
					
					
			
					<?php foreach ($departamentos as $departamento): ?>
					<tr>
						
						<td><?php echo h($departamento['Departamento']['nombre']); ?></td>
						<td class="actions">
							<?php 
							echo $this->Html->link(__('E'), array('action' => 'edit', $departamento['Departamento']['id']), array('class' => 'btn btn-sm btn-default')); 
							?>
							<?php echo $this->Form->postLink(__('D'), array('action' => 'delete', $departamento['Departamento']['id']), array('class' => 'btn btn-sm btn-default'), __('¿Seguro que quieres El # %s?', $departamento['Departamento']['id'])); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>

		</div>
		</tbody>
		</table>
		<paginador><!-- etiqueta personalidad-->
			<?php echo $this->element('paginador');?>
		</paginador>
		<br>
		<br>
		<div class="btn-group btn-group-justified">
		  
			<?php echo $this->Html->link(__('Nuevo Departamento'), array('action' => 'add'), array('class' => 'btn btn-info')); ?></li>
			<?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
		</div>
<div>