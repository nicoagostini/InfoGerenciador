<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/cj.class.php");
include_once("classes/cjControle.class.php");

session_start();

$user = unserialize($_SESSION['user']);

$cjc = new cjControle();
$cj = new cj();

	if(isset($_GET['error'])){
		$erro = $_GET['error'];
		if($erro == '1'){
			echo "<script>alert('Preencha corretamente todos os campos!');</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
			<h1 class="page-header">Dados do cliente</h1>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			<form method="post" action="salvarCj.php">
				Nome: <input type="name" name="nome" required="required"><br>
				CNPJ: <input type="name" name="CNPJ" required="required"><br>
				Inscrição Estadual: <input type="name" name="ie" required="required"><br>
				Telefone: <input type="name" name="telefone" required="required"><br>
				Telefone 2: <input type="name" name="telefone2"><br>
				Endereço: <input type="name" name="endereco" required="required"><br>
				Cidade: <input type="name" name="cidade" required="required"><br>
				UF: <input type="name" name="uf" required="required"><br>
				Responsável: <input type="name" name="responsavel" required="required"><br>
				Email: <input type="name" name="email" required="required"><br>
				<input type="submit" value="Salvar">
			</form>
			<br>
		</div>
	</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="js/datatable.js"></script>
</body>
</html>