<div id="general">
<div class="col-lg-6">
	<div class="bloque">

	<?php echo $this->Form->create('Paciente'); ?>
		<fieldset>
			<center><legend><?php echo __('Editar Paciente'); ?></legend></center>
		<?php
			echo $this->Form->input('id', array('class'=>'form-control'));
			echo $this->Form->input('nombre', array('class'=>'form-control'));
			echo $this->Form->input('apellido', array('class'=>'form-control'));
			echo $this->Form->input('dni', array('class'=>'form-control'));
			echo $this->Form->input('edad', array('class'=>'form-control'));
			echo $this->Form->input('direccion', array('class'=>'form-control'));
			echo $this->Form->input('sexo', array('class'=>'form-control'));
			echo $this->Form->input('fecha_nacimiento', array('class'=>'form-control'));
			echo $this->Form->input('telefono', array('class'=>'form-control','type'=>'numeric'));
			echo $this->Form->input('g_sanguineo',array('class'=>'form-control','type'=>'select','options'=>array('O+'=>'O +','O-'=>'O -','A+'=>'A +','A-'=>'A -','B+'=>'B +','B-'=>'B -','AB+'=>'AB +','AB-'=>'AB -'),'label'=>'Grupo Sanguineo'));

		?>
		</fieldset>
		<br>
		<center>
		<input type="submit" value="Actualizar" class="button float-shadow">
		</center>
	</div>
</div>
	<div class="btn-group btn-group-justified">
		  
			<?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
			<?php echo $this->Html->link(__('Lista Historia'), array('controller' => 'historia', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
			<?php echo $this->Html->link(__('Nueva Historia'), array('controller' => 'historia', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
	</div>

</div>