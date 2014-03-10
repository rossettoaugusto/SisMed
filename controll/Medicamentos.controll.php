<?php
require('../model/Medicamentos.class.php');

class Control{
	public $control;
	
	function __construct(){
		$this->control = new Medicamentos();
	}
	
	function lstUmMedicamento($id)
	{
		$this->control = new Medicamentos();
		
		$resultado = $this->control->listarUmMedic($id);
		
		$medicamento = array();
		while($dados = $resultado->fetchObject()){
			$medicamento[]=array('codigo'=>$dados->codigo,'medicamento'=>$dados->medicamento,'descricao'=>$dados->descricao);
			
		}
		//var_dump($medicamento);
		//break;
		return $medicamento;
	}
	
	function listarMedicamentos()
	{
		$this->control = new Medicamentos();
		
		$resultado = $this->control->listarMedicamentos();
		
		$medicamento = array();
		while($dados = $resultado->fetchObject()){
			$medicamento[]=array('codigo'=>$dados->codigo,'medicamento'=>$dados->medicamento,'descricao'=>$dados->descricao);
		}
		return $medicamento;
	}
	
	//método que faz o controle do CadastraCliente() da classe cliente
	function cadMedicamentos($nome,$descricao){
		
		//recebe um valor na váriavel nome se nome é vazio retorna uma mensagem de erro
		if($nome==""){
			echo"digite o nome!!!";
		}else if($descricao==""){
				echo"digite a descrição!!!";
			}else{
		
			$this->control = new Medicamentos();
		
			$this->control->cadastrarMedicamentos($nome,$descricao);
		
		}
	}
	
	function exclMedicamentos($codigo){
		$this->control = new Medicamentos();
		$this->control->excluirMedicamentos($codigo);
	}
	
	function alterMedicamentos($nome,$descricao,$codigo){
		if($nome==""){
			echo"Informe o nome do medicamento!!!";
			return false;
		}else if($descricao==""){
				echo"Informe a descrição do medicamento!!!";
				return false;
			}else{
				$this->control=new Medicamentos();
				$this->control->alterarMedicamentos($nome,$descricao,$codigo);
				return true;
			}
	}
}

?>
