<div class="pacientes form">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Paciente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('dni');
		echo $this->Form->input('edad');
		echo $this->Form->input('sexo');
		echo $this->Form->input('fecha_nacimiento');



	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Paciente.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Paciente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Historia'), array('controller' => 'historia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historium'), array('controller' => 'historia', 'action' => 'add')); ?> </li>
	</ul>
</div>


<!-- <div class="pacientes form">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Paciente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('dni');
		echo $this->Form->input('edad');
		echo $this->Form->input('sexo');
		echo $this->Form->input('direccion');
		echo $this->Form->input('fecha_nacimiento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Paciente.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Paciente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Historia'), array('controller' => 'historia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historium'), array('controller' => 'historia', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->