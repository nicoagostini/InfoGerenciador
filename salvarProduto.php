<?php
include_once("classes/produtos.class.php");
include_once("classes/produtosControle.class.php");
session_start();

$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$marca = $_POST['marca'];
$fornecedor = $_POST['fornecedor'];
$quantidade = $_POST['quantidade'];
$custo = $_POST['custo'];
$precoFinal = $_POST['precoFinal'];


if($categoria == '' || $descricao == '' || $marca == '' || $fornecedor == '' || $quantidade == '' || $custo == '' || $precoFinal == ''){
	header("location:cadastraProdutos.php?error=1");
	die();
}

$produto = new produtos();
$produto->setCategoria($categoria);
$produto->setDescricao($descricao);
$produto->setMarca($marca);
$produto->setFornecedor($fornecedor);
$produto->setQuantidade($quantidade);
$produto->setCusto($custo);
$produto->setPrecoFinal($precoFinal);



$pc = new produtosControle();

$pc->controleAcao('inserir', $produto);
header("location:produtos.php");
die();