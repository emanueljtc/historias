<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Restaurante</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://localhost/restaurante/">Home</a></li>

             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Meseros<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista Meseros',array('controller'=>'meseros','action'=>'index'))?></li>
                <li><?php echo $this->Html->link('Registrar Mesero',array('controller'=>'meseros','action'=>'nuevo'))?></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mesas<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista Mesas',array('controller'=>'mesas','action'=>'index'))?></li>
                <li><?php echo $this->Html->link('Registrar Mesero',array('controller'=>'mesas','action'=>'nueva'))?></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
