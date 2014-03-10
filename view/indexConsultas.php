<?php 
session_start();
 ?>
<?php 
	if(isset($_SESSION['login'])){
?>
<!doctype html>
<html lang="pt-br">

<head>
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


	<div >
		<?php
			include("menu_logado.php");
		?>
	</div>
	<center>
		<h1>Histórico de Consultas do Paciente</h1>
		<form method="POST" action="indexConsultas.php">
					<div>
						<label for="identidade">Informe a identidade do paciente:
					</div>
					<div> 
						<input type="text" name="identidade" id="dentidade" maxlength=10 size=30   /></label>
					</div>
					<br />
					<div>
						<input type="submit" name="listarConsultas" value="Listar Consultas" size=33/>
						<!--<input type="submit" name="cadastrarConsulta" value="Cadastrar Consultas" size=33/>-->
					</div>
		</form>
		<br />
		<table class="table table-striped" cellpadding="3" cellspadding="3">
			<tr>
				<td width="214" bgcolor="#99CC00">IDENTIDADE</td>
				<td width="214" bgcolor="#99FF00">NOME PACIENTE</td>
				<td width="214" bgcolor="#99FF00">CRM MÉDICO</td>
				<td width="214" bgcolor="#99FF00">NOME MÉDICO</td>
				<td width="214" bgcolor="#99FF00">NOME MEDICAMENTO</td>
				<td width="214" bgcolor="#99FF00">DESCRIÇÃO MEDICAMENTO</td>
				<td width="214" bgcolor="#99FF00">DESCRIÇÃO CONSULTA</td>
			</tr>
			
			<?php
			
			//error_reporting(0);
					require('../controll/Consultas.controll.php');
					$cad = new Control();
					/*if(isset($_POST['cadastrarConsulta'])){
						echo ("<script>location.replace ('indexCadastrarConsulta.php'); </script>");
					}
					*/	
					
						if(isset($_POST['listarConsultas'])){
						$arr = $cad->listarConsultas($_POST['identidade']);

						for($i=0;$i<count($arr);$i++){
			?>
					<tr>
					<td>
						<?php
							echo $arr[$i]['identidadepaciente'];
						?>
						</td>
						<td>
						<?php
							echo $arr[$i]['nomepaciente'];
						?>
					</td>
					<td>
						<?php
							echo $arr[$i]['crm'];
						?>
					</td>
					<td>
						<?php
							echo $arr[$i]['nomemedico'];
						?>
					</td>
					<td>
						<?php
							echo $arr[$i]['medicamento'];
						?>
					</td>
					<td>
						<?php
							echo $arr[$i]['descricaomedicamento'];
						?>
					</td>
					<td>
						<?php
							echo $arr[$i]['descricaoconsulta'];
						?>
					</td>
					</tr>
		<?php
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

