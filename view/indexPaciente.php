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
	<script>
	$(function() {
		
		$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"Feminino",
			"Masculino"
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

	
	<div >
		<?php
			include("menu_logado.php");
		?>
	</div>
		<center>
		<h1>Cadastro de Pacientes</h1>
	
	<form method="POST" action="indexPaciente.php">
		<h2 class="demoHeaders"></h2>
				
				<div>
					<label  for="nome" >Nome do Paciente:</label></div><div><label><input type="text" name="nome" id="nome" maxlength=60 size=40 /></label>
				</div>
				<br>
					<div>
						<label width="50" bgcolor="#DEB887" for="identidade" >Identidade do Paciente:</label></div><div><label><input type="text" name="identidade" id="identidade" maxlength=10 size=30 /></label>
					</div>
					<br>
					<div>
						<label for="sexo" width="50"   bgcolor="#CDB53F" >Sexo: </label></div><div><label> <input type="text" name="sexo" id="sexo" maxlength=9 size=30 /></label>
					</div>
					<br>
					<div>
						<label for="datepicker" width="50"   bgcolor="#DEB887"> Data Nascimento: </label></div><div><label><input type="text"  id ="datepicker" name="data" value="dd/mm/aaaa" min="2011-01-01" /></label>
					</div>
					<br>
					<div>
						<label for="telefone" width="50"   bgcolor="#CDB53F">Telefone: </label></div><div><label> <input type="tel" name="fone" id="telefone" value="(  )" maxlength=15 size=30 /></label>
					</div>
					<br>
					<div>
						<input type="submit" name="cadastrar" value="Cadastrar" />
						<!--<input type="submit" name="listarTodos" value="Listar Cadastrados" />-->
						<!--<input type="submit" name="listarUmPaciente" value="Listar Um Paciente" />-->
					</div>
				
		</form>
		<table class="table table-striped" cellpadding="3" cellspadding="3">
			<tr>
				<td width="214" bgcolor="#99FF00">CODIGO</td>
				<td width="214" bgcolor="#99FF00">NOME</td>
				<td width="214" bgcolor="#99FF00">IDENTIDADE</td>
				<td width="214" bgcolor="#99FF00">SEXO</td>
				<td width="214" bgcolor="#99FF00">DATA NASCIMENTO</td>
				<td width="214" bgcolor="#99FF00">TELEFONE</td>
			</tr>
			
			<?php
			//error_reporting(0);
					require('../controll/Paciente.controll.php');
					$cad = new Control();
					/*if(isset($_POST['listarUmPaciente'])){
						echo ("<script>location.replace ('listarUmPaciente.php'); </script>");
					}*/
					if(isset($_POST['cadastrar'])){
						$nome = $_POST['nome'];
						$identidade = $_POST['identidade'];
						$sexo=$_POST['sexo'];
						$data=$_POST['data'];
						$fone=$_POST['fone'];
						$cad->cadPaciente($nome,$identidade,$sexo,$data,$fone);
						if($cad==true){
							echo"<br>Paciente cadastrado com sucesso<br>";
						}
					$arr = $cad->lstUmPaciente($_POST['identidade']);
					
						for($i=0;$i<count($arr);$i++){
							$codigo = $arr[$i]['codigo'];
							$nome = $arr[$i]['nome'];
							$identidade  = $arr[$i]['identidade'];
							$sexo = $arr[$i]['sexo'];
							$res=$arr[$i]['data'];
							$date = new DateTime($res);
							$data = $date->format('d-m-Y');
							$fone = $arr[$i]['fone'];
						echo"<tr><td>"
									.$arr[$i]['codigo'].
								"</td>
								<td>"
									.$arr[$i]['nome'].
								"</td>
								<td>"
									 .$arr[$i]['identidade'].
								"</td>
								<td>"
									 .$arr[$i]['sexo'].
								"</td>
									<td>"
										 
										 .$data.
								"</td>
								<td>"
									 .$arr[$i]['fone'].
								"</td>
								<td>
									<a href='indexPacienteEditar.php?editar=editar&identidade=".$identidade."'><button type='button'>Editar</button></a>
								</td>
								</tr>";
						}
			}
		?>
		</table>
	</center>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	</body>

</html>
<?php
}else{
	echo ("<script>location.replace ('teste.php'); </script>");
}
?>

