<h2>Registro de Pacientes</h2>
<br><br>
<center>
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
					?>
			</fieldset>
		</div>
		<input type="submit" value"Submit" class="btn btn-primary">
		
	</div>
</div>

<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Historia'), array('controller' => 'historia', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nueva Historia'), array('controller' => 'historia', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
</div>

