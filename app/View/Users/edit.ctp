<div id="general">
	<center>
		<?php echo $this->element('b3');?>
	  <center>
	<div  class="col-lg-6">
				<br>
				<h3>Editar Usuario </h3>
				<br>
					<div class="bloque">
					<?php echo $this->Form->create('User'); ?>
						<fieldset>
					
						<?php
							echo $this->Form->input('id');
							echo $this->Form->input('departamento_id',array('class'=>'form-control'));
							echo $this->Form->input('groups_id');
							
							
							echo $this->Form->input('username', array('class'=>'form-control'));
							echo $this->Form->input('password', array('class'=>'form-control'));
							echo $this->Form->input('nombre', array('class'=>'form-control'));
							echo $this->Form->input('apellido', array('class'=>'form-control'));
							echo $this->Form->input('dni', array('class'=>'form-control'));
							echo $this->Form->input('email', array('class'=>'form-control'));
						?>
						</fieldset>
						<br>
					<center>
						<input type="submit" value="Actualizar" class="button float-shadow">
					<center>
					</div>
	</div>
	<br>
	<div class="btn-group btn-group-justified">
		  
			<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-info'), array('class' => 'btn btn-default')); ?></li>
			<?php echo $this->Html->link(__('Lista Usuarios'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Nuevo Departamento'), array('controller' => 'departamentos', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
		</div>
</div>
