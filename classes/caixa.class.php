<?php
class caixa {

	private $idmovimento;
	private $tipo;
	private $valor;
	private $data;
	private $descricao;

	public function getIdmovimento(){
		return $this->idmovimento;
	}

	public function setIdmovimento($idmovimento){
		$this->idmovimento = $idmovimento;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
}
?>