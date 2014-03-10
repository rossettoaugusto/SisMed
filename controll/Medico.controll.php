<?php
require('../model/Medico.class.php');

class Control{
	public $control;
	
	function __construct(){
		$this->control = new Medico();
	}
	
	function listarMedicos()
	{
		$this->control = new Medico();
		
		$resultado = $this->control->listarMedico();
		
		$medico = array();
		while($dados = $resultado->fetchObject()){
			$medico[]=array('codigo'=>$dados->codigo,'identidade'=>$dados->identidade,'nomemedico'=>$dados->nomemedico,'crm'=>$dados->crm,'sexo'=>$dados->sexo,'telefone'=>$dados->telefone);
		}
		return $medico;
	}
	
	function lstUmMedico($id)
	{
		$this->control = new Medico();
		
		$resultado = $this->control->listarUmMedico($id);
		
		$medico = array();
		while($dados = $resultado->fetchObject()){
			$medico[]=array('codigo'=>$dados->codigo,'identidade'=>$dados->identidade,'nomemedico'=>$dados->nomemedico,'crm'=>$dados->crm,'sexo'=>$dados->sexo,'telefone'=>$dados->telefone);
			
		}
		//var_dump($medicamento);
		//break;
		return $medico;
	}
	
	//método que faz o controle do CadastraCliente() da classe cliente
	function cadMedico($identidade,$nome,$crm,$sexo,$telefone){
		//echo $nome.$identidade.$sexo;
		//recebe um valor na váriavel nome se nome é vazio retorna uma mensagem de erro
		if($identidade==""){
			echo"digite a identidade!!!";
		}else if($nome==""){
				echo"digite o nome!!!";
			} else if($crm==""){
				echo"digite o crm!!!";
			} else if($sexo==""){
				echo"Informe o sexo!!!";
			}else{
			//se nome não  for vazio instaacia o objeto da classe cliente
			$this->control = new Medico();
			//chama o metodo CadastraCliente enviando nome por parametro
			$this->control->cadastrarMedico($identidade,$nome,$crm,$sexo,$telefone);
			//$this->control->cadastrarPaciente();
		}
	}
	
	function alterMedico($identidade,$nomemedico,$crm,$sexo,$telefone,$codigo){
		if($identidade==""){
			echo"Informe a identidade do medico!!!";
			return false;
		}else if($nomemedico==""){
				echo"Informe o nome do medico!!!";
				return false;
			}else if($crm==""){
					echo"Informe o crm do medico!!!";
					return false;
			}else if($sexo==""){
				echo"Informe o sexo do medico!!!";
				return false;
			}else if($telefone==""){
				echo"Informe o telefone do medico!!!";
				return false;
			}else{
				$this->control=new Medico();
				$this->control->alterarMedico($identidade,$nomemedico,$crm,$sexo,$telefone,$codigo);
				return true;
			}
	}
	
	function exclMedico($codigo){
		if($codigo==""){
			return false;
		}else{
			$this->control = new Medico();
			$this->control->excluirMedico($codigo);
			return true;
		}
	}
}

?>
