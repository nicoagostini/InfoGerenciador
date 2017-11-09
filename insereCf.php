<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/cf.class.php");
include_once("classes/cfControle.class.php");

session_start();

$user = unserialize($_SESSION['user']);

$cfc = new cfControle();
$cf = new cf();

if(isset($_GET['error'])){
	if($_GET['error'] == '1'){
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
			<form action="salvarCf.php" method="post">
				Nome: <input type="name" name="nome" required="required"></input><br>
				CPF: <input type="name" name="cpf" required="required"></input><br>
				Telefone: <input type="name" name="telefone" required="required"></input><br>
				Telefone 2: <input type="name" name="telefone2"></input><br>
				Endereço: <input type="name" name="endereco" required="required"></input><br>
				Cidade: <input type="name" name="cidade" required="required"></input><br>
				UF: <input type="name" name="uf" required="required"></input><br>
				Email: <input type="email" name="email" required="required"></input><br>
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