<?php
class saldo {

	private $caixa;
	private $receber;
	private $devendo;

	public function getCaixa(){
		return $this->caixa;
	}

	public function setCaixa($caixa){
		$this->caixa = $caixa;
	}

	public function getReceber(){
		return $this->receber;
	}

	public function setReceber($receber){
		$this->receber = $receber;
	}

	public function getDevendo(){
		return $this->devendo;
	}

	public function setDevendo($devendo){
		$this->devendo = $devendo;
	}
}
?>