<div class="historia index">
	<div class="page_header">
		<center>
		<h2><?php echo __('Lista de Historias'); ?></h2>
		</center>
		<br>
	</div>
	<center>
	<div class="col-lg-12">
		<table class="table table-striped table-hover">
					
			
			<tr class="success">
					
					<th><?php echo $this->Paginator->sort('paciente_id'); ?></th>
					<th><?php echo $this->Paginator->sort('enfermedad'); ?></th>
					<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
					<th><?php echo $this->Paginator->sort('creado'); ?></th>
					<th><?php echo $this->Paginator->sort('modificado'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			
			<tbody>
				<?php foreach ($historia as $historium): ?>
						<tr>

							<td>
								<?php echo $this->Html->link($historium['Paciente']['dni'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
							</td>
							<td><?php echo h($historium['Historium']['enfermedad']); ?>&nbsp;</td>
							<td><?php echo h($historium['Historium']['observaciones']); ?>&nbsp;</td>
							<td><?php echo h($historium['Historium']['created']); ?>&nbsp;</td>
							<td><?php echo h($historium['Historium']['modified']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__('V'), array('action' => 'view', $historium['Historium']['id']), array('class' => 'btn btn-sm btn-default')); ?>
								<?php echo $this->Html->link(__('E'), array('action' => 'edit', $historium['Historium']['id']), array('class' => 'btn btn-sm btn-default')); ?>
								<?php echo $this->Form->postLink(__('D'), array('action' => 'delete', $historium['Historium']['id']), array('class' => 'btn btn-sm btn-default'), __('¿Seguro que quieres El # %s?', $historium['Historium']['id'])); ?>
							</td>
						</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<paginador><!-- etiqueta personalidad-->
		<?php echo $this->element('paginador');?>
	</paginador>

	<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Editar Historia'), array('action' => 'edit', $historium['Historium']['id']), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Lista Historias'), array('action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nueva Historia'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>
	</div>