<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/cf.class.php");
include_once("classes/cfControle.class.php");
include_once("classes/cj.class.php");
include_once("classes/cjControle.class.php");

session_start();

$user = unserialize($_SESSION['user']);

$cfc = new cfControle();
$cf = new cf();

$cjc = new cjControle();
$cj = new cj();

$todosf = $cfc->controleAcao('selecionarTodos');
$todosj = $cjc->controleAcao('selecionarTodos');
?>

<!DOCTYPE html>
<html lang="en">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
			<h1 class="page-header">Lista de clientes</h1>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			<h3>Clientes Físicos</h3>
			<table id="clientes">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Visualizar</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($todosf as $umf){
						?>
						<tr>
							<td width="8%"><?php echo $umf[1];?></td>
							<td width="8%"><?php echo $umf[3];?></td>
							<td width="8%"><a href="cespecifico.php?id=<?php echo $umf[0];?>&tipo=f">Visualizar</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
			<br>
			<h3>Clientes Jurídicos</h3>
			<table id="clientesJ">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Visualizar</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($todosj as $umj){
						?>
						<tr>
							<td width="8%"><?php echo $umj[1];?></td>
							<td width="8%"><?php echo $umj[3];?></td>
							<td width="8%"><a href="cespecifico.php?id=<?php echo $umj[0];?>&tipo=j">Visualizar</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		<br>
		<span><input type="submit" value="Inserir Cliente Final" onclick="location.href='insereCf.php'"></span>
		<span><input type="submit" value="Inserir Cliente Jurídico" onclick="location.href='insereCj.php'"></span>

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
    <script>$(document).ready( function () {
    	$('#clientes').DataTable();
    	$('#clientesJ').DataTable();
    } );
    window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
</body>
</html>