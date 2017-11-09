<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/venda.class.php");
include_once("classes/vendaControle.class.php");
include_once("classes/produtos.class.php");
include_once("classes/produtosControle.class.php");
include_once("classes/cf.class.php");
include_once("classes/cfControle.class.php");
include_once("classes/cj.class.php");
include_once("classes/cjControle.class.php");

session_start();

$user = unserialize($_SESSION['user']);

$vc = new vendaControle();
$venda = new venda();
$pc = new produtosControle();

$cfc = new cfControle();
$cf = new cf();

$cjc = new cjControle();
$cj = new cj();


$todosf = $cfc->controleAcao('selecionarTodos');
$todosj = $cjc->controleAcao('selecionarTodos');

$todos = $pc->controleAcao('selecionarTodos');

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
			<h1 class="page-header">Dados da compra</h1>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			<?php
			if($todos == false){
				echo "Ainda não há produtos cadastrados.";
			}
			else{
				?>
				<table id="produtos" class="display">
					<thead>
						<tr>
							<th>Categoria</th>
							<th>Descrição</th>
							<th>Marca</th>
							<th>Fornecedor</th>
							<th>Quantidade</th>
							<th>Custo</th>
							<th>Preço Final</th>
							<th>Adicionar</th>

						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($todos as $um) {
							echo "<tr>";
							echo "<td width='10%'>".$um[1]."</td>";
							echo "<td width='10%'>".$um[2]."</td>";
							echo "<td width='10%'>".$um[3]."</td>";
							echo "<td width='10%'>".$um[4]."</td>";
							echo "<td width='10%'>".$um[5]."</td>";
							echo "<td width='10%'>".$um[6]."</td>";
							echo "<td width='10%'>".$um[7]."</td>";
							echo "<td width='10%'><a href='adicionarProduto.php?id=".$um[0]."&p=".$um[7]."'>Adicionar</td>";
							echo "</tr>";

						}			
						?>
					</tr>
				</tbody>
			</table>
			<?php
		}
		if($_SESSION['cliente'] != '1'){
			?>
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
							<td width="8%"><a href="adicionarCliente.php?id=<?php echo $umf[0];?>&tipo=cf">Selecionar</a></td>
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
							<td width="8%"><a href="adicionarCliente.php?id=<?php echo $umj[0];?>&tipo=cj">Selecionar</a></td>
						</tr>
						<?php
					}
				}
				?>
			</tbody>
		</table>
		<br>
		<p> Forma de pagamento:<br>
		<form action="finalizarVenda.php" method="post">
			<input type="radio" name="pagamento" value="À vista">À vista<br>
			<input type="radio" name="pagamento" value="A prazo">A prazo<br>
			<input type="submit" value="Finalizar Venda">
		</form>
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
    	$('#produtos').DataTable();
    	$('#clientes').DataTable();
    	$('#clientesJ').DataTable();
    } );
    window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
</body>
</html>