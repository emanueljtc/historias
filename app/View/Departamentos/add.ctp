
<div class="col-lg-6">
	<div class="well bs-component">

		<?php echo $this->Form->create('Departamento', array('class'=>'form-horizontal', 'role'=>'form')); ?>
			<div class="form-group">
				<fieldset>
					<legend><?php echo __('Registrar Departamento'); ?></legend>
						<?php echo $this->Form->input('nombre', array('class'=>'form-control'));?>
				</fieldset>
			</div>
			<input type="submit" value"Submit" class="btn btn-primary">
		</form>
		</div>
	
	</div>

	
</div>