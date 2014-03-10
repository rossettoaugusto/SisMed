<?php
	if(isset($_POST['logar'])){
	$login = mysql_escape_string($_POST['login']);
	$senha = mysql_escape_string($_POST['senha']);
	
	if (empty($login)){
		echo ("<script>alert ('Campo Nome Esta Vazio') </script>");
	}else{
		
		if (empty($senha)){
			echo ("<script>alert ('Campo Senha Esta Vazio') </script>");
		}
		else{
			include "conecta.php";
			
			$sql = "select * from usuarios where login = '$login' and senha = '$senha'";
			
			$resultado = mysql_query($sql, $conexao);
						
			if ($resultado == FALSE){
				echo ("Erro na Consulta". mysql_error());
			}else{
				if(mysql_num_rows($resultado) == 1){
					session_start();
					$_SESSION['login'] = $login;
					echo ("<script>location.replace ('usuario_logado.php'); </script>");
				} 
				else{
					echo ("<script>alert ('Dados Incorretos') </script>");
				}
			}
		}
	}		  
}
	if(isset($_POST['adm'])){
	$login = mysql_escape_string($_POST['login']);
	$senha = mysql_escape_string($_POST['senha']);
	
	if (empty($login)){
		echo ("<script>alert ('Campo Nome Esta Vazio') </script>");
	}else{
		
		if (empty($senha)){
			echo ("<script>alert ('Campo Senha Esta Vazio') </script>");
		}
		else{
			include "conecta.php";
			
			$sql = "select * from adm where login = '$login' and senha = '$senha'";
			
			$resultado = mysql_query($sql, $conexao);
						
			if ($resultado == FALSE){
				echo ("Erro na Consulta". mysql_error());
			}else{
				if(mysql_num_rows($resultado) == 1){
					session_start();
					$_SESSION['login'] = $login;
					echo ("<script>location.replace ('adm_logado.php'); </script>");
				} 
				else{
					echo ("<script>alert ('Dados Incorretos'); </script>");
					
					
				}
			}
		}
	}
	}
				
?>
