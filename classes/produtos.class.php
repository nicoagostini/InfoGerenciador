<?php
class produtos {

	private $idproduto;
	private $categoria;
	private $descricao;
	private $marca;
	private $fornecedor;
	private $quantidade;
	private $custo;
	private $precoFinal;

	public function getIdproduto(){
		return $this->idproduto;
	}

	public function setIdproduto($idproduto){
		$this->idproduto = $idproduto;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function setCategoria($categoria){
		$this->categoria = $categoria;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getFornecedor(){
		return $this->fornecedor;
	}

	public function setFornecedor($fornecedor){
		$this->fornecedor = $fornecedor;
	}

	public function getQuantidade(){
		return $this->quantidade;
	}

	public function setQuantidade($quantidade){
		$this->quantidade = $quantidade;
	}

	public function getCusto(){
		return $this->custo;
	}

	public function setCusto($custo){
		$this->custo = $custo;
	}

	public function getPrecoFinal(){
		return $this->precoFinal;
	}

	public function setPrecoFinal($precoFinal){
		$this->precoFinal = $precoFinal;
	}
}
?>