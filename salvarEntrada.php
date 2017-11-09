<?php
include_once("classes/caixa.class.php");
include_once("classes/caixaControle.class.php");
session_start();

$valor = $_POST['valor'];
$descricao = $_POST['descricao'];


if($descricao == '' || $valor == ''){
	header("location:adicionarEntrada.php?error=1");
	die();
}

$caixa = new caixa();
$caixa->setTipo('Entrada');
$caixa->setDescricao($descricao);
$caixa->setValor($valor);


$cc = new caixaControle();

$cc->controleAcao('inserirEntradaJustificada', $caixa);
header("location:caixa.php");
die();