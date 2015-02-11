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
<div id="general">
	<center>
		<?php echo $this->element('b1');?>
	  </center>
	<div class="col-lg-6">
		<br>
			<h3>Añadir Historia </h3>
		<br>
		<div class="bloque">
			<div class="avatar">
					
			</div>
			<?php echo $this->Form->create('Historium', array('type'=>'file', 'novalidate'=>'novalidate')); ?>
				<div class="form-group">
					<fieldset>
						
						<?php
							echo $this->Form->input('paciente_id',array('class'=>'form-control'));
							echo $this->Form->input('enfermedad',array('class'=>'form-control'));
							echo $this->Form->input('foto',array('type'=>'file','label'=>'Imagen','class'=>'form-control'));
							echo $this->Form->input('foto_dir',array('type'=>'hidden'));
							echo $this->Form->input('observaciones',array('class'=>'form-control'));
						?>
					</fieldset>
				</div>
				<br>
				<center><input type="submit" value="Guardar" class="button float-shadow"></center>
				
			</div>
			
			
	</div>
		<div class="btn-group btn-group-justified">
		  
			<?php echo $this->Html->link(__('Nuevo Historia'), array('action' => 'add'), array('class' => 'btn btn-info')); ?></li>
			<?php echo $this->Html->link(__('Lista Historias'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Nueva Paciente'), array('controller'=>'pacientes','action' => 'add'), array('class' => 'btn btn-primary')); ?>
		</div>
	</center>
</div>