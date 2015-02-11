<?php echo $this->Html->css(array('login'));?>
<center>
		<?php echo $this->element('b5');?>
	  </center>
	  
<br><br><br><br>
<div class="login">
	<div class="login_interno">
		<?php echo $this->Session->flash('auth',array('class'=>'alert alert-dismissable alert-success')); ?>
		<div class="avatar">
			
		</div>
		<?php echo $this->Form->create('User'); ?>
		    <fieldset>
		        
		        <?php echo $this->Form->input('username',array('class'=>'form-control'));
		        
		        echo $this->Form->input('password',array('class'=>'form-control'));
		    ?>
		    </fieldset>
		    <br>
		<center>
		<input type="submit" value="Entrar" class="button float-shadow">
		</center>
	</div>	

</div>


