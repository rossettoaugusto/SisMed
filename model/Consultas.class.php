<?php
require ("BancoDados.class.php");
class Consultas extends BancoDados{
	
	protected $identidadePaciente;
	protected $nomePaciente;
	protected $crm;
	protected $nomeMedico;
	protected $medicamento;
	protected $descricaoConsulta;
	protected $descricaoMedicamento;
	
	function getIdentidadePaciente(){
		return $this->identidadePaciente;
	}
	
	function setIdentidadePaciente($IdPac){
		$this->identidadePaciente = $IdPac;
	}
	
	function getNomeMedico(){
		return $this->nomeMedico;
	}
	
	function setNomeMedico($nomeMe){
		$this->nomeMedico = $nomeMe;
	}
	
	function getNomePaciente(){
		return $this->nomePaciente;
	}
	
	function setNomePaciente($nomePa){
		$this->nomePaciente = $nomePa;
	}
	
	function setCRM($cod){
		$this->crm = $cod;
	}
	
	function getCRM(){
		return $this->crm;
	} 
	
	function getMecamentos(){
		return $this->medicamento;
	}
	
	function setMedicamentos($Medicamentos){
		$this->medicamento = $Medicamentos;
	}
	
	function getDescricaoConsulta(){
		return $this->descricaoConsulta;
	}
	function setDescricaoConsulta($DesCon){
		$this->descricaoConsulta = $DesCon;
	}
	
	function setDescricaoMedicamento($desMedi){
		$this->descricaoMedicamento = $desMedi;
	}
	
	function getDescricaoMedicamento(){
		return $this->descricaoMedicamento;
	}
	
	function cadastrarConsultas($idPa,$nomePa,$CRM,$nomeMe,$med,$desMedi,$desCon){
			
			if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
			$db = new BancoDados();
			$this->setIdentidadePaciente($idPa);
			$this->setNomePaciente($nomePa);
			$this->setCRM($CRM);
			$this->setNomeMedico($nomeMe);
			$this->setMedicamentos($med);
			$this->setDescricaoMedicamento($desMedi);
			$this->setDescricaoConsulta($desCon);
			
			
			$idPaciente = $this->getIdentidadePaciente();
			$nomePac = $this->getNomePaciente();
			$crm = $this->getCRM();
			$nomeMed = $this->getNomeMedico();
			$medicam = $this->getMecamentos();
			$desMedi = $this->getDescricaoMedicamento();
			$DesCon=$this->getDescricaoConsulta();
			//echo $nome.$identidade.$sexo;
			//break;
			$db->inserir("consultas","identidadepaciente,nomepaciente,crm,nomemedico,medicamento,descricaomedicamento,descricaoconsulta","'$idPaciente','$nomePac','$crm','$nomeMed','$medicam','$desMedi','$DesCon'");
			//$sql="insert into paciente (nome,identidade,sexo) values ('$nomeP','$idP','$sexP')";
			//$resultado = $db->execute($sql);
		}
	}
	
	function listarConsultas($identidade){
		$db = new BancoDados();
		return $db->listarUm("consultas","codigo,identidadepaciente,nomepaciente,crm,nomemedico,medicamento,descricaomedicamento,descricaoconsulta","identidadepaciente ='$identidade'");
	}
	
	
	function alterarConsulta($idPa,$nomePa,$crm,$nomeMe,$med,$desMedi,$desCon,$codigo){
		if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
			$db = new BancoDados();
			return $db->alterar("consultas"," identidadepaciente = '$idPa',nomepaciente = '$nomePa',crm = '$crm',nomemedico = '$nomeMe',medicamento='$med',descricaomedicamento='$desMedi',descricaoconsulta='$desCon'"," codigo='$codigo'");
		}
	
	}
	
	function excluirConsultas($codigo){
		if (mysqli_connect_errno ()){
				echo "Não foi possivel conectar a base de dado. ".mysqli_connect_error();
		}else{
				$db= new BancoDados();
				$db->excluir("consultas","codigo = $codigo");
			}
	}
}

?>
