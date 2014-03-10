<?php
require ("BancoDados.class.php");
class Medicamentos extends BancoDados{
	
	protected $nome;
	protected $descricao;
	protected $data;
	
	function getNome(){
		return $this->nome;
	}
	
	function setNome($nome){
		$this->nome = $nome;
	}
	
	
	function getDescricao(){
		return $this->descricao;
	}
	function setDescricao($Des){
		$this->descricao = $Des;
	}

	
	function cadastrarMedicamentos($nome,$descricao){
			
			if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
			$db = new BancoDados();
			$this->setNome($nome);
			$this->setDescricao($descricao);
			$nome = $this->getNome();
			$Des=$this->getDescricao();
			
			$db->inserir("medicamentos","medicamento,descricao","'$nome','$Des'");
			
		}
	}
	
	function listarUmMedic($codigo){
			$db = new BancoDados();
			return $db->listarUm("medicamentos","codigo,medicamento,descricao","codigo = '$codigo'");
			
	}
	
	function listarMedicamentos(){
		$db = new BancoDados();
		return $db->listarTodos("medicamentos");
	}
	
	function excluirMedicamentos($codigo){
		if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
				$db= new BancoDados();
				$db->excluir("medicamentos","codigo = $codigo");
			}
	}
	
	function alterarMedicamentos($nome,$descricao,$codigo){
		if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
			$db = new BancoDados();
			return $db->alterar("medicamentos"," medicamento = '$nome' , descricao = '$descricao'"," codigo='$codigo'");
		}
	
	}
}

?>
