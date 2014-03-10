<?php 
session_start();
 ?>
<?php 
	if(isset($_SESSION['login'])){
?>
<!doctype html>
<html lang="pt-br">

<head>
	<title>MVC Cadastra Paciente</title>
<meta charset="utf-8">
	
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
<?php
	$login = "";
	$senha="";
?>

	
	<div >
		<?php
			include("menu_adm.php");
		?>
	</div>
		<center>
		<h1>Cadastro de login</h1>
	
	<form method="POST" action="indexUsuario.php">
		<h2 class="demoHeaders"></h2>
				
				<div>
					<label  for="login" >Login:</label></div><div><label><input type="text" name="login" id="login" maxlength=60 size=40 /></label>
				</div>
				<br>
					<div>
						<label width="50" bgcolor="#DEB887" for="senha" >Senha:</label></div><div><label><input type="password" name="senha" id="senha" maxlength=10 size=30 /></label>
					</div>
					<div>
						<label width="50" bgcolor="#DEB887" for="senha2" >Digite novamente sua Senha:</label></div><div><label><input type="password" name="senha2" id="senha2" maxlength=10 size=30 /></label>
					</div>
					
					</script>
																			
					<script type="text/javascript">
						$(function(){
							$('#senha2').blur(function(){
													
								if($('#senha').val() == $('#senha2').val())
									alert("SENHAS IGUAIS");
								else
									alert("SENHAS DIFERENTES");

								});
							});
					</script>
					<br>
					<br>
					<div>
						<input type="submit" name="cadastrar" value="Cadastrar" />
						<input type="submit" name="listarTodos" value="Listar Cadastrados" />
						<!--<input type="submit" name="listarUmPaciente" value="Listar Um Paciente" />-->
					</div>
				
		</form>
		<table  class="table table-striped" cellpadding="3" cellspadding="3">
			<tr>
				<td width="214" bgcolor="#99FF00">CODIGO</td>
				<td width="214" bgcolor="#99FF00">LOGIN</td>
			</tr>
			
			<?php
			//error_reporting(0);
					require('../controll/Usuario.controll.php');
					$cad = new Control();
					if(isset($_POST['cadastrar'])){
						
						$Login = $_POST['login'];
						$Senha = $_POST['senha'];
						$cad->cadUsuario($Login,$Senha);
						if($cad==true){
							echo"<br>Usuario cadastrado com sucesso<br>";
						}
					}
			if(isset($_POST['listarTodos'])){
					$arr = $cad->listaUsu();
					
						for($i=0;$i<count($arr);$i++){
							$codigo=$arr[$i]['codigo'];
							$login=$arr[$i]['login'];
			
					echo"<tr><td>"
						 .$arr[$i]['codigo'].
					"</td>
					<td>"
						.$arr[$i]['login'].
					"</td>
						<td>
							<a href='indexUsuario.php?excluir=excluir&codigo=".$codigo."'><i class='icon-trash'></i></a>
						</td>
					</tr>";
				}
			}
		?>
		</table>
	</center>
	<?php 
			if (isset($_GET['excluir'])){
				$codigo = $_GET['codigo'];
				$cad->exclUsuario($codigo);
				if($cad==true){
					echo"usuario excluido com sucesso!!";
				}
			}
		
	?>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	</body>

</html>
<?php
}else{
	echo ("<script>location.replace ('teste.php'); </script>");
}
?>

