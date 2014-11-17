<div class="departamentos view">
<h2><?php echo __('Departamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Departamento'), array('action' => 'edit', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Departamento'), array('action' => 'delete', $departamento['Departamento']['id']), array(), __('Are you sure you want to delete # %s?', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamento Pacientes'), array('controller' => 'departamento_pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento Paciente'), array('controller' => 'departamento_pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Departamento Pacientes'); ?></h3>
	<?php if (!empty($departamento['DepartamentoPaciente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($departamento['DepartamentoPaciente'] as $departamentoPaciente): ?>
		<tr>
			<td><?php echo $departamentoPaciente['id']; ?></td>
			<td><?php echo $departamentoPaciente['departamento_id']; ?></td>
			<td><?php echo $departamentoPaciente['paciente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'departamento_pacientes', 'action' => 'view', $departamentoPaciente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'departamento_pacientes', 'action' => 'edit', $departamentoPaciente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'departamento_pacientes', 'action' => 'delete', $departamentoPaciente['id']), array(), __('Are you sure you want to delete # %s?', $departamentoPaciente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Departamento Paciente'), array('controller' => 'departamento_pacientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($departamento['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($departamento['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['grupo_id']; ?></td>
			<td><?php echo $user['departamento_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['nombre']; ?></td>
			<td><?php echo $user['apellido']; ?></td>
			<td><?php echo $user['dni']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
