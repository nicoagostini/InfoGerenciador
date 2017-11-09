<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/cj.class.php");
include_once("classes/cjControle.class.php");

session_start();

$id = $_GET['id'];
$tipo = $_GET['tipo'];

$user = unserialize($_SESSION['user']);

$cjc = new cjControle();
$cj = new cj();

$ele = $cjc->controleAcao('selecionarUm', $id);
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
			<form method="post" action="salvarCjA.php?id=<?php echo $id;?>">
				Nome: <input type="name" name="nome" value="<?php echo $ele[0][1]?>"><br>
				CNPJ: <input type="name" name="CNPJ" value="<?php echo $ele[0][2]?>"><br>
				Inscrição Estadual: <input type="name" name="ie" value="<?php echo $ele[0][3]?>"><br>
				Telefone: <input type="name" name="telefone" value="<?php echo $ele[0][4]?>"><br>
				Telefone 2: <input type="name" name="telefone2" value="<?php echo $ele[0][5]?>"><br>
				Endereço: <input type="name" name="endereco" value="<?php echo $ele[0][6]?>"><br>
				Cidade: <input type="name" name="cidade" value="<?php echo $ele[0][7]?>"><br>
				UF: <input type="name" name="uf" value="<?php echo $ele[0][8]?>"><br>
				Responsável: <input type="name" name="responsavel" value="<?php echo $ele[0][9]?>"><br>
				Email: <input type="name" name="email" value="<?php echo $ele[0][10]?>"><br>
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