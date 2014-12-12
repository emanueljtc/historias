<style type="text/css">
	 .avatar {
    width: 100px;
    height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #000;
    background-size: cover;
    background-image: url('../img/usuario.png');
   
  }

</style>
<center><h2>Registro de Usuarios</h2></center>
<br><br>
<center>
<div class="col-lg-6">
	<div class="bloque">
	<div class="avatar">
	</div>
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
			
		<?php
			echo $this->Form->input('group_id', array('class'=>'form-control'));

			echo $this->Form->input('departamento_id', array('class'=>'form-control'));
			echo $this->Form->input('username',array('class'=>'form-control'));
			echo $this->Form->input('password',array('class'=>'form-control'));
			echo $this->Form->input('nombre',array('class'=>'form-control'));
			echo $this->Form->input('apellido',array('class'=>'form-control'));
			echo $this->Form->input('dni',array('class'=>'form-control','type'=>'integer','label'=>'Cedula'));
			echo $this->Form->input('email',array('class'=>'form-control'));

		?>
		</fieldset><br>
		
		<center>
		<input type="submit" value="Guardar" class="button float-shadow">
		<center>

	</div>
	

</div>
<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Departamentos'), array('controller' => 'departamentos', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nuevo Departamento'), array('controller' => 'departamentos', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
</div>