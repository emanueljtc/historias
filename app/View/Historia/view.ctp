<div id="general">
<center><br><br><br><br><br><br>
	<div class="col-lg-12">
		<div class="bloque"> 
		<h2><?php echo __('Historia del Paciente'); ?></h2>
		<table class="table table-striped table-hover">
		
		
		<br><br>
		<tbody>
			<tr class="success">
				
				<td>Paciente</td>
				<td>Enfermedad</td>
				<td>Observaciones</td>
				<td>Ultima Cita</td>
				
			</tr>
			
			<tr>
				
				
				
				
				<td><?php echo $this->Html->link($historium['Paciente']['dni'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>&nbsp;</td>
				<td><?php echo h($historium['Historium']['enfermedad']); ?>&nbsp;</td>
				<td><?php echo h($historium['Historium']['observaciones']); ?>&nbsp;</td>
				<td><?php echo h($historium['Historium']['modified']); ?>&nbsp;</td>
			
				
				
			</tr>
	    
		</tbody>
	</table>
		</div>
		</div>
	</div>
	<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Editar Historia'), array('action' => 'edit', $historium['Historium']['id']), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Lista Historias'), array('action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nueva Historia'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>
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