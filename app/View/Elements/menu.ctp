<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><?php echo $this->Html->link('Departamentos', '/departamentos'); ?></li>
            <li><?php echo $this->Html->link('Historias', '/historia'); ?></li>
            <li><?php echo $this->Html->link('Pacientes', '/pacientes'); ?></li>
            <li><?php echo $this->Html->link('Usuarios', '/users'); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
