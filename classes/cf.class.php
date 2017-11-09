<?php
class cf {

	private $idcf;
	private $nome;
	private $CPF;
	private $telefone;
	private $telefone2;
	private $endereco;
	private $cidade;
	private $uf;
	private $email;

	public function getIdcf(){
		return $this->idcf;
	}

	public function setIdcf($idcf){
		$this->idcf = $idcf;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getCPF(){
		return $this->CPF;
	}

	public function setCPF($CPF){
		$this->CPF = $CPF;
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

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}
}
?>