<?php
class BancoDados {
		protected $dsn ='mysql:dbname=teste;host=localhost';
		protected $user = 'root';
		protected $senha = '';
		protected $db;
		
		
		function __construct(){
			try {
				
				$this->db= new PDO($this->dsn, $this->user, $this->senha);	
				//echo 'conectou';
			}	 
				catch (PDOException $e) {
					echo 'Erro: ' . $e->getMessage();
				}
	}
	
	function execute ($sql){
		//echo $sql;
		//break;
		$resultado = $this->db->query($sql);
		
		if($resultado)
			return $resultado;
		else
			return 0;
	}
	
	function listarTodos($tabela){
		try { 
				//executa a instrução de consulta
				$resultado = $this->db->query('SELECT * FROM '.$tabela );
				if($resultado){
					//percorre os resultados
					return $resultado;
				}
			}catch (PDOException $e) {
			echo 'Erro: ' . $e->getMessage();
		}
	}
	
	function listarUm($tabela,$campo,$condicao){
			
			try{
				 $sql = "select $campo from $tabela where $condicao";
					//echo $sql;
					//break;
				 return $this->execute($sql);
				 
			}catch (PDOException $e) {
				echo 'Erro: ' . $e->getMessage();
			}
		}
		
				
		function alterar($tabela,$campovalores,$condicao){
			try{
				 $sql="update $tabela set $campovalores where $condicao";
				 //echo $sql;
				 //break;
				 return $this->execute($sql);
			}catch (PDOException $e) {
			echo 'Erro: ' . $e->getMessage();
		}
	}
	
	
		function excluir($tabela,$condicao){
		try{
			 $sql="delete from $tabela where $condicao";
			 $this->execute($sql);
		}catch (PDOException $e) {
				echo 'Erro: ' . $e->getMessage();
		}
	}
	
	function inserir($tabela,$campo,$valor){
		try{
			$sql="insert into $tabela ( $campo ) values ( $valor)";
		return $this->execute($sql);
		}catch (PDOException $e) {
			echo 'Erro: ' . $e->getMessage();
		}
		
	}
	
	
}

?>

