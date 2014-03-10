<?php
require ("BancoDados.class.php");
class Medico extends BancoDados{
	
	protected $nome;
	protected $identidade;
	protected $crm;
	protected $sexo;
	protected $telefone;
	
	function getNome(){
		return $this->nome;
	}
	
	function setNome($nome){
		$this->nome = $nome;
	}
	
	
	function getIdentidade(){
		return $this->identidade;
	}
	function setIdentidade($id){
		$this->identidade = $id;
	}
	
	
	function getCRM(){
		return $this->crm;
	}
	function setCRM($cod){
		$this->crm = $cod;
	}
	
	function getSexo(){
		return $this->sexo;
	}
	function setSexo($sex){
		$this->sexo = $sex;
	}
	
	function getTelefone(){
		return $this->telefone;
	}
	
	function setTelefone($fone){
		$this->telefone = $fone;
	}
		function cadastrarMedico($identidade,$nome,$crm,$sexo,$telefone){
			
			if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
			$db = new BancoDados();
			$this->setNome($nome);
			$this->setIdentidade($identidade);
			$this->setCRM($crm);
			$this->setSexo($sexo);
			$this->setTelefone($telefone);
			$nomeMed = $this->getNome();
			$idMed=$this->getIdentidade();
			$crm=$this->getCRM();
			$sexMed=$this->getSexo();
			$tele = $this->getTelefone();
			
			$db->inserir("medico","identidade,nomemedico,crm,sexo,telefone","'$idMed','$nomeMed','$crm','$sexMed','$tele'");
			
		}
	}
	
	function listarMedico(){
		$db = new BancoDados();
		return $db->listarTodos("medico");
	}
	
	function excluirMedico($codigo){
		if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
				$db= new BancoDados();
				$db->excluir("medico","codigo = $codigo");
			}
	}
	
	function listarUmMedico($codigo){
			$db = new BancoDados();
			return $db->listarUm("medico","codigo,identidade,nomemedico,crm,sexo,telefone","codigo = '$codigo'");
			
	}
	
	function alterarMedico($identidade,$nomemedico,$crm,$sexo,$telefone,$codigo){
		if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
			$db = new BancoDados();
			return $db->alterar("medico"," identidade='$identidade',nomemedico = '$nomemedico' , crm = '$crm',sexo='$sexo',telefone='$telefone'"," codigo='$codigo'");
		}
	
	}
}

?>
