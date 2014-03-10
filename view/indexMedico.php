<?php 
session_start();
 ?>
<?php 
	if(isset($_SESSION['login'])){
?>
<!doctype html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<title>MVC Cadastro de Médicos</title>
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
		</style>	<script>
	$(function() {
		
		$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"Masculino",
			"Femenino"
		];
		$( "#sexo" ).autocomplete({
			source: availableTags
		});
		
				
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		
	});
	</script>
	
	
</head>
<body>
<?php
	$codigo="";
	$identidade="";
	$nomemedico="";
	$crm="";
	$sexo="";
	$telefone="";
?>
	
	<div >
		<?php
			include("menu_adm.php");
		?>
	</div>
	<center>
	<h1>Cadastro de Médicos</h1>
		<form method="POST" action="indexMedico.php">
				
					<div>
						<label for="identidade">Identidade Médico:</label></div><div><label><input type="text" name="identidade" id="identidade"  maxlength=10 size=30 /></label>
					</div>
					<br>
					<div>
						<label for="nome">Nome Médico: </label></div><div><label><input type="text" name="nome"  id="nome" maxlength=60 size=30 /></label>
					</div>
					<br>
					<div>
						<label for="crm" >CRM Médico: </label></div><div><label><input type="text" name="crm"  id="crm" maxlength=20 size=30 /></label>
					</div>
					<br>
					<div>
						<label for="sexo">Sexo:</label></div><div><label><input type="text" name="sexo" id="sexo" maxlength=9 size=30> </label>
					</div>
					<br>
					<div>
						<label for="telefone">Telefone:</label></div><div><label><input type="tel" name="telefone"  id="telefone" value="(  )" maxlength=15 size=30 /></label>
					</div>
					<br>
					<div>
						<input type="submit" name="cadastrar" value="Cadastrar" />
						<input type="submit" name="listarTodos" value="Listar Cadastrados" />
					</div>
				
		</form>
		<table class="table table-striped" cellpadding="3" cellspadding="3">
			<tr>
				<td width="21" bgcolor="#99CC00">CÓDIGO</td>
				<td width="214" bgcolor="#99FF00">IDENTIDADE</td>
				<td width="214" bgcolor="#99FF00">NOME</td>
				<td width="214" bgcolor="#99FF00">CRM</td>
				<td width="214" bgcolor="#99FF00">SEXO</td>
				<td width="214" bgcolor="#99FF00">TELEFONE</td>
			</tr>
			
			<?php
			//error_reporting(0);
					require('../controll/Medico.controll.php');
					$cad = new Control();
					if(isset($_POST['cadastrar'])){
						
						$identidade = $_POST['identidade'];
						$nome = $_POST['nome'];
						$crm = $_POST['crm'];
						$sexo=$_POST['sexo'];
						$telefone=$_POST['telefone'];
						$cad->cadMedico($identidade,$nome,$crm,$sexo,$telefone);
					}
						if(isset($_POST['listarTodos'])){
						$arr = $cad->listarMedicos();
						for($i=0;$i<count($arr);$i++){
								
								$codigo = $arr[$i]['codigo'];
								$identidade =$arr[$i]['identidade'];
								$nomemedico=$arr[$i]['nomemedico'];
								$crm=$arr[$i]['crm'];
								$sexo=$arr[$i]['sexo'];
								$telefone=$arr[$i]['telefone'];
					echo"<tr><td>"
						
							.$arr[$i]['codigo'].
						
						"</td>
						<td>"
							.$arr[$i]['identidade'].
						
						"</td>
						<td>"
							.$arr[$i]['nomemedico'].
						"</td>
						<td>"
							.$arr[$i]['crm'].
						"</td>
						<td>"
							.$arr[$i]['sexo'].
						"</td>
						<td>"
							.$arr[$i]['telefone'].
					"</td>
					<td>
						<a href='indexMedicoEditar.php?editar=editar&codigo=".$codigo."'><i class='icon-pencil'></i></a>
					</td>
					<td>
						<a href='indexMedico.php?excluir=excluir&codigo=".$codigo."'><i class='icon-trash'></i></a>
					</td>
					</tr>";
				}
			}
		?>
	</table>
	</center>
	<?php 
	
			if(isset($_GET['excluir'])){
				$codigo = $_GET['codigo'];
				
				$cad->exclMedico($codigo);
				if(cad==true){
					echo "<h1>dados excluidas com sucesso!!!</h1>";
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



