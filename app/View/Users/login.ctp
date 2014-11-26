
<center>
<div class="col-lg-6">
	<div class="well bs-component">
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
		    <fieldset>
		        <legend>
		            <?php echo __('Ingresa tu nombre y clave de usuario'); ?>
		        </legend>
		        <?php echo $this->Form->input('username',array('class'=>'form-control'));
		        //echo $this->Form->input('email');
		        echo $this->Form->input('password',array('class'=>'form-control'));
		    ?>
		    </fieldset>
		    <br>
		<center><?php echo $this->Form->end("Entrar",array('class'=>'form-control')); ?></center>
	</div>			
</div>
