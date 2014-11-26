<h2>Registro Departamentos</h2>
<br><br>
<div class="col-lg-6">
	<div class="well bs-component">

		<?php echo $this->Form->create('Departamento', array('class'=>'form-horizontal', 'role'=>'form')); ?>
			<div class="form-group">
				<fieldset>
					<center><legend><?php echo __('Registre El Nuevo Departamento'); ?></legend></center>
						<?php echo $this->Form->input('nombre', array('class'=>'form-control'));?>
				</fieldset>
			</div>
			<center><?php echo $this->Form->end("Guardar",array('class'=>'form-control')); ?><center>
		</form>
		</div>
	
	</div>

	
</div>
<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Departamento'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
</div>