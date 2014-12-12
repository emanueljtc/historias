<style type="text/css">
	 .avatar {
    width: 100px;
    height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #000;
    background-size: cover;
    background-image: url('../img/historia.png');
   
  }

</style>
<center>
<h2>Registro de Historia</h2><br><br>
<div class="col-lg-6">
	<div class="bloque">
		<div class="avatar">
				
		</div>
		<?php echo $this->Form->create('Historium'); ?>
			<div class="form-group">
				<fieldset>
					
					<?php
						echo $this->Form->input('paciente_id',array('class'=>'form-control'));
						echo $this->Form->input('enfermedad',array('class'=>'form-control'));
						echo $this->Form->input('observaciones',array('class'=>'form-control'));
					?>
				</fieldset>
			</div>
			<br>
			<center><input type="submit" value="Guardar" class="button float-shadow"></center>
			
		</div>
		
		
</div>
	<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Historias'), array('action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nueva Historia'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>
	</div>
