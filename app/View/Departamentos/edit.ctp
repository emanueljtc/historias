<div id="general">
      <center>
		<?php echo $this->element('b4');?>
	  </center>
	<center>

		<div  class="col-lg-6">
				<br><br>
			<h3>Lista General </h3>
			<br>
				<center>
			<div class="bloque">
				
				<?php echo $this->Form->create('Departamento', array('class'=>'form-horizontal', 'role'=>'form')); ?>
						<div class="form-group">
							<fieldset>
								
									<?php echo $this->Form->input('id'); ?>
									<?php echo $this->Form->input('nombre', array('class'=>'form-control'));?>
							</fieldset>
						</div>
					<br>
					<center>
						<input type="submit" value="Actualizar" class="button float-shadow">
					<center>
				</form>
			</div>
		</div>
		<br>
		<div class="btn-group btn-group-justified">
		  
			<?php echo $this->Html->link(__('Nuevo Departamento'), array('action' => 'add'), array('class' => 'btn btn-info')); ?></li>
			<?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
		</div>
<div>
</center>
</center>
</div>