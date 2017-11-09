<?php
class cj {

	private $idcj;
	private $nome;
	private $CNPJ;
	private $ie;
	private $telefone;
	private $telefone2;
	private $endereco;
	private $cidade;
	private $uf;
	private $responsavel;
	private $email;

	public function getIdcj(){
		return $this->idcj;
	}

	public function setIdcj($idcj){
		$this->idcj = $idcj;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getCNPJ(){
		return $this->CNPJ;
	}

	public function setCNPJ($CNPJ){
		$this->CNPJ = $CNPJ;
	}

	public function getIe(){
		return $this->ie;
	}

	public function setIe($ie){
		$this->ie = $ie;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getTelefone2(){
		return $this->telefone2;
	}

	public function setTelefone2($telefone2){
		$this->telefone2 = $telefone2;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

	public function getUf(){
		return $this->uf;
	}

	public function setUf($uf){
		$this->uf = $uf;
	}

	public function getResponsavel(){
		return $this->responsavel;
	}

	public function setResponsavel($responsavel){
		$this->responsavel = $responsavel;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}
}
?>