<?php
include_once('classes/venda.class.php');
include_once('classes/vendaControle.class.php');

session_start();

$pg = $_POST['pagamento'];

$venda = new venda();
$vendaC = new vendaControle();

$venda->setCliente($_SESSION['idcliente']);
$venda->setValor($_SESSION['total']);
$venda->setPagamento($pg);
$venda->setClasse($_SESSION['classe']);

$v = serialize($venda);
$vendaC->controleAcao("inserir",$v);

header("location:venda.php");
die();