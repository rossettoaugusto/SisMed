<?php
	session_start();
?>

<html>
<head>
	<title>Boas Vindas</title>
		<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
     	<script src="../js/js/jquery-1.9.1.js"></script>
    	 <script src="../js/js/jquery-ui-1.10.3.custom.js"></script>
    	 <style>
     	 body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      	}
      
      .alinhamento{
          text-align: center;
          
      }

    </style>
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
          <a class="brand" href="adm_logado.php">Receituario Medico</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="indexMedico.php">Cadastrar Médico</a></li>
              <li><a href="indexUsuario.php">Cadastrar Usuario</a></li>
              <li><a href="sair.php">Sair</a></li>
              </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
	<div>
		
		
		
		
				<center>
		<div >
			
				
			<?php					
				if(isset($_SESSION['login'])){
					echo ("Seja Bem Vindo Usuario ". $_SESSION['login']);
					if(isset($_COOKIE['login'])){
						setcookie("login",$cont,time()+600);
					}
				}else{	
					echo ("<script>location.replace ('teste.php'); </script>");
				}
			?>
			
			
			</div>	
			</center>
		</div>	
		
		

<script src="../bootstrap/js/bootstrap.min.js"></script>

</body>


</html>