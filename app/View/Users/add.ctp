<h2>Registro Usuarios</h2>
<br><br>
<center>
<div class="col-lg-6">
	<div class="well bs-component">
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend><?php echo __('Registrar el nuevo Usuario'); ?></legend>
			<br>
		<?php
			echo $this->Form->input('grupo_id', array('class'=>'form-control'));

			echo $this->Form->input('departamento_id', array('class'=>'form-control'));
			echo $this->Form->input('username',array('class'=>'form-control'));
			echo $this->Form->input('password',array('class'=>'form-control'));
			echo $this->Form->input('nombre',array('class'=>'form-control'));
			echo $this->Form->input('apellido',array('class'=>'form-control'));
			echo $this->Form->input('Cedula',array('class'=>'form-control'));
			echo $this->Form->input('email',array('class'=>'form-control'));

		?>
		</fieldset><br>
		
		<center><?php echo $this->Form->end("Guardar",array('class'=>'form-control')); ?><center>

	</div>
	

</div>
<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Departamentos'), array('controller' => 'departamentos', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nuevo Departamento'), array('controller' => 'departamentos', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
</div>