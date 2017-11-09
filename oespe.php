<?php
include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/orcamento.class.php");
include_once("classes/orcamentoControle.class.php");
include_once("classes/cf.class.php");
include_once("classes/cfControle.class.php");
include_once("classes/cj.class.php");
include_once("classes/cjControle.class.php");
include_once("classes/produtosControle.class.php");


session_start();

$id = $_GET['id'];

$user = unserialize($_SESSION['user']);

$oc = new orcamentoControle();
$pc = new produtosControle();

$um = $oc->controleAcao('selecionarUm', $id);
$itens = $oc->controleAcao('selecionarItens', $um[0][0]);

?>

<!DOCTYPE html>
<html lang="en">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
			<h1 class="page-header">Orçamentos</h1>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			<?php
			if($um == false){
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
						</tr>
					</thead>
					<tbody>
							<?php
								if($um[0][4] == 'cj'){
									$cjc = new cjControle();
									$ele = $cjc->controleAcao('selecionarUm', $um[0][1]);
									$nome = $ele[0][1];
								}
								if($um[0][4] == 'cf'){
									$cjc = new cfControle();
									$ele = $cjc->controleAcao('selecionarUm', $um[0][1]);
									$nome = $ele[0][1];
								}
								echo "<tr>";
								echo "<td width='10%'>".$nome."</td>";
								echo "<td width='10%'>".$um[0][2]."</td>";
								echo "<td width='10%'>".$um[0][3]."</td>";
								echo "</tr>";		
							?>
						</tr>
					</tbody>
				</table>
				<?php
				echo "<h2>Itens:</h2>";
				foreach($itens[0] as $um){
					$n = $pc->controleAcao('selecionarUm', $um);
					echo "<p>".$n[0][1]." ".$n[0][2]." ".$n[0][3]."</p>";
				}
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