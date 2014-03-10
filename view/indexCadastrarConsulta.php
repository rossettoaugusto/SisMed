<?php 
session_start();
 ?>
<?php 
	if(isset($_SESSION['login'])){
?>

<html >

	<head>

		<title>MVC</title>
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
		
		<style type="text/css">
			*, html {
				font-family:  Arial, verdana, sans-serif;
				margin: 0px;
				padding: 0px;
				font-size: 12px;
			}

			a {
				color: #0099CC;
			}

			body {
				margin: 10px;
			}
			.carregando{
				color:#666;
				display:none;
			}
		</style>

	<style>
	
	</style>
</head>

<body>


	<div >
		<?php
			include("menu_logado.php");
		?>
	</div>
		<center>
			<h1>Cadastro de Consultas</h1>
									<form method="POST" action="indexCadastrarConsulta.php">

												<div>
													<label >Identidade:</label>
													<div>
													<label><input type="text" name="identidade"  id="identidade" maxlength=10 size=30 /></label>
													</div>
												</div>
											<br/>
												<div>
													<?php
															$con = mysql_connect( 'localhost', 'root','');
															mysql_select_db( 'teste', $con );
													?>
															<label for="nome">Nome do Paciente:</label>
													<div>
													<label>
															<span class="carregando">Aguarde, carregando...</span>
															<select name='nome' id='nome'>
																		 <option value="" >selecione o nome</option>
																		 </select>
																		 <script src="http://www.google.com/jsapi"></script>
																			<script type="text/javascript">
																			  google.load('jquery', '1.3');
																			</script>
																			
																			<script type="text/javascript">
																				$(function(){
																					$('#identidade').change(function(){
																						if( $(this).val() ) {
																							$('#nome').hide();
																							$('.carregando').show();
																							$.getJSON('buscasAjax/buscaIPaciente.ajax.php?search=',{identidade: $(this).val(), ajax: 'true'}, function(j){
																								var options = '<option value=""></option>';	
																								for (var i = 0; i < j.length; i++) {
																									options += '<option name="nome" value="' + j[i].nome + '">' + j[i].nome + '</option>';
																								}	
																								$('#nome').html(options).show();
																								$('.carregando').hide();
																							});
																						} else {
																							$('#nome').html('<option value="">? Escolha o nome?</option>');
																						}
																					});
																				});
																				</script>
																			 </label>
																		</div>
												</div>
										<br/>
												<div>
													<label>CRM Médico:</label>
													<div>
													<label> <input type="text" name="crm"  id="crm" maxlength=20 size=30 /></label></div>
												</div>
											<br/>
												<div>
												<label for="nomemedico">Nome do Médico:</label>
												<div>
													<label>
															<span class="carregando">Aguarde, carregando...</span>
															<select name='nomemedico' id='nomemedico'>
																		 <option value="" >selecione o nome do médico</option>
																		 </select>
																		 <script src="http://www.google.com/jsapi"></script>
																			<script type="text/javascript">
																			  google.load('jquery', '1.3');
																			</script>
																			
																			<script type="text/javascript">
																				$(function(){
																					$('#crm').change(function(){
																						if( $(this).val() ) {
																							$('#nomemedico').hide();
																							$('.carregando').show();
																							$.getJSON('buscasAjax/buscaMedico.ajax.php?search=',{crm: $(this).val(), ajax: 'true'}, function(j){
																								var options = '<option value=""></option>';	
																								for (var i = 0; i < j.length; i++) {
																									options += '<option name="nomemedico" value="' + j[i].nomemedico + '">' + j[i].nomemedico + '</option>';
																								}	
																								$('#nomemedico').html(options).show();
																								$('.carregando').hide();
																							});
																						} else {
																							$('#nomemedico').html('<option value="">? Escolha o nome?</option>');
																						}
																					});
																				});
																				</script>
																				</label>
													</div>
												</div>
										<br/>	
												<div>
															<label for="medicamento">Nome do Medicamento:</label>
													<div>
													<label>
															<select name='medicamento' id='medicamento'>
																		 <option value=""></option>
																			<?php
																					 $sql = "SELECT distinct medicamento
																									FROM medicamentos
																									ORDER BY medicamento";
																									//echo $sql;
																					$res = mysql_query( $sql );
																					while ( $row = mysql_fetch_assoc( $res ) ) {
																							echo '<option name="'.$row['codigo'].'">'.$row['medicamento'].'</option>';
																					}
																			?>
																	 </select>
																	</label>
														</div>
												</div>
										<br/>
												<div>
															<label for="descricao">Descrição Medicamento:</label>
												
												<div>
													<label>
															<span class="carregando">Aguarde, carregando...</span>
															<select name='descricao' id='descricao'>
																		 <option value="" >selecione a descrição do medicamento</option>
																		 </select>
																		 <script src="http://www.google.com/jsapi"></script>
																			<script type="text/javascript">
																			  google.load('jquery', '1.3');
																			</script>
																			
																			<script type="text/javascript">
																				$(function(){
																					$('#medicamento').change(function(){
																						if( $(this).val() ) {
																							$('#descricao').hide();
																							$('.carregando').show();
																							$.getJSON('buscasAjax/buscaDescricaoMedicamento.ajax.php?search=',{medicamento: $(this).val(), ajax: 'true'}, function(j){
																								var options = '<option value=""></option>';	
																								for (var i = 0; i < j.length; i++) {
																									
																									options += '<option name="descricao" value="' + j[i].descricao + '">' + j[i].descricao + '</option>';
																								}	
																								$('#descricao').html(options).show();
																								$('.carregando').hide();
																							});
																						} else {
																							$('#descricao').html('<option value=""> Escolha o nome</option>');
																						}
																					});
																				});
																				
																				
																				
																				</script>
																				</label>
																		</div>
												</div>
										<br/>
												<label>Descrição Consulta: </label>
													<div>
														<label><textarea rows="5" cols="60" name="descricaoconsulta" > descrição da consulta</textarea></label>
													</div>
													<div>
													<input type="submit" name="cadastrar" value="Cadastrar" />
													<!--<td width="50"><input type="submit" name="listarTodos" value="Listar Cadastrados" /></td>-->
												</div>										
									</form>
									<table class="table table-striped" cellpadding="3" cellspadding="3">
										<tr>
											<td width="214" bgcolor="#99FF00">IDENTIDADE</td>
											<td width="214" bgcolor="#99FF00">NOME PACIENTE</td>
											<td width="214" bgcolor="#99FF00">CRM</td>
											<td width="214" bgcolor="#99FF00">NOME MÉDICO</td>
											<td width="214" bgcolor="#99FF00">NOME MEDICAMENTO</td>
											<td width="214" bgcolor="#99FF00">DESCRIÇÃO MEDICAMENTO</td>
										</tr>
						
									
									<?php
										require('../controll/Consultas.controll.php');
											$cad = new Control();
													
													if(isset($_POST['cadastrar'])){
																
																$identidade = $_POST['identidade'];
																$nomePac =$_POST['nome'];
																$crm = $_POST['crm'];
																$nomeMed = $_POST['nomemedico'];
																$medicam = $_POST['medicamento'];
																$descricaoMed = $_POST['descricao'];
																$descricaoCon = $_POST['descricaoconsulta'];
																$cad->cadConsultas($identidade,$nomePac,$crm,$nomeMed,$medicam,$descricaoMed,$descricaoCon);															
															if($cad ==true){
																echo ("<br>Consulta cadastrada comm sucesso.<br>");
															}
															$arr = $cad->listarConsultas($_POST['identidade']);
																	for($i=0;$i<count($arr);$i++){
																				$codigo = $arr[$i]['codigo'];
																				/*$identidade = $arr[$i]['identidade'];
																				$nomePac = $arr[$i]['nome'];
																				$crm  = $arr[$i]['crm'];
																				$nomeMed = $arr[$i]['nomemedico'];
																				$descricaoMed=$arr[$i]['descricao'];
																				$descricaoCon = $arr[$i]['descrricaoconsulta'];
																				*/
																		echo"<tr>
																		<td>"
																			.$arr[$i]['codigo'].
																		"</td>
																		<td>"
																			.$arr[$i]['identidadepaciente'].
																		"</td>
																		<td>"
																			.$arr[$i]['nomepaciente'].
																		"</td>
																		<td>"
																			.$arr[$i]['crm'].
																		"</td>
																			<td>"
																				.$arr[$i]['nomemedico'].
																		"</td>
																		<td>"
																			.$arr[$i]['medicamento'].
																		"</td>
																		<td>"
																			.$arr[$i]['descricaomedicamento'].
																		"</td>
																		<td>"
																			.$arr[$i]['descricaoconsulta'].
																		"</td>
																			<td>
																				<a href='indexCadastrarConsulta.php?excluir=excluir&codigo=".$codigo."'><i class='icon-trash'></i></a>
																			</td>
																		</tr>";
																			}
																				
													}
											?>
			</table>
		</center>
		<?php 
			if (isset($_GET['excluir'])){
				$id = $_GET['codigo'];
				$cad->exclConsulta($id);
				if($cad==""){
					echo"erro de exclusão!!!";
				}else{
				echo "<h1>Consulta excluida com sucesso!!!</h1>";
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
