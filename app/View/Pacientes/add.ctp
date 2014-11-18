<div class="pacientes form">
<?php echo $this->Form->create('Paciente',array('class'=>'form-horizontal', 'role'=>'form')); ?>
	<div class="form-group">
		<fieldset>
			<legend><?php echo __('Registrar Paciente'); ?></legend>
				<?php
					echo $this->Form->input('nombre', 
						array('class'=>'form-control'));
					echo $this->Form->input('apellido', 
						array('class'=>'form-control'));
					echo $this->Form->input('dni',
					    array('label'=>'Cedula','class'=>'form-control'));
				?>
		</fieldset>
	</div>
	<input type="submit" value"Submit" class="btn btn-primary">
	</div>
</div>

<div class="row">

    <div class="list-group col-md-2 small">
		<a href="#" class="list-group-item active"><?php echo __('Acciones'); ?></a>
		<?php echo $this->Html->link(__('Lista Pacientes'), array('action' => 'index'),array('class' => 'list-group-item')); 
		?>
		<?php echo $this->Html->link(__('Lista Historias'), array('controller' => 'historia', 'action' => 'index'), array('class' => 'list-group-item'), array('class' => 'list-group-item')); 
		?> 
		<?php echo $this->Html->link(__('Nueva Historia'), array('controller' => 'historia', 'action' => 'add'), array('class' => 'list-group-item')); 
		?> 
		
    </div>
</div>
