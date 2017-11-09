<?php

include_once("produtos.class.php");
include_once("bd.class.php");
include_once("controle.class.php");
include_once("caixaControle.class.php");

class produtosControle extends controle{

	protected function deletar($obj){return false;}
	protected function enviarEmail($obj){return false;}
	protected function verificar($obj){return false;}
	protected function inserirUsuario($obj){return false;}
	protected function destroy(){return false;}
	protected function inserirEntrada($obj){return false;}
	protected function inserirSaida($obj){return false;}
	protected function inserirSaidaJustificada($obj){return false;}
	protected function inserirEntradaJustificada($obj){return false;}
	protected function selecionarStatus($obj){return false;}
	protected function alterar($obj){return false;}
	protected function selecionarItens($obj){return false;}

	protected function inserir($obj){
		$banco = new bd();
		$banco->executa("INSERT INTO produtos(categoria, descricao, marca, fornecedor, quantidade, custo, precofinal) VALUES ('".$obj->getCategoria()."','".$obj->getDescricao()."','".$obj->getMarca()."','".$obj->getFornecedor()."','".$obj->getQuantidade()."','".$obj->getCusto()."','".$obj->getPrecoFinal()."')");
		date_default_timezone_set('America/Sao_Paulo');
		$hj = date("Y-m-d");
		$cc = new caixaControle();
		$cc->controleAcao("inserirSaida", $obj);
	}

	public function selecionarTodos(){
		$banco = new bd();
		$todos = $banco->consulta("SELECT * FROM produtos");
		return $todos;
	}

	protected function apagar($obj){
		$banco = new bd();
		$qnt = $banco->consulta("SELECT quantidade FROM produtos WHERE idproduto = '".$obj."'");
		$t = $qnt[0][0]-1;
		if($t == '0'){
			$banco->executa("DELETE FROM produtos WHERE idproduto='".$obj."'");
		}
		elseif($t != '0'){
			$banco->executa("UPDATE produtos SET quantidade = '".$t."' WHERE idproduto='".$obj."'");
		}

	}

	protected function selecionarUm($obj){
		$banco = new bd();
		$todos = $banco->consulta("SELECT * FROM produtos WHERE idproduto = '".$obj."'");
		return $todos;
	}
}