<?php
require('../model/Consultas.class.php');

class Control{
	public $control;
	
	function __construct(){
		$this->control = new Consultas();
	}
	
	function listarConsultas($id)
	{
		$this->control = new Consultas();
		
		$resultado = $this->control->listarConsultas($id);
		
		$consultas = array();
		while($dados = $resultado->fetchObject()){
			$consultas[]=array('codigo'=>$dados->codigo,'identidadepaciente'=>$dados->identidadepaciente,'nomepaciente'=>$dados->nomepaciente,'crm'=>$dados->crm,'nomemedico'=>$dados->nomemedico,'medicamento'=>$dados->medicamento,'descricaomedicamento'=>$dados->descricaomedicamento,'descricaoconsulta'=>$dados->descricaoconsulta);
		}
		return $consultas;
	}
	
	function cadConsultas($idPa,$nomePa,$crm,$nomeMe,$med,$desMedi,$desCon){
		if($idPa==""){
			echo"digite a identidade!!!";
		}else if($crm==""){
				echo"digite o código do médico!!!";
			}else if($desCon==""){
				echo"digite a descrição da consulta!!!";
				}else{
							$this->control = new Consultas();
							$this->control->cadastrarConsultas($idPa,$nomePa,$crm,$nomeMe,$med,$desMedi,$desCon);
						}
	}
}

?>
