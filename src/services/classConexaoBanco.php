<?php

// Classe com a conexão com o banco de dados
class ConexaoBanco {
	private $host; // Servidor 
	private $user; // Usuário
	private $password; // Senha
	private $database; // Banco de dados
	private $status; // Sucesso ou falha
	
	// Construtor que chama o método "Conectar"
	public function __construct(){
		date_default_timezone_set("America/Sao_Paulo");
		$this->Conectar();
	}
	
	// Método "Conectar" que põe valores nas variáveis
	private function Conectar(){
		$this->host = "hostel.db.11765742.hostedresource.com";
		$this->user = "engsoft";
		$this->password = "engsoft2017-2#";
		$this->database = "hostel";
		
		// Teste  de conexão com os valores passados
		if(mysql_connect($this->host, $this->user, $this->password)){
			if(mysql_select_db($this->database))
				$this->status = true; // Deu certo
			else
				$this->status = false; // Deu errado
		}
		else 
			$this->status = false; // Deu errado
	}
	
	// Método que retorna o "status"
	public function StatusConexao(){
		return $this->status;
	}	
}

?>