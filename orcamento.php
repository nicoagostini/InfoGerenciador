<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/orcamento.class.php");
include_once("classes/orcamentoControle.class.php");
include_once("classes/cf.class.php");
include_once("classes/cfControle.class.php");
include_once("classes/cj.class.php");
include_once("classes/cjControle.class.php");


session_start();

$user = unserialize($_SESSION['user']);

$oc = new orcamentoControle();

$todos = $oc->controleAcao('selecionarTodos');

?>

<!DOCTYPE html>
<html lang="en">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
			<h1 class="page-header">Orçamentos</h1>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			<p>
				<input type="submit" value="Novo orçamento" onclick="location. href= 'insereOrcamento.php' "> 
			</p>
			<?php
			if($todos == false){
				echo "Nenhum orçamento realizada.";
			}
			else{
				?>
				<table id="lista" class="display">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Valor</th>
							<th>Data</th>
							<th>Abrir</th>
						</tr>
					</thead>
					<tbody>
							<?php
							foreach ($todos as $um) {
								if($um[4] == 'cj'){
									$cjc = new cjControle();
									$ele = $cjc->controleAcao('selecionarUm', $um[1]);
									$nome = $ele[0][1];
								}
								if($um[4] == 'cf'){
									$cjc = new cfControle();
									$ele = $cjc->controleAcao('selecionarUm', $um[1]);
									$nome = $ele[0][1];
								}
								echo "<tr>";
								echo "<td width='10%'>".$nome."</td>";
								echo "<td width='10%'>".$um[2]."</td>";
								echo "<td width='10%'>".$um[3]."</td>";
								echo "<td width='10%'><a href='oespe.php?id=".$um[0]."'>Abrir</a></td>";
								echo "</tr>";

							}			
							?>
						</tr>
					</tbody>
				</table>
				<?php
			}
			?>
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
    $('#lista').DataTable();
} );
window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
</body>
</html>