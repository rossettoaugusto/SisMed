<?php
require('../model/Usuario.class.php');

class Control{
	public $control;
	
	function __construct(){
		$this->control = new Usuario();
	}
	/*
	function listarUsuario()
	{
		$this->control = new Usuario();
		
		$resultado = $this->control->listarUsuarios();
		
		$usuario = array();
		while($dados = $resultado->fetchObject()){
			$usuario[]=array('codigo'=>$dados->codigo,'logim'=>$dados->login);
		}
		return $usuario;
	}
	*/
	
	function listaUsu()
	{
		$this->control = new Usuario();
		
		$resultado = $this->control->listarUsuarios();
		
		$usuario = array();
		while($dados = $resultado->fetchObject()){
			$usuario[]=array('codigo'=>$dados->codigo,'login'=>$dados->login);
			
		}
		return $usuario;
	}
	
	
	function cadUsuario($Login,$Senha){
		if($Login==""){
			echo"digite o login!!!";
			return false;
		}else if($Senha==""){
				echo"digite a Senha!!!";
				return false;
			}else{
						//se nome não  for vazio instaacia o objeto da classe cliente
						$this->control = new Usuario();
						//chama o metodo CadastraCliente enviando nome por parametro
						$this->control->cadastrarUsuario($Login,$Senha);
						//$this->control->cadastrarPaciente();
						return true;
					}
		
	}
	
	function exclUsuario($codigo){
		if($codigo==""){
			echo "não foi possivel excluir!!!";
			return false;
		}else{
			$this->control = new Usuario();
			$this->control->excluirUsuario($codigo);
			return true;
		}
	}
}

?>
