<?php

abstract class Controle{
	
	abstract protected function selecionarUm($obj);
	abstract protected function selecionarTodos();
	abstract protected function inserir($obj);
	abstract protected function inserirUsuario($obj);
	abstract protected function alterar($obj);
	abstract protected function deletar($obj);
	abstract protected function destroy();
	abstract protected function enviarEmail($obj);
	abstract protected function verificar($obj);
	abstract protected function apagar($obj);
	abstract protected function selecionarStatus($obj);
	abstract protected function inserirEntrada($obj);
	abstract protected function inserirSaida($obj);
	abstract protected function inserirSaidaJustificada($obj);
	abstract protected function inserirEntradaJustificada($obj);
	abstract protected function selecionarItens($obj);

	public function controleAcao($acao, $obj = false){
		switch($acao){
			case "inserir":
			return $this->inserir($obj);
			break;
			case "alterar":
			return $this->alterar($obj);
			break;
			case "deletar":
			return $this->deletar($obj);
			break;
			case "selecionarItens";
			return $this->selecionarItens($obj);
			break;
			case "selecionarUm":
			return $this->selecionarUm($obj);
			break;
			case "selecionarTodos":
			return $this->selecionarTodos();
			break;
			case "inserirUsuario":
			return $this->inserirUsuario($obj);
			break;
			case "destroy":
			return $this->destroy();
			break;
			case "enviarEmail":
			return $this->enviarEmail($obj);
			break;
			case "verificar":
			return $this->verificar($obj);
			break;
			case "inserirBuyer":
			return $this->inserirBuyer($obj);
			break;
			case "inserirLote":
			return $this->inserirLote($obj);
			break;
			case "apagar":
			return $this->apagar($obj);
			break;
			case "selecionarStatus":
			return $this->selecionarStatus($obj);
			break;
			case "verificaEmail":
			return $this->verificaEmail($obj);
			break;
			case "recomenda":
			return $this->recomenda($obj);
			break;
			case "inserirEntrada":
			return $this->inserirEntrada($obj);
			break;
			case "inserirSaida":
			return $this->inserirSaida($obj);
			break;
			case "inserirSaidaJustificada":
			return $this->inserirSaidaJustificada($obj);
			break;
			case "inserirEntradaJustificada":
			return $this->inserirEntradaJustificada($obj);
			break;
			default:
			return "Ação indefinida";
		}
	}
}
?>