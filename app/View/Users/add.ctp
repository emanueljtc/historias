<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Registrar Usuarios'); ?></legend>
		<br>
	<?php
		echo $this->Form->input('grupo_id', array('class'=>'form-control'));

		echo $this->Form->input('departamento_id', array('class'=>'form-control'));
		echo $this->Form->input('username',array('class'=>'form-control'));
		echo $this->Form->input('password',array('class'=>'form-control'));
		echo $this->Form->input('nombre',array('class'=>'form-control'));
		echo $this->Form->input('apellido',array('class'=>'form-control'));
		echo $this->Form->input('dni',array('class'=>'form-control'));
		echo $this->Form->input('email',array('class'=>'form-control'));
	?>
	</fieldset><br>
	<input type="submit" value"Submit" class="btn btn-primary">
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
