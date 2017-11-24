<?php

class Reserva {
	public $id;
	public $nome;
	public $email;
	public $tel;
	public $tempo;

	public $data1;
	public $data2;
	public $data3;

	public $comentario;

	public function InserirReserva($dados){
		$sql = "INSERT INTO tbl_reserva VALUES(NULL, '".$this->id."', '".$this->nome."', '".$this->email."', '".$this->tel."', '".$this->tempo."', , '".$this->data1."', '".$this->data2."', '".$this->data3."','".$this->comentario."')";
		$res = mysql_query($sql) or die(mysql_error());
		return $res;
	}
}

?>