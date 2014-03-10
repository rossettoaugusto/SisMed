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

	
	<div>
		<?php
			include("menu_logado.php");
		?>
	</div>
		<center>
		<h1>listar um Paciente</h1>
		<form method="POST" action="listarUmPaciente.php">
					<div>
						<label for="identidade">Informe a identidade do paciente:
					</div>
					<div> 
						<input type="text" name="identidade" id="dentidade" maxlength=10 size=30   /></label>
					</div>
					<br />
					<div>
						<input type="submit" name="listarUmPaciente" value="Listar um Paciente" size=33/>
						<!--<input type="submit" name="cadastrar" value="Cadastrar pacientes" size=33/>-->
					</div>
		</form>
		
		<table class="table table-striped" cellpadding="3" cellspadding="3">
			<tr>
				<td width="214" bgcolor="#99FF00">CODIGO</td>
				<td width="214" bgcolor="#99FF00">NOME</td>
				<td width="214" bgcolor="#99FF00">IDENTIDADE</td>
				<td width="214" bgcolor="#99FF00">SEXO</td>
				<td width="214" bgcolor="#99FF00">DATA</td>
				<td width="214" bgcolor="#99FF00">TELEFONE</td>
			</tr>
		
		<?php
		require('../controll/Paciente.controll.php');
			$lst = new Control();
			/*if(isset($_POST['cadastrar'])){
				echo ("<script>location.replace ('indexPaciente.php'); </script>");
			}*/
		if(isset($_POST['listarUmPaciente'])){
				$arr = $lst->lstUmPaciente($_POST['identidade']);
				for($i=0;$i<count($arr);$i++){
							$codigo = $arr[$i]['codigo'];
							$nome = $arr[$i]['nome'];
							$identidade  = $arr[$i]['identidade'];
							$sexo = $arr[$i]['sexo'];
							$res=$arr[$i]['data'];
							$date = new DateTime($res);
							$data = $date->format('d-m-Y');
							$fone = $arr[$i]['fone'];
					echo"<tr>
					<td>"
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
									<a href='indexPacienteEditar.php?editar=editar&identidade=".$identidade."'><i class='icon-pencil'></i></a>
						</td>
						<td>
									<a href='listarUmPaciente.php?excluir=excluir&codigo=".$identidade."'><i class='icon-trash'></i></a>
						</td>
					</tr>";
						}
			}
		?>
		</table>
	</center>
	<?php 
	
		if (isset($_GET['excluir'])){
			$id = $_GET['identidade'];
			$lst->exclPaciente($id);
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