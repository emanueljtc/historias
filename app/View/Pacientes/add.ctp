<div class="col-lg-6">
	<div class="well bs-component">
	<?php echo $this->Form->create('Paciente',array('class'=>'form-horizontal', 'role'=>'form')); ?>
		<div class="form-group">
			<fieldset>
				<center><legend><?php echo __('Registrar Paciente'); ?></legend></center>
					<?php
						echo $this->Form->input('nombre', 
							array('class'=>'form-control'));
						echo $this->Form->input('apellido', 
							array('class'=>'form-control'));
						echo $this->Form->input('dni',
						    array('label'=>'Cedula','class'=>'form-control'));
						echo $this->Form->input('edad',
						    array('class'=>'form-control'));
						echo $this->Form->input('sexo',
						    array('class'=>'form-control'));
						echo $this->Form->input('direccion',
						    array('class'=>'form-control'));
						echo $this->Form->input('fecha_nacimiento',array('class'=>'form-control'));

					?>
			</fieldset>
		</div>
		<center><input type="submit" value"Submit" class="btn btn-primary"></center>
		
	</div>
</div>

<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Historia'), array('controller' => 'historia', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nueva Historia'), array('controller' => 'historia', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
</div>


<!-- <div class="pacientes form">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Add Paciente'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Historia'), array('controller' => 'historia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historium'), array('controller' => 'historia', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->