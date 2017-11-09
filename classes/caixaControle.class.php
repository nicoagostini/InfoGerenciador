<?php

	include_once("caixa.class.php");
	include_once("bd.class.php");
	include_once("controle.class.php");
	include_once("saldoControle.class.php");

	class caixaControle extends controle{

	protected function deletar($obj){return false;}
	protected function enviarEmail($obj){return false;}
	protected function verificar($obj){return false;}
	protected function inserirUsuario($obj){return false;}
	protected function inserirBuyer($obj){return false;}
	protected function destroy(){return false;}
	protected function apagarBuyer($obj){return false;}
	protected function selecionarItens($obj){return false;}

	protected function inserir($obj){
		$banco = new bd();
		date_default_timezone_set('America/Sao_Paulo');
		$hj = date("Y-m-d");
		$banco->executa("INSERT INTO caixa(tipo, valor, data, descricao) VALUES ('Saída','".$vt."','".$hj."','".$obj->getCategoria()." ".$obj->getDescricao()." ".$obj->getMarca().", ".$obj->getFornecedor().", quantidade:".$obj->getQuantidade()." ao custo de ".$obj->getCusto()." por unidade.')");
	}

	protected function inserirEntrada($obj){
		$banco = new bd();
		date_default_timezone_set('America/Sao_Paulo');
		$hj = date("Y-m-d");
		$banco->executa("INSERT INTO caixa(tipo, valor, data, descricao) VALUES ('Saída','".$vt."','".$hj."','".$obj->getCategoria()." ".$obj->getDescricao()." ".$obj->getMarca().", ".$obj->getFornecedor().", quantidade: ".$obj->getQuantidade()." ao custo de R$ ".$obj->getCusto()." por unidade.')");
	}

	protected function inserirEntradaJustificada($obj){
		$banco = new bd();
		date_default_timezone_set('America/Sao_Paulo');
		$hj = date("Y-m-d");
		$banco->executa("INSERT INTO caixa(tipo, valor, data, descricao) VALUES ('".$obj->getTipo()."','".$obj->getValor()."','".$hj."','".$obj->getDescricao()."')");
		$sc = new saldoControle();
		$saldo = $sc->controleAcao("selecionarUm", 'caixa');
		$novo = $saldo[0][0] + $obj->getValor();
		$banco->executa("UPDATE saldo SET caixa = '".$novo."'");
	}

	protected function inserirSaida($obj){
		$banco = new bd();
		date_default_timezone_set('America/Sao_Paulo');
		$hj = date("Y-m-d");
		$vt = ($obj->getCusto() * $obj->getQuantidade());
		$banco->executa("INSERT INTO caixa(tipo, valor, data, descricao) VALUES ('Saída','".$vt."','".$hj."','".$obj->getCategoria()." ".$obj->getDescricao()." ".$obj->getMarca().", ".$obj->getFornecedor().", quantidade: ".$obj->getQuantidade()." ao custo de R$ ".$obj->getCusto()." por unidade.')");
		$sc = new saldoControle();
		$saldo = $sc->controleAcao("selecionarUm", 'caixa');
		$novo = $saldo[0][0] + $vt;
		$banco->executa("UPDATE saldo SET caixa = '".$novo."'");
	}

	protected function inserirSaidaJustificada($obj){
		$banco = new bd();
		date_default_timezone_set('America/Sao_Paulo');
		$hj = date("Y-m-d");
		$banco->executa("INSERT INTO caixa(tipo, valor, data, descricao) VALUES ('".$obj->getTipo()."','".$obj->getValor()."','".$hj."','".$obj->getDescricao()."')");
		$sc = new saldoControle();
		$saldo = $sc->controleAcao("selecionarUm", 'caixa');
		$novo = $saldo[0][0] - $obj->getValor();
		$banco->executa("UPDATE saldo SET caixa = '".$novo."'");
	}

	public function selecionarUm($obj){
		$banco = new bd();
		$lote = $banco->consulta("SELECT * FROM lote WHERE idlote ='".$obj."'");
		return $lote;
	}

	public function selecionarTodos(){
		$banco = new bd();
		$todos = $banco->consulta("SELECT * FROM caixa");
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