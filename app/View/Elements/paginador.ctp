<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de  {:pages}, Observando {:current} registros de cada {:count} total, apartir del registro {:start}, finalizando en  {:end}')
		));
		?>	
		<nav>
		  <ul class="pagination">
		    <li><?php echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled')); ?></li>
		    <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
		    <li><?php echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled')); ?></li>
		  </ul>
		</nav>