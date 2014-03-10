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
<center>



<?php 

	require('../controll/Medicamentos.controll.php');
		$cad = new Control();
		
	if(isset($_GET['editar'])){
		$codigo = $_GET['codigo'];
		$seleciona = mysql_query("select * from medicamentos where codigo='$codigo'");
		if($seleciona =''){
			echo 'ERRO!!';
		}else{
				$arr = $cad->lstUmMedicamento($codigo);
				//var_dump($arr);
				//break;
				
						$codigo = $arr[0]['codigo'];
						$medicamento=$arr[0]['medicamento'];
						$descricao= $arr[0]['descricao'];
						
						//echo $descricao;
						//break;
					?>		
					<form method="get" >
						<br><input  type="text" name="codigo" id="codigo" value="<?php echo $codigo; ?>"readonly="true" />
						<br><label for="medicamento">Nome do Medicamento:</label>
						<br><input type="text" name="medicamento" id="medicamento" value="<?php echo $medicamento; ?>" />
						<br><label for="descricao">Descrição do Medicamento:</label>
						<br><input type="text" name="descricao" id="descricao" value="<?php echo $descricao; ?>" size="50"/>
						<br><input type="submit" name="alterar" id="alterar"  value="Alterar" />
					</form>
					<?php
				
			}
?>
		
<?php 
}
	if(isset($_GET['alterar'])){
		$codigo = $_GET['codigo'];
		$nome=$_GET['medicamento'];
		$descri=$_GET['descricao'];
		$cad->alterMedicamentos($nome,$descri,$codigo);
			if($cad==true){
				
				echo"<br>Medicamento alterado com sucesso<br>";
			}
	}
	
?>
	</center>
<script src="../bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
<?php
}else{
	echo ("<script>location.replace ('teste.php'); </script>");
}
?>




