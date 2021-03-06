<div id="general">
	<center>
		<?php echo $this->element('b2');?>
	  </center>
	<center>
	<div class="col-lg-12">
			<br>
			<h3>Lista General </h3>
			<br>

		<table class="table table-striped table-hover">
			
			<tr class="success">
					<th><?php echo $this->Paginator->sort('Foto'); ?></th>
					<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('Apellido'); ?></th>
					<th><?php echo $this->Paginator->sort('Cedula'); ?></th>
					<th><?php echo $this->Paginator->sort('Edad'); ?></th>
					<th><?php echo $this->Paginator->sort('Sexo'); ?></th>
					
					
					<th><?php echo $this->Paginator->sort('Nacimiento'); ?></th>
					<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			
			<tbody>
			<?php foreach ($pacientes as $paciente): ?>
				<tr>
					<td><?php echo $this->Html->image('../files/paciente/foto/'. $paciente['Paciente']['foto_dir'].'/'.'thumb_'.$paciente['Paciente']['foto']); ?></td>
					<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['apellido']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['dni']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['edad']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['sexo']); ?>&nbsp;</td>
					
					
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
	<br>

	<div class="btn-group btn-group-justified">
		  
			<?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'add'), array('class' => 'btn btn-info'), array('class' => 'btn btn-default')); ?></li>
			<?php echo $this->Html->link(__('Lista Pacientes'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Nueva Historia'), array('controller' => 'historia', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>

