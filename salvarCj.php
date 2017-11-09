<?php

include_once("classes/cj.class.php");
include_once("classes/cjControle.class.php");

session_start();

$user = unserialize($_SESSION['user']);

$cjc = new cjControle();
$cj = new cj();

$nome = filter_var ( $_POST['nome'], FILTER_SANITIZE_STRING);
$CNPJ = filter_var ( $_POST['CNPJ'], FILTER_SANITIZE_STRING);
$ie = filter_var ( $_POST['ie'], FILTER_SANITIZE_STRING);
$telefone = filter_var ( $_POST['telefone'], FILTER_SANITIZE_STRING);
$telefone2 = filter_var ( $_POST['telefone2'], FILTER_SANITIZE_STRING);
$endereco = filter_var ( $_POST['endereco'], FILTER_SANITIZE_STRING);
$cidade = filter_var ( $_POST['cidade'], FILTER_SANITIZE_STRING);
$uf = filter_var ( $_POST['uf'], FILTER_SANITIZE_STRING);
$responsavel = filter_var ( $_POST['responsavel'], FILTER_SANITIZE_STRING);
$email = filter_var ( $_POST['email'], FILTER_SANITIZE_EMAIL);

if($nome == '' || $CNPJ == '' || $ie == '' || $telefone == '' || $endereco == '' || $cidade == '' || $uf == '' ||$responsavel == '' || $email == ''){
	header("location:location:inserirCj.php?error=1");
	die;
}

else{

$cj->setNome($nome);
$cj->setCNPJ($CNPJ);
$cj->setIe($ie);
$cj->setTelefone($telefone);
$cj->setTelefone2($telefone2);
$cj->setEndereco($endereco);
$cj->setCidade($cidade);
$cj->setUf($uf);
$cj->setResponsavel($responsavel);
$cj->setEmail($email);

$cjc->controleAcao("inserir", $cj);
header("location:clientes.php");
}