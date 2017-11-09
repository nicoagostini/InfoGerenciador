<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/caixa.class.php");
include_once("classes/caixaControle.class.php");
include_once("classes/saldo.class.php");
include_once("classes/saldoControle.class.php");

session_start();

$user = unserialize($_SESSION['user']);

$cc = new caixaControle();
$caixa = new caixa();
$sc = new saldoControle();

$todos = $cc->controleAcao('selecionarTodos');

$saldo = $sc->controleAcao('selecionarUm', 'caixa');
$receber = $sc->controleAcao('selecionarUm', 'receber');
$divida = $sc->controleAcao('selecionarUm', 'devendo');
?>

<!DOCTYPE html>
<html lang="en">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
			<h1 class="page-header">Movimentações</h1>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			<table>
				<tr>
					<th>Saldo</th>
					<th>Receber</th>
					<th>Devendo</th>
				</tr>
				<tr>
					<td width="8%"><?php echo $saldo[0][0];?></td>
					<td width="8%"><?php echo $receber[0][0];?></td>
					<td width="8%"><?php echo $divida[0][0];?></td>
				</tr>
			</table>
			<br>
			<?php
			if($todos == false){
				echo "Ainda não há movimentações.";
			}
			else{
				?>
				<table id="movimentos" class="display">
					<thead>
						<tr>
							<th>Categoria</th>
							<th>Valor</th>
							<th>Data</th>
							<th>Descrição</th>

						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($todos as $um) {
							echo "<tr>";
							echo "<td width='8%'>".$um[1]."</td>";
							echo "<td width='8%'>".$um[2]."</td>";
							echo "<td width='8%'>".$um[3]."</td>";
							echo "<td width='40%'>".$um[4]."</td>";
							echo "</tr>";

						}			
						?>
					</tr>
				</tbody>
			</table>
			<?php
		}
		?>
		<br>
		<span><input type="submit" value="Inserir saída" onclick="location.href='adicionarSaida.php'"></span>
		<span><input type="submit" value="Inserir Entrada" onclick="location.href='adicionarEntrada.php'"></span>

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
    	$('#movimentos').DataTable();
    } );
    window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
</body>
</html>