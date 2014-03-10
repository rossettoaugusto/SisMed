<?php

	$conexao = mysql_connect("localhost", "root", "");
	
	if ($conexao == FALSE){
		echo ("<script>alert('Erro na Conexão ao Banco de Dados');</script>".mysql_error());
	}
	else{
		$base = mysql_select_db("teste", $conexao);
		
		if ($base == FALSE){
			echo ("<script>alert('Erro na Seleção dos Dados');</script>". mysql_error());			
		}
		
	}
	
	
?>
