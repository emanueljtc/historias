<div id="general">
<center>
<h2> Edicion de Departamento</h2>
<br><br>
		<div  class="col-lg-6">
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
		
		<div class="btn-group btn-group-justified">
			  
				<?php echo $this->Html->link(__('Nuevo Departamento'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
				<?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
				<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
		</div>
</center>
</center>
</div>