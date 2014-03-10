<!DOCTYPE html>
<html>
  <head>
    <title>Receituario Medico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../bootstrap/css/signin.css" rel="stylesheet" media="screen">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="teste.php">Receituario Medico 2.0</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
                            
            </ul>
            <form method="POST" action="consulta.php" class="navbar-form pull-right">
              <input class="span2" type="text"  name="login" placeholder="Login" required/>
              <input class="span2" type="password" name="senha" placeholder="Senha" required/>
               <input type="submit" name="logar" value="Usuario" class="btn" />
               <input type="submit" name="adm" value="Administrador" class="btn" />
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

     <div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			
			<div class="hero-unit">
				<h1>
					Receituario Medico 2.0
				</h1>
				<p>
					Este e um Prototipo de um Receituario Medico Desenvolvidos por Alunos do Curso de Sistemas Para Internet como forma de Avaliacao da Disciplina de Programacao para Web II .
				</p>
				
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<h2>
				Pacientes
			</h2>
			<p>
				Possui um Banco de Dados com Muitos Pacientes Cadastrados, com historico de consultas e lesoes.
			</p>
			
				
			
		</div>
		<div class="span4">
		    <h2>
				Medicos
			</h2>
			
			<p>
				Grande numero de Medicos Cadastrados com Registro no CRM e Cadastrados no RM 2.0	
			</p>
			
		</div>
		<div class="span4">
			<h2>
				Medicamentos
			</h2>
			<p>
				Possui uma Ampla Lista de Medicamentos Cadastrados em um Banco de Dados, com o intuito de ajudar o Médico com o receituario
			</p>
			
		</div>
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>





