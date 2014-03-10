<?php
require('../model/Paciente.class.php');

class Control{
	public $control;
	
	function __construct(){
		$this->control = new Paciente();
	}
	
	function listarPaciente()
	{
		$this->control = new Paciente();
		
		$resultado = $this->control->listarPaciente();
		
		$paciente = array();
		while($dados = $resultado->fetchObject()){
			$paciente[]=array('codigo'=>$dados->codigo,'nome'=>$dados->nome,'identidade'=>$dados->identidade,'sexo'=>$dados->sexo,'data'=>$dados->data,'fone'=>$dados->fone);
		}
		return $paciente;
	}
	
	function lstUmPaciente($id)
	{
		$this->control = new Paciente();
		
		$resultado = $this->control->listarUmPac($id);
		
		$paciente = array();
		while($dados = $resultado->fetchObject()){
			$paciente[]=array('codigo'=>$dados->codigo,'nome'=>$dados->nome,'identidade'=>$dados->identidade,'sexo'=>$dados->sexo,'data'=>$dados->data,'fone'=>$dados->fone);
			
		}
		//var_dump($paciente);
		//break;
		return $paciente;
	}
	
	
	function cadPaciente($nome,$identidade,$sexo,$data,$fone){
		//echo $nome.$identidade.$sexo;
		//recebe um valor na váriavel nome se nome é vazio retorna uma mensagem de erro
		if($nome==""){
			echo"digite o nome!!!";
			return false;
		}else if($identidade==""){
				echo"digite a identidade!!!";
				return false;
			} else if($sexo==""){
				echo"Informe o sexo!!!";
				return false;
			}else if($data==""){
				echo"Informe a data de cadastro!!!";
				return false;
			}else{
						//se nome não  for vazio instaacia o objeto da classe cliente
						$this->control = new Paciente();
						//chama o metodo CadastraCliente enviando nome por parametro
						$this->control->cadastrarPaciente($nome,$identidade,$sexo,$data,$fone);
						//$this->control->cadastrarPaciente();
						return true;
					}
		
	}
	
	function alterPacientes($nome,$identidade,$sexo,$data,$fone,$codigo){
		if($nome==""){
			echo"Informe o nome do paciente!!!";
			return false;
		}else if($identidade==""){
				echo"Informe a identidade do paciente!!!";
				return false;
			}else if($sexo==""){
				echo"Informe o sexo do paciente!!!";
				return false;
			}else if($fone==""){
					echo"Informe o telefone do paciente!!!";
					return false;
					}else{
							$this->control=new Paciente();
							$this->control->alterarPaciente($nome,$identidade,$sexo,$data,$fone,$codigo);
							return true;
					}
	}
	
	
	function exclPaciente($id){
		$this->control = new Paciente();
		$this->control->excluirPaciente($id);
	}
}

?>
