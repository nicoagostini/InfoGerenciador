<?php
class orcamento {

	private $idorcamento;
	private $cliente;
	private $valor;
	private $data;
	private $classe;
	

	public function getIdvenda(){
		return $this->idvenda;
	}

	public function setIdvenda($idvenda){
		$this->idvenda = $idvenda;
	}

	public function getCliente(){
		return $this->cliente;
	}

	public function setCliente($cliente){
		$this->cliente = $cliente;
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
	public function getClasse(){
		return $this->classe;
	}

	public function setClasse($classe){
		$this->classe = $classe;
	}
}
?>