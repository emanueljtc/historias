
<div class="departamentos"
	<div class="page_header">
		<h2><?php echo __('Lista Departamentos'); ?></h2>
		<br>
	</div>
	<div class="col-lg-6">
		    <table class="table table-striped table-hover">
				
				
					<tr>
							
						
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


	<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Departamento'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
	</div>
