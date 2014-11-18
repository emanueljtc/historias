<div class="historia view">
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
