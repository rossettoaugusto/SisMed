<?php
require ("BancoDados.class.php");
class Usuario extends BancoDados{
	
	protected $Login;
	protected $Senha;
	
	
	function getLogin(){
		return $this->Login;
	}
	
	function setLogin($login){
		$this->Login = $login;
	}
	
	
	function getSenha(){
		return $this->Senha;
	}
	function setSenha($senha){
		$this->Senha = $senha;
	}
	
	
		function cadastrarUsuario($login,$senha){
			
			if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
			$db = new BancoDados();
			$this->setLogin($login);
			$this->setSenha($senha);
			$Login = $this->getLogin();
			$Senha=$this->getSenha();
			
			$db->inserir("usuarios","login,senha","'$Login','$Senha'");
			
		}
	}
	
	function listarUsuarios(){
		$db = new BancoDados();
		return $db->listarTodos("usuarios");
	}
	
	function excluirUsuario($codigo){
		if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
				$db= new BancoDados();
				$db->excluir("usuarios","codigo = $codigo");
			}
	}
	
	
}

?>
