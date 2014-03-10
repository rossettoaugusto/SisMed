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
		</style>
	<script>
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

	require('../controll/Medico.controll.php');
		$cad = new Control();
		
	if(isset($_GET['editar'])){
		$codigo = $_GET['codigo'];
		$seleciona = mysql_query("select * from medico where codigo='$codigo'");
		if($seleciona =''){
			echo 'ERRO!!';
		}else{
				$arr = $cad->lstUmMedico($codigo);
				//var_dump($arr);
				//break;
				
						$codigo = $arr[0]['codigo'];
						$identidade=$arr[0]['identidade'];
						$nomemedico= $arr[0]['nomemedico'];
						$crm= $arr[0]['crm'];
						$sexo= $arr[0]['sexo'];
						$telefone= $arr[0]['telefone'];
						
						
						//echo $descricao;
						//break;
					?>	
			<form method="GET" >
					<br><input  type="text" name="codigo" id="codigo" value="<?php echo $codigo; ?>"readonly="true" />
					<div>
						<label for="identidade">Identidade Médico:</label></div><div><label><input type="text" name="identidade" id="identidade"  value="<?php echo $identidade; ?>" maxlength=10 size=30 /></label>
					</div>
					<br>
					<div>
						<label for="nome">Nome Médico: </label></div><div><label><input type="text" name="nomemedico"  id="nomemedico" value="<?php echo $nomemedico; ?>" maxlength=60 size=30 /></label>
					</div>
					<br>
					<div>
						<label for="crm" >CRM Médico: </label></div><div><label><input type="text" name="crm"  id="crm" value="<?php echo $crm; ?>" maxlength=20 size=30 /></label>
					</div>
					<br>
					<div>
						<label for="sexo">Sexo:</label></div><div><label><input type="text" name="sexo" id="sexo" value="<?php echo $sexo; ?>" maxlength=9 size=30> </label>
					</div>
					<br>
					<div>
						<label for="telefone">Telefone:</label></div><div><label><input type="tel" name="telefone"  id="telefone" value="<?php echo $telefone; ?>" maxlength=15 size=30 /></label>
					</div>
					<br>
					<div>
						<input type="submit" name="alterar" value="Alterar" />
					</div>
				
		</form>
		
		<?php
				
			}
?>
		
<?php 
}
	if(isset($_GET['alterar'])){
		$codigo = $_GET['codigo'];
		$nomemedico=$_GET['nomemedico'];
		$identidade=$_GET['identidade'];
		$crm=$_GET['crm'];
		$sexo=$_GET['sexo'];
		$telefone=$_GET['telefone'];
		$cad->alterMedico($identidade,$nomemedico,$crm,$sexo,$telefone,$codigo);
			if($cad==true){
				
				echo"<br>Medicamento alterado com sucesso<br>";
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

