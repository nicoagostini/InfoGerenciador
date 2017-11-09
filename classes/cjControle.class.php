<?php
include_once("cj.class.php");
include_once("controle.class.php");
include_once("bd.class.php");

class cjControle extends controle{

	protected function inserirUsuario($obj){return false;}
	protected function destroy(){return false;}
	protected function inserirBuyer($obj){return false;}
	protected function inserirLote($obj){return false;}
	protected function abrir($obj){return false;}
	protected function apagar($obj){return false;}
	protected function apagarBuyer($obj){return false;}
	protected function selecionarAbertas(){return false;}
	protected function selecionarStatus($obj){return false;}
	protected function verificar($mail){return false;}
	protected function verificaEmail($obj){return false;}
	protected function recomenda($obj){return false;}
	protected function inserirEntrada($obj){return false;}
	protected function inserirSaida($obj){return false;}
	protected function inserirSaidaJustificada($obj){return false;}
	protected function inserirEntradaJustificada($obj){return false;}
	protected function enviarEmail($mail){return false;}
	protected function selecionarItens($obj){return false;}

	protected function inserir($obj){
		$bd = new bd();
		$bd->executa("INSERT INTO cj(nome, CNPJ, ie, telefone, telefone2, endereco, cidade, uf, responsavel, email) VALUES ('".$obj->getNome()."','".$obj->getCNPJ()."','".$obj->getIe()."','".$obj->getTelefone()."','".$obj->getTelefone2()."','".$obj->getEndereco()."','".$obj->getCidade()."','".$obj->getUf()."','".$obj->getResponsavel()."','".$obj->getEmail()."')");

	}

	protected function deletar($obj){
		$bd = new bd();
		$bd->executa("DELETE FROM cj WHERE idcj='".$obj."'");

	}

	protected function selecionarTodos(){
		$bd = new bd();
		$tudo = $bd->consulta("SELECT * FROM cj");
		return $tudo;
	}

	protected function selecionarUm($obj){
		$bd = new bd();
		$tudo = $bd->consulta("SELECT * FROM cj WHERE idcj ='".$obj."'");
		return $tudo;
	}

	protected function alterar($obj){
		$bd = new bd();
		$tudo = $bd->executa("UPDATE cj SET nome='".$obj->getNome()."',CNPJ='".$obj->getCNPJ()."',ie='".$obj->getIe()."',telefone='".$obj->getTelefone()."',telefone2='".$obj->getTelefone2()."',endereco='".$obj->getEndereco()."',cidade='".$obj->getCidade()."',uf='".$obj->getUf()."',responsavel='".$obj->getResponsavel()."',email='".$obj->getEmail()."' WHERE idcj ='".$obj->getIdcj()."'");
		return $tudo;
	}

}