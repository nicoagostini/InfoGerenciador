<?php
include_once("cf.class.php");
include_once("controle.class.php");
include_once("bd.class.php");

class cfControle extends controle{

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
		$bd->executa("INSERT INTO cf(nome, CPF, telefone, telefone2, endereço, cidade, uf, email) VALUES ('".$obj->getNome()."','".$obj->getCPF()."','".$obj->getTelefone()."','".$obj->getTelefone2()."','".$obj->getEndereco()."','".$obj->getCidade()."','".$obj->getUf()."','".$obj->getEmail()."')");

	}

	protected function deletar($obj){
		$bd = new bd();
		$bd->executa("DELETE FROM cf WHERE idcf='".$obj."'");

	}

	protected function selecionarTodos(){
		$bd = new bd();
		$tudo = $bd->consulta("SELECT * FROM cf");
		return $tudo;
	}

	protected function selecionarUm($obj){
		$bd = new bd();
		$tudo = $bd->consulta("SELECT * FROM cf WHERE idcf ='".$obj."'");
		return $tudo;
	}

	protected function alterar($obj){
		$bd = new bd();
		$tudo = $bd->executa("UPDATE cf SET nome='".$obj->getNome()."',CPF='".$obj->getCPF()."',telefone='".$obj->getTelefone()."',telefone2='".$obj->gettelefone2()."',endereço='".$obj->getEndereco()."',cidade='".$obj->getCidade()."',uf='".$obj->getUf()."',email='".$obj->getEmail()."' WHERE idcf ='".$obj->getIdCf()."'");
		return $tudo;
	}

}