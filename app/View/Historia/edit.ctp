<div id= general>
	<div class="col-lg-6">
		<div class="bloque">
				<center><legend><?php echo __('Editar Historia'); ?></legend></center>
			<?php echo $this->Form->create('Historium'); ?>
				<fieldset>
					
				<?php
					echo $this->Form->input('id', array('class'=>'form-control'));
					echo $this->Form->input('paciente_id', array('class'=>'form-control','label'=>'Paciente Cedula'));
					echo $this->Form->input('enfermedad', array('class'=>'form-control'));
					echo $this->Form->input('observaciones', array('class'=>'form-control'));
				?>
				</fieldset>
			<br>
		<center>
		<input type="submit" value="Actualizar" class="button float-shadow">
		</center>
		</div>
	</div>
		
	<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Paciente'), array('controller' => 'pacientes', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Lista Historias'), array('action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nueva Historia'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>
	</div>
</div>