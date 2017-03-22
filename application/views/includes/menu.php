    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://127.0.0.1/subs/index.php/">SUBS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar<span class="caret"></span></a>
              <ul class="dropdown-menu">
				<?php $cadastrar='http://127.0.0.1/subs/index.php/cadastrar'?>
				<li role="separator" class="divider"></li>
                <li class="dropdown-header">Pessoa</li>
				<li><a href="<?php echo $cadastrar."/pessoa"?>">Pessoa</a></li>
				<li><a href="<?php echo $cadastrar."/generico"?>">Usuario Generico</a></li>
                <li><a href="<?php echo $cadastrar."/adm"?>">Administrador(a)</a></li>
                <li><a href="<?php echo $cadastrar."/enf"?>">Enferemeira(o)</a></li>
				<li><a href="<?php echo $cadastrar."/farm"?>">Farmaceutico(a)</a></li>
				<li><a href="<?php echo $cadastrar."/medico"?>">Medico</a></li>

                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Medicamento</li>
                <li><a href="#">Medicamento</a></li>
				<li><a href="#">Entrada Medicamento</a></li>
                <li><a href="#">Saida Medicamento</a></li>
				
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Consulta</li>				
				<li><a href="#">Consulta</a></li>
              </ul>
            </li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Editar<span class="caret"></span></a>
              <ul class="dropdown-menu">
				
				<li role="separator" class="divider"></li>
                <li class="dropdown-header">Pessoa</li>
				<li><a href="#">Pessoa</a></li>
				<li><a href="#">Usuario Generico</a></li>
                <li><a href="#">Administrador(a)</a></li>
                <li><a href="#">Enferemeira(o)</a></li>
				<li><a href="#">Farmaceutico(a)</a></li>
				<li><a href="#">Medico</a></li>

                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Medicamento</li>
                <li><a href="#">Medicamento</a></li>
				<li><a href="#">Entrada Medicamento</a></li>
                <li><a href="#">Saida Medicamento</a></li>
				
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Consulta</li>				
				<li><a href="#">Consulta</a></li>
              </ul>
            </li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Visualizar<span class="caret"></span></a>
              <ul class="dropdown-menu">
			  
				<li role="separator" class="divider"></li>
                <li class="dropdown-header">Pessoa</li>
				<li><a href="#">Pessoa</a></li>
				<li><a href="#">Usuario Generico</a></li>
                <li><a href="#">Administrador(a)</a></li>
                <li><a href="#">Enferemeira(o)</a></li>
				<li><a href="#">Farmaceutico(a)</a></li>
				<li><a href="#">Medico</a></li>

                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Medicamento</li>
                <li><a href="#">Medicamento</a></li>
				<li><a href="#">Entrada Medicamento</a></li>
                <li><a href="#">Saida Medicamento</a></li>
				
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Consulta</li>				
				<li><a href="#">Consulta</a></li>
              </ul>
            </li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Deletar<span class="caret"></span></a>
              <ul class="dropdown-menu">
			  
				<li role="separator" class="divider"></li>
                <li class="dropdown-header">Pessoa</li>
				<li><a href="#">Pessoa</a></li>
				<li><a href="#">Usuario Generico</a></li>
                <li><a href="#">Administrador(a)</a></li>
                <li><a href="#">Enferemeira(o)</a></li>
				<li><a href="#">Farmaceutico(a)</a></li>
				<li><a href="#">Medico</a></li>

                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Medicamento</li>
                <li><a href="#">Medicamento</a></li>
				<li><a href="#">Entrada Medicamento</a></li>
                <li><a href="#">Saida Medicamento</a></li>
				
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Consulta</li>				
				<li><a href="#">Consulta</a></li>
              </ul>
            </li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
            <li><a href="http://127.0.0.1/subs/index.php/login/logoff">Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 