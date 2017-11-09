<?php
include_once("lc.class.php");
include_once("controle.class.php");
include_once("bd.class.php");

class lcControle extends controle{

	protected function selecionarUm($obj){return false;}
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
	protected function selecionarItens($obj){return false;}

	protected function inserir($obj){
		$bd = new bd();
		date_default_timezone_set('America/Sao_Paulo');
		$hj = date("Y-m-d");
		$bd->executa("INSERT INTO lc(descricao, data) VALUES ('".$obj->getDescricao()."','".$hj."')");

	}

	protected function deletar($obj){
		$bd = new bd();
		$bd->executa("DELETE FROM lc WHERE idregistro='".$obj."'");

	}

	protected function selecionarTodos(){
		$bd = new bd();
		$tudo = $bd->consulta("SELECT * FROM lc");
		return $tudo;
	}

}