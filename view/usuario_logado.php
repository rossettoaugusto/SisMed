<?php
	session_start();
?>

<html>
<head>
	<title>Boas Vindas</title>
	 <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
 <link href="../js/css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
 <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
 <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
 <script src="../js/js/jquery-1.9.1.js"></script>
 <script src="../js/js/jquery-ui-1.10.3.custom.js"></script>
	
	<style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
 </style>
 	<style type="text/css">
						
			.carregando{
				color:#666;
				display:none;
			}
		</style>
</head>

<body> 
	
	<div  >
		
		
		
		
		<div >
			<?php
				include("menu_logado.php");
			?>
		</div>
		<center>
		<div >
			
				
			<?php					
				if(isset($_SESSION['login'])){
					echo ("Seja Bem Vindo Usuario ". $_SESSION['login']);
					if(isset($_COOKIE['login'])){
						setcookie("login",$cont,time()+600);
					}
				}else{	
					echo ("<script>location.replace ('login.php'); </script>");
				}
			?>
			
			
			</div>	
			</center>
		</div>	
		
		<script src="../bootstrap/js/bootstrap.min.js"></script>




</body>


</html>