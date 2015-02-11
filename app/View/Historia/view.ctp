<div id="general">
	<center>
		<?php echo $this->element('b1');?>
	  <center>
	<div class="col-lg-12">
		
		<br>
			<h3>Detalles de Historia</h3>
		<br>
		<div class="bloque"> 
		
		<div class="row">
			<div class="col col-sm-7">
				<?php echo $this->Html->image('../files/historium/foto/'. $historium['Historium']['foto_dir'].'/'.'vga_'.$historium['Historium']['foto']); ?>
			</div>
			<div class="clol col-sm-5">

			<br>
				<h3>Datos</h3>
				<br><br>
				
				<strong>Nombre : <?php echo $this->Html->link($historium['Paciente']['nombre'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?> </strong> 
				<br>
				
				<strong>Cedula : <?php echo $this->Html->link($historium['Paciente']['dni'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?> </strong>
				<br>
				
				<strong>Enfermedad : <?php echo h($historium['Historium']['enfermedad']); ?></strong>
				<br>
				<strong>Observaciones : <?php echo h($historium['Historium']['observaciones']); ?></strong>
				<br>
				<strong>Ultima Cita : <?php echo h($historium['Historium']['modified']); ?></strong>

			</div>
		</div>
		<!-- <table class="table table-striped table-hover">
		
		
		<br><br>
		<tbody>
			<tr class="success">
				
				<td>Paciente</td>
				<td>Enfermedad</td>
				<td>Imagen</td>
				<td>Observaciones</td>
				<td>Ultima Cita</td>
				
			</tr>
			
			<tr>
				
				
				
				
				<td><?php echo $this->Html->link($historium['Paciente']['dni'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>&nbsp;</td>
				<td><?php echo h($historium['Historium']['enfermedad']); ?>&nbsp;</td>
				<td><?php echo $this->Html->image('../files/historium/foto/'. $historium['Historium']['foto_dir'].'/'.'vga_'.$historium['Historium']['foto']); ?>&nbsp;</td>
				<td><?php echo h($historium['Historium']['observaciones']); ?>&nbsp;</td>
				<td><?php echo h($historium['Historium']['modified']); ?>&nbsp;</td>
			
				
				
			</tr>
	    
		</tbody>
	</table> -->
		</div>
		</div>
	</div>
	<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Lista Historias'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
		<?php echo $this->Html->link(__('Nueva Historia'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Imprimir'), array('action' => 'view', $historium['Historium']['id'].'.pdf' ),array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

</div>
<!-- <div class="historia view">
<h2><?php echo __('Historium'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($historium['Historium']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historium['Paciente']['dni'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enfermedad'); ?></dt>
		<dd>
			<?php echo h($historium['Historium']['enfermedad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($historium['Historium']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($historium['Historium']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($historium['Historium']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Historium'), array('action' => 'edit', $historium['Historium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Historium'), array('action' => 'delete', $historium['Historium']['id']), array(), __('Are you sure you want to delete # %s?', $historium['Historium']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Historia'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historium'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->