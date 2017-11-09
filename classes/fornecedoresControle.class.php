<?php

include_once("fornecedores.class.php");
include_once("bd.class.php");
include_once("controle.class.php");

class fornecedoresControle extends controle{

	protected function deletar($obj){return false;}
	protected function enviarEmail($obj){return false;}
	protected function verificar($obj){return false;}
	protected function inserirUsuario($obj){return false;}
	protected function inserirBuyer($obj){return false;}
	protected function destroy(){return false;}
	protected function apagarBuyer($obj){return false;}
	protected function inserirEntrada($obj){return false;}
	protected function inserirSaida($obj){return false;}
	protected function inserirSaidaJustificada($obj){return false;}
	protected function inserirEntradaJustificada($obj){return false;}
	protected function selecionarItens($obj){return false;}

	protected function inserir($obj){
		$banco = new bd();
		$banco->executa("INSERT INTO fornecedores(nome, telefone, email) VALUES ('".$obj->getNome()."','".$obj->getTelefone()."','".$obj->getEmail()."')");
	}

	public function selecionarUm($obj){
		$banco = new bd();
		$lote = $banco->consulta("SELECT * FROM lote WHERE idlote ='".$obj."'");
		return $lote;
	}

	public function selecionarTodos(){
		$banco = new bd();
		$todos = $banco->consulta("SELECT * FROM fornecedores");
		return $todos;
	}

	public function selecionarStatus($obj){
		$banco = new bd();
		$todos = $banco->consulta("SELECT * FROM lote WHERE status = '".$obj."'");
		return $todos;
	}

	public function selecionarAbertas(){
		$banco = new bd();
		$todos = $banco->consulta("SELECT * FROM lote WHERE status = 'Aberta'");
		return $todos;
	}

	protected function abrir($obj){
		$banco = new bd();
		$banco->executa("UPDATE lote SET status = 'Aberta' WHERE idlote = '".$obj."'");
	}

	protected function alterar($obj){
		$banco = new bd();
		$banco->executa("UPDATE lote SET nome = '".$obj->getNome()."', descricao = '".$obj->getDescricao()."', encerramento = '".$obj->getEncerramento()."', lote = '".$obj->getLote()."', valorMin = '".$obj->getValorMin()."', foto1 = '".$obj->getFoto1()."', foto2 = '".$obj->getFoto2()."', foto3 = '".$obj->getFoto3()."', foto4 = '".$obj->getFoto4()."', foto5 = '".$obj->getFoto5()."', categoria = '".$obj->getCategoria()."' WHERE idlote = '".$obj->getIdLote()."'");
	}

	protected function apagar($obj){
		$banco = new bd();
		$banco->executa("DELETE FROM lote WHERE idlote='".$obj."'");
	}
}