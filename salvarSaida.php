<?php
include_once("classes/caixa.class.php");
include_once("classes/caixaControle.class.php");
session_start();

$valor = $_POST['valor'];
$descricao = $_POST['descricao'];


if($descricao == '' || $valor == ''){
	header("location:adicionarSaida.php?error=1");
	die();
}

$caixa = new caixa();
$caixa->setTipo('Saída');
$caixa->setDescricao($descricao);
$caixa->setValor($valor);


$cc = new caixaControle();

$cc->controleAcao('inserirSaidaJustificada', $caixa);
header("location:caixa.php");
die();