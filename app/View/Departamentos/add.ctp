<div class="departamentos form">
<?php echo $this->Form->create('Departamento', array('class'=>'form-horizontal', 'role'=>'form')); ?>
	<div class="form-group">
		<fieldset>
			<legend><?php echo __('Add Departamento'); ?></legend>
				<?php echo $this->Form->input('nombre', array('class'=>'form-control'));?>
		</fieldset>
	</div>
	<input type="submit" value"Submit" class="btn btn-primary">
</form>
</div>

<div class="row">
	<div class="list-group col-md-2 small">
		<a href="#" class="list-group-item active"><?php echo __('Actions'); ?></a>
		<?php echo $this->Html->link(__('List Departamentos'), array('action' => 'index'), array('class' => 'list-group-item')); ?>
		<?php echo $this->Html->link(__('List Departamento Pacientes'), array('controller' => 'departamento_pacientes', 'action' => 'index'), array('class' => 'list-group-item')); ?>
		<?php echo $this->Html->link(__('New Departamento Paciente'), array('controller' => 'departamento_pacientes', 'action' => 'add'), array('class' => 'list-group-item')); ?>
		<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => 'list-group-item')); ?>
		<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'list-group-item')); ?>
	</div>
</div