<div id="General">
	<center>
		<?php echo $this->element('b4');?>
	  </center>
		<div class="col-lg-6">
				<br>
					<h3>Añadir Departamento</h3>
				<br><br>
			<div class="bloque">

				<?php echo $this->Form->create('Departamento', array('class'=>'form-horizontal', 'role'=>'form')); ?>
					<div class="form-group">
						<fieldset>
							
								<center><?php echo $this->Form->input('nombre', array('class'=>'form-control'));?></center>
						</fieldset>
					</div>
					<center>
					<input type="submit" value="Guardar" class="button float-shadow">
				</form>
				</div>
			
			</div>

			
		</div>
		<br><br>
		<div class="btn-group btn-group-justified">
			  
				<?php echo $this->Html->link(__('Nuevo Departamento'), array('action' => 'add'), array('class' => 'btn btn-info')); ?></li>
				<?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
		</div>
</div>