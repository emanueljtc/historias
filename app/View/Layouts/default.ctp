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
     //LLAMANDO LOS CSS
			//echo $this->Html->meta('icon');
      //echo $this->Html->css(array('cake.generic.css'));
			//echo $this->Html->css(array('bootstrap.css'));
			//echo $this->Html->css(array('starter-template.css'));
			echo $this->Html->css(array('lavish-bootstrap.css'));
      //LAMANDO LOS JS
      //echo $this->Html->script(array('jquery-1.11.1.min.js')); 
      //echo $this->Html->script(array('bootstrap.js')); 
        echo $this->Html->css(array('bootstrap.min','bootstrap-theme.min'));
        echo $this->Html->script(array('jquery.min','docs.min','bootstrap.min'));
		?>
  </head>

  <body>

    <?php echo $this->element('menu');?>
    <div class="container">
    	<div class="starter-template">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>

    </div><!-- /.container -->

		<div id="footer">
			
		</div>


		<?php echo $this->element('sql_dump'); ?>
  </body>
</html>
