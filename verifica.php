<?php
include_once("classes/usuarioControle.class.php");
include_once("classes/bd.class.php");

$userControle = new usuarioControle();

$user = new usuario();
$bd = new bd();

$user->setEmail($_POST['email']);
$user->setSenha($_POST['senha']);

$log = $user;

$resp = $userControle->controleAcao("verificar",$log);


if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	header("location: index.php?erro=3");
}

elseif($resp == false){
	header("location: index.php?erro=1");
}
else{

	$user->setIdUsuario($resp[0][0]);
	$user->setNome($resp[0][1]);
	$user->setEmail($resp[0][2]);
	$user->setSenha($resp[0][3]);

	$d = serialize($user);
	session_start();
	$_SESSION['cliente'] = 0;
	$_SESSION['id'] = "logado";
	$_SESSION['user'] = $d;
	header("location:admin.php");
}