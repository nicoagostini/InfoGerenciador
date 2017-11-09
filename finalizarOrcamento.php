<?php
include_once('classes/orcamento.class.php');
include_once('classes/orcamentoControle.class.php');

session_start();


$orcamento = new orcamento();
$orcamentoC = new orcamentoControle();

$orcamento->setCliente($_SESSION['idcliente']);
$orcamento->setValor($_SESSION['total']);
$orcamento->setClasse($_SESSION['classe']);

$v = serialize($orcamento);
$orcamentoC->controleAcao("inserir",$v);

header("location:orcamento.php");
die();