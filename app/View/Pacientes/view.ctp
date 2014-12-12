<div id="general">
<center><br><br><br><br><br><br>
	<div class="col-lg-12">
		<div class="bloque"> 
		<h2><?php echo __('Paciente'); ?></h2>
		<table class="table table-striped table-hover">
		
		
		<br><br>
		<tbody>
			<tr class="success">
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Cedula</td>
				<td>Edad</td>
				<td>Sexo</td>
				<td>Direccion</td>
				<td>Fecha Nacimiento</td>
				<td>Telefono</td>
				<td>G Sanguineo</td>
			</tr>
			
			<tr>
				
				
				
				<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($paciente['Paciente']['apellido']); ?>&nbsp;</td>
				<td><?php echo h($paciente['Paciente']['dni']); ?>&nbsp;</td>
				<td><?php echo h($paciente['Paciente']['edad']); ?>&nbsp;</td>
				<td><?php echo h($paciente['Paciente']['sexo']); ?>&nbsp;</td>
				<td><?php echo h($paciente['Paciente']['direccion']); ?>&nbsp;</td>
				<td><?php echo h($paciente['Paciente']['fecha_nacimiento']);?>&nbsp;</td>
				<td><?php echo h($paciente['Paciente']['telefono']);?>&nbsp;</td>
				<td><?php echo h($paciente['Paciente']['g_sanguineo']);?>&nbsp;</td>
				
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

<!-- <div class="pacientes view">
<h2><?php echo __('Paciente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['fecha_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Paciente'), array('action' => 'edit', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paciente'), array('action' => 'delete', $paciente['Paciente']['id']), array(), __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Historia'), array('controller' => 'historia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historium'), array('controller' => 'historia', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Historia'); ?></h3>
	<?php if (!empty($paciente['Historium'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th><?php echo __('Enfermedad'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($paciente['Historium'] as $historium): ?>
		<tr>
			<td><?php echo $historium['id']; ?></td>
			<td><?php echo $historium['paciente_id']; ?></td>
			<td><?php echo $historium['enfermedad']; ?></td>
			<td><?php echo $historium['observaciones']; ?></td>
			<td><?php echo $historium['created']; ?></td>
			<td><?php echo $historium['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'historia', 'action' => 'view', $historium['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'historia', 'action' => 'edit', $historium['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'historia', 'action' => 'delete', $historium['id']), array(), __('Are you sure you want to delete # %s?', $historium['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Historium'), array('controller' => 'historia', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
 -->