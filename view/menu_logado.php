	
	
	<?php
		if(isset($_SESSION['login'])){
			$data = date("d/m/Y");
		    $hora = date("h:i");
			
		?>
		
	 <div class="navbar navbar-inverse navbar-fixed-top">
       <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="usuario_logado.php">Receituario Medico</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
             
           	<li><a href='indexPaciente.php'>Cadastrar Pacientes</a></li>
			<li><a href='listarUmPaciente.php'>Listar Pacientes</a></li>
			
			<li><a href='indexCadastrarConsulta.php'>Cadastra Consultas</a></li>
			<li><a href='indexConsultas.php'>Historico de Consultas</a></li>
			<li><a href='indexMedicamentos.php'>Cadastrar Medicamentos</a></li>
		
			
			<li><a href='sair.php'>Sair</a></li>
              </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


	<?php
			}else{
				echo ("<script>location.replace ('teste.php'); </script>");
				}
		?>
				