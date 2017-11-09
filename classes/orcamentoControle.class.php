<?php
include_once("orcamento.class.php");
include_once("produtos.class.php");
include_once("produtosControle.class.php");
include_once("controle.class.php");
include_once("bd.class.php");

class orcamentoControle extends controle{

	protected function inserirUsuario($obj){return false;}
	protected function alterar($obj){return false;}
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
	protected function deletar($obj){return false;}

	protected function inserir($objt){
		$pc = new produtosControle();
		$obj = unserialize($objt);
		$bd = new bd();
		date_default_timezone_set('America/Sao_Paulo');
		$hj = date("Y-m-d");
		$idVenda = $bd->insereID("INSERT INTO orcamento(cliente, valor, data, classe) VALUES ('".$obj->getCliente()."','".$obj->getValor()."','".$hj."','".$obj->getClasse()."')");
		unset($_SESSION['idcliente']);
		unset($_SESSION['total']);
		unset($_SESSION['classe']);
		$_SESSION['cliente'] = '0';
		foreach($_SESSION['produtos'] as $um){
			$bd->executa("INSERT INTO itenso(idorcamento, iditem) VALUES ('".$idVenda."','".$um[0]."')");
		}
		unset($_SESSION['produtos']);
	}

	protected function selecionarTodos(){
		$bd = new bd();
		$tudo = $bd->consulta("SELECT * FROM orcamento");
		return $tudo;
	}

	protected function selecionarUm($obj){
		$bd = new bd();
		$tudo = $bd->consulta("SELECT * FROM orcamento WHERE idorcamento = '".$obj."'");
		return $tudo;
	}

	protected function selecionarItens($obj){
		$bd = new bd();
		$tudo = $bd->consulta("SELECT iditem FROM itenso WHERE idorcamento = '".$obj."'");
		return $tudo;
	}

}