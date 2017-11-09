<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/cf.class.php");
include_once("classes/cfControle.class.php");
include_once("classes/cj.class.php");
include_once("classes/cjControle.class.php");

session_start();

$id = $_GET['id'];
$tipo = $_GET['tipo'];

$user = unserialize($_SESSION['user']);

$cfc = new cfControle();
$cf = new cf();

$cjc = new cjControle();
$cj = new cj();

if($tipo == 'f'){
	$ele = $cfc->controleAcao('selecionarUm', $id);
	?>
	<!DOCTYPE html>
	<html lang="en">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
				<h1 class="page-header">Dados do cliente</h1>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
				Nome: <input type="name" id="nome" value="<?php echo $ele[0][1]?>" disabled = "disabled"><br>
				CPF: <input type="name" id="cpf" value="<?php echo $ele[0][2]?>" disabled = "disabled"><br>
				Telefone: <input type="name" id="telefone" value="<?php echo $ele[0][3]?>" disabled = "disabled"><br>
				Telefone 2: <input type="name" id="telefone2" value="<?php echo $ele[0][4]?>" disabled = "disabled"><br>
				Endereço: <input type="name" id="endereco" value="<?php echo $ele[0][5]?>" disabled = "disabled"><br>
				Cidade: <input type="name" id="cidade" value="<?php echo $ele[0][6]?>" disabled = "disabled"><br>
				UF: <input type="name" id="uf" value="<?php echo $ele[0][7]?>" disabled = "disabled"><br>
				Email: <input type="name" id="email" value="<?php echo $ele[0][8]?>" disabled = "disabled"><br>
				<br>
				<span><input type="submit" value="Alterar dados do cliente" onclick="location.href='alterarCf.php?id=<?php echo $id;?>&tipo=f'"></span>

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
<?php
}
else{
	$ele = $cjc->controleAcao('selecionarUm', $id);
?>
	<!DOCTYPE html>
	<html lang="en">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
				<h1 class="page-header">Dados do cliente</h1>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
				Nome: <input type="name" id="nome" value="<?php echo $ele[0][1]?>" disabled = "disabled"><br>
				CNPJ: <input type="name" id="cpf" value="<?php echo $ele[0][2]?>" disabled = "disabled"><br>
				Inscrição Estadual: <input type="name" id="id" value="<?php echo $ele[0][3]?>" disabled = "disabled"><br>
				Telefone: <input type="name" id="telefone" value="<?php echo $ele[0][4]?>" disabled = "disabled"><br>
				Telefone 2: <input type="name" id="telefone2" value="<?php echo $ele[0][5]?>" disabled = "disabled"><br>
				Endereço: <input type="name" id="endereco" value="<?php echo $ele[0][6]?>" disabled = "disabled"><br>
				Cidade: <input type="name" id="cidade" value="<?php echo $ele[0][7]?>" disabled = "disabled"><br>
				UF: <input type="name" id="uf" value="<?php echo $ele[0][8]?>" disabled = "disabled"><br>
				Responsável: <input type="name" id="responsavel" value="<?php echo $ele[0][9]?>" disabled = "disabled"><br>
				Email: <input type="name" id="email" value="<?php echo $ele[0][10]?>" disabled = "disabled"><br>
				<br>
				<span><input type="submit" value="Alterar dados do cliente" onclick="location.href='alterarCj.php?id=<?php echo $id;?>&tipo=j'"></span>

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
<?php
}
?>