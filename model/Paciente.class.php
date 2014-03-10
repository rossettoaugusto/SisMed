<?php
require ("BancoDados.class.php");
class Paciente extends BancoDados{
	
	protected $nome;
	protected $identidade;
	protected $sexo;
	protected $data;
	protected $fone;
	
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
	
	
	function getSexo(){
		return $this->sexo;
	}
	
	function setSexo($sex){
		$this->sexo = $sex;
	}
	
		function getData(){
		return $this->data;
	}
	
	function setData($dat){
		$this->data = $dat;
	}
	
	function getFone(){
		return $this->fone;
	}
	
	function setFone($FO){
		$this->fone = $FO;
	}
	
		function cadastrarPaciente($nome,$identidade,$sexo,$dat,$fone){
			
			if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
			$db = new BancoDados();
			$this->setNome($nome);
			$this->setIdentidade($identidade);
			$this->setSexo($sexo);
			$this->setData($dat);
			$this->setFone($fone);
			$nomeP = $this->getNome();
			$idP=$this->getIdentidade();
			$sexP=$this->getSexo();
			$datP=$this->getData();
			$foneP=$this->getFone();
			//echo $nome.$identidade.$sexo;
			//break;
			$db->inserir("paciente","nome,identidade,sexo,data,fone","'$nomeP','$idP','$sexP','$datP','$foneP'");
			//$sql="insert into paciente (nome,identidade,sexo) values ('$nomeP','$idP','$sexP')";
			//$resultado = $db->execute($sql);
		}
	}
	
	function listarUmPac($id){
			$db = new BancoDados();
			 return $db->listarUm("paciente","codigo,nome,identidade,sexo,data,fone"," identidade = '$id'");
			 
			
	}
	
	function listarPaciente(){
		$db = new BancoDados();
		return $db->listarTodos("paciente");
	}
	
	function excluirPaciente($id){
		if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
				$db= new BancoDados();
				$db->excluir("paciente","identidade = $id");
			}
	}
	
	function alterarPaciente($nome,$identidade,$sexo,$data,$fone,$codigo){
		if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
			$db = new BancoDados();
			return $db->alterar("paciente"," nome = '$nome' , identidade = '$identidade',sexo = '$sexo',data = '$data',fone='$fone'"," codigo='$codigo'");
		}
	
	}
	
}

?>
