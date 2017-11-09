<?php

include_once("classes/cf.class.php");
include_once("classes/cfControle.class.php");

session_start();

$user = unserialize($_SESSION['user']);

$cfc = new cfControle();
$cf = new cf();

$nome = filter_var ( $_POST['nome'], FILTER_SANITIZE_STRING);
$cpf = filter_var ( $_POST['cpf'], FILTER_SANITIZE_STRING);
$telefone = filter_var ( $_POST['telefone'], FILTER_SANITIZE_STRING);
$telefone2 = filter_var ( $_POST['telefone2'], FILTER_SANITIZE_STRING);
$endereco = filter_var ( $_POST['endereco'], FILTER_SANITIZE_STRING);
$cidade = filter_var ( $_POST['cidade'], FILTER_SANITIZE_STRING);
$uf = filter_var ( $_POST['uf'], FILTER_SANITIZE_STRING);
$email = filter_var ( $_POST['email'], FILTER_SANITIZE_EMAIL);

if($nome == '' || $cpf == '' || $telefone == '' || $endereco == '' || $cidade == '' || $uf == '' || $email == ''){
	header("location:location:insereCf.php?error=1");
	die;
}

else{

$cf->setNome($nome);
$cf->setCPF($cpf);
$cf->setTelefone($telefone);
$cf->setTelefone2($telefone2);
$cf->setEndereco($endereco);
$cf->setCidade($cidade);
$cf->setUf($uf);
$cf->setEmail($email);

$cfc->controleAcao("inserir", $cf);
header("location:clientes.php");

}