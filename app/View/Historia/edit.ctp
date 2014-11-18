<div class="historia form">
<?php echo $this->Form->create('Historium'); ?>
	<fieldset>
		<legend><?php echo __('Edit Historium'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('paciente_id');
		echo $this->Form->input('enfermedad');
		echo $this->Form->input('observaciones');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Historium.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Historium.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Historia'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
