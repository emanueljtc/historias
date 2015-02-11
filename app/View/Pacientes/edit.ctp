<div id="general">
	<center>
		<?php echo $this->element('b2');?>
	  </center>
<div class="col-lg-6">
		<br>
			<h3>Editar Paciente</h3>
		<br>
	<div class="bloque">

	<?php echo $this->Form->create('Paciente', array('type'=>'file', )); ?>
		<fieldset>
			
		<?php
			echo $this->Form->input('id', array('class'=>'form-control'));
			echo $this->Form->input('foto',array('type'=>'file','label'=>'Foto','class'=>'form-control'));
						echo $this->Form->input('foto_dir',array('type'=>'hidden'));
			echo $this->Form->input('nombre', array('class'=>'form-control'));
			echo $this->Form->input('apellido', array('class'=>'form-control'));
			echo $this->Form->input('dni', array('class'=>'form-control'));
			echo $this->Form->input('edad', array('class'=>'form-control','type'=>'text'));
			echo $this->Form->input('direccion', array('class'=>'form-control'));
			echo $this->Form->input('sexo', array('class'=>'form-control'));
			echo $this->Form->input('nacionalidad'
							,array('class'=>'form-control','type'=>'select','options'=>array('Venezolana'=>'Venezolana','Colombiana'=>'Colombiana','Brasileña'=>'Brasileña','Argentina'=>'Argentina','Uruguaya'=>'Uruguaya')));
						echo $this->Form->input('ciudad',array('class'=>'form-control'));
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
	<br>

	<div class="btn-group btn-group-justified">
		  
			<?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'add'), array('class' => 'btn btn-info'), array('class' => 'btn btn-default')); ?></li>
			<?php echo $this->Html->link(__('Lista Pacientes'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Nueva Historia'), array('controller' => 'historia', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
	</div>
</div>