<?php
include_once("classes/fornecedores.class.php");
include_once("classes/fornecedoresControle.class.php");
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


if($nome == '' || $email == '' || $telefone == ''){
	header("location:cadastraFornecedor.php?error=1");
	die();
}

$forn = new fornecedor();
$forn->setNome($nome);
$forn->setEmail($email);
$forn->setTelefone($telefone);


$fc = new fornecedoresControle();

$fc->controleAcao('inserir', $forn);
header("location:fornecedores.php");
die();