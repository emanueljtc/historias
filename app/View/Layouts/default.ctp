<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo $this->Html->meta('icon'); ?>
		<title>
			H.M:
			<?php echo $this->fetch('title'); ?>
		</title>
		<?php
	   /* Llamado de los CSS */
     	 echo $this->Html->css(array('bootstrap'));
       	echo $this->Html->css(array('bootstrap.min'));
       	//echo $this->Html->css(array('bootswatch.min'));
       echo $this->Html->css(array('skel.css'));
        echo $this->Html->css(array('style.css'));
       echo $this->Html->css(array('style-desktop.css'));
       echo $this->Html->css(array('style-wide.css'));
       /* -------------------------------------------*/
       echo $this->Html->script(array('bootstrap.min'));
       echo $this->Html->script(array('jquery.min'));
       echo $this->Html->script(array('skel.min'));
       echo $this->Html->script(array('skel-layers.min'));
       echo $this->Html->script(array('init.js'));
       echo $this->Html->script(array('docs.min.js'));
       // echo $this->Html->script(array('',''));
       // echo $this->Html->script(array('modernizr.foundation.js'));
       
		?>
  </head>
<body class="left-sidebar">

		<!-- Wrapper -->
			<div id="wrapper">
					
				<!-- Content -->
					<div id="content">
						<div class="inner">
					
							<!-- Post -->
								<article class="box post post-excerpt">
									
									
									<?php echo $this->Session->flash(); ?>
									<?php echo $this->fetch('content'); ?>
								</article>
						
							<!-- Post -->
								
							

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
					
						<!-- Logo -->
							<h1 id="logo"><a href="#">Historias Medicas</a></h1>
					
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li >
									<?php echo $this->Html->link(__(' Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> 
									</li>
									<li>
									<?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?>
									</li>
									<li>
									<?php echo $this->Html->link(__('Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?>
									</li>
									<li>
									<?php echo $this->Html->link(__('Historias'), array('controller' => 'historia', 'action' => 'index')); ?>
									</li>
									<li>
									<?php echo $this->Html->link(__('Salir'), array('controller' => 'users', 'action' => 'logout')); ?>
									</li>
								</ul>

							</nav>

						<!-- Search -->
							<section class="box search">
								<form method="post" action="#">
									<input type="text" class="text" name="search" placeholder="Search" />
								</form>
							</section>
					
						
					
					
						
						<!-- Copyright -->
							<ul id="copyright">
								<li>&copy; Creado por :</li><li><a href="https://www.facebook.com/emanuel.torresclemente">Emanuel Torres Clemente</a></li>
							</ul>

					</div>

			</div>

	</body>

  
</html>
