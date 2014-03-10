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
	<title>MVC Cadastro de Medicamentos</title>
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
			"Diclofenaco",
			"Calmador",
			"Nimensulida",
			"Imbuprofeno",
			"Dipirona",
			"Pantaprazol",
			"Omoprazol"
		];
		$( "#medicamento" ).autocomplete({
			source: availableTags
		});
		
				
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		
	});
	</script>
	<style>
	</style>
</head>

<body>
<?php
	//$codigo="";
	$medicamento="";
	$descricao="";
	
?>


	
	<div>
		<?php
			include("menu_logado.php");
		?>
	</div>
	<center>
	<h1>Cadastro de Medicamentos</h1>




<!-- Autocomplete -->
	<form method="POST" action="indexMedicamentos.php">
	<h2 class="demoHeaders"></h2>
		<div>
			<label for="medicamento">Nome do Medicamento:</label>
		</div>
		
		<div>
			<input type="text" name="medicamento" id="medicamento" value="<?php echo $medicamento; ?>" />
		</div>
		<div>
			<label for="descricao">Descrição do Medicamento:</label>
		</div>
		<div>
			<textarea type="text" name="descricao" id="descricao" cols="30" rows="5" value="<?php echo $descricao; ?>" ></textarea>
		</div>
	<!-- Datepicker

		<div>
			<label for="data"> data: </label>
		</div>
		<div>
			<label for="data"><input type="text"  id ="datepicker" name="data" value="dd/mm/aaaa" min="2011-01-01" /></label>
		</div>-->
		<div>
			<input type="submit" name="cadastrar" value="Cadastrar" />
			<input type="submit" name="ListarMedicamentos" value="ListarMedicamentos" />
		</div>

	<br><br>
	</form>

	<!--<form method="POST" action="indexMedicamentosEditar.php?codigo=$_POST['codigo']" >-->

	<table class="table table-striped" cellpadding="5" cellspadding="5">


		<tr>

		<td width="21" bgcolor="#DCDCDC">CÓDIGO</td>
			<td width="214" bgcolor="#DCDCDC">NOME</td>
			<td width="214" bgcolor="#DCDCDC">DESCRIÇÃO</td>
		</tr>
		
			<?php
				//error_reporting(0);
				require('../controll/Medicamentos.controll.php');
					$cad = new Control();
					if(isset($_POST['cadastrar'])){
						
						$medicamento = $_POST['medicamento'];
						$descricao = $_POST['descricao'];
						$cad->cadMedicamentos($medicamento,$descricao);
					}
					if (isset($_POST['ListarMedicamentos'])) {
						$arr = $cad->listarMedicamentos();
						
						for($i=0;$i<count($arr);$i++){
						
									$codigo = $arr[$i]['codigo'];
									$medicamento = $arr[$i]['medicamento'];
									$descricao = $arr[$i]['descricao'];
									echo"<tr>
										<td>"
											
												.$arr[$i]['codigo'].
												
											
										"</td>
										<td>"
											
												.$arr[$i]['medicamento'].
												
											
										"</td>
										<td>"
											.$arr[$i]['descricao'].
										"</td>
										<td>
											<a href='indexMedicamentosEditar.php?editar=editar&codigo=".$codigo."'><i class='icon-pencil'></i></a>
										</td>
										<td>
											<a href='indexMedicamentos.php?excluir=excluir&codigo=".$codigo."'><i class='icon-trash'></i></a>
										</td>
										
										
									</tr>";
									
				
						
						}
						
					}
				?>
	</table>
 </center>
 <!--</form>-->
	<?php 
		/*if(isset($_GET['alterar'])){
			$codigo = $_GET['codigo'];
			$medicamento = $_POST['medicamento'];
			$descricao = $_POST['descricao'];
			$cad->alterMedicamentos($medicamento,$descricao,$codigo);
		}
		*/
		if (isset($_GET['excluir'])){
			$codigo = $_GET['codigo'];
			$cad->exclMedicamentos($codigo);
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