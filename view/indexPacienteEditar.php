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
<?php 

	require('../controll/Paciente.controll.php');
		$cad = new Control();
		
	if(isset($_GET['editar'])){
		$identidade = $_GET['identidade'];
		//echo $codigo;
		//break;
		$seleciona = mysql_query("select * from paciente where identidade='$identidade'");
		if($seleciona =''){
			echo 'ERRO!!';
		}else{
				$arr = $cad->lstUmPaciente($identidade);
				//var_dump($arr);
				//break;
						$codigo = $arr[0]['codigo'];
						$nome = $arr[0]['nome'];
						$identidade  = $arr[0]['identidade'];
						$sexo = $arr[0]['sexo'];
						$res=$arr[0]['data'];
						$date = new DateTime($res);
						$data = $date->format('d-m-Y');
						$fone = $arr[0]['fone'];
						
						//echo $descricao;
						//break;
					?>		
					<form method="GET" >
		<h2 class="demoHeaders"></h2>
				<br><input  type="text" name="codigo" id="codigo" value="<?php echo $codigo; ?>"readonly="true" />
				<div>
					<label  for="nome" >Nome do Paciente:</label></div><div><label><input type="text" name="nome" id="nome" value="<?php echo $nome; ?>"maxlength=60 size=40 /></label>
				</div>
				<br>
					<div>
						<label width="50" bgcolor="#DEB887" for="identidade" >Identidade do Paciente:</label></div><div><label><input type="text" name="identidade" id="identidade" value="<?php echo $identidade; ?>" maxlength=10 size=30 readonly="true" /></label>
					</div>
					<br>
					<div>
						<label for="sexo" width="50"   bgcolor="#CDB53F" >Sexo: </label></div><div><label> <input type="text" name="sexo" id="sexo" value="<?php echo $sexo; ?>" maxlength=9 size=30 /></label>
					</div>
					<br>
					<div>
						<label for="datepicker" width="50"   bgcolor="#DEB887"> Data Nascimento: </label></div><div><label><input type="text"  id ="datepicker" name="data" value="<?php echo $data; ?>" min="2011-01-01" /></label>
					</div>
					<br>
					<div>
						<label for="telefone" width="50"   bgcolor="#CDB53F">Telefone: </label></div><div><label> <input type="tel" name="fone" id="telefone" value="<?php echo $fone; ?>" maxlength=15 size=30 /></label>
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
		$nome=$_GET['nome'];
		$identidade=$_GET['identidade'];
		$sex = $_GET['sexo'];
		$res=$_GET['data'];
		$date = new DateTime($res);
		$data = $date->format('d-m-Y');
		$fone = $_GET['fone'];
		
		$cad->alterPacientes($nome,$identidade,$sex,$data,$fone,$codigo);
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

