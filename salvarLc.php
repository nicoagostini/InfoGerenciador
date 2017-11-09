<?php
include_once("classes/lcs.class.php");
include_once("classes/lcControle.class.php");
session_start();

$descricao = $_POST['descricao'];


if($descricao == ''){
	header("location:cadastraLc.php?error=1");
	die();
}

$lcs = new lc();
$lcs->setDescricao($descricao);


$llc = new lcControle();

$llc->controleAcao('inserir', $lcs);
header("location:lc.php");
die();