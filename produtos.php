<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/produtos.class.php");
include_once("classes/produtosControle.class.php");

session_start();

$user = unserialize($_SESSION['user']);

$pc = new produtosControle();

$produtos = $pc->controleAcao('selecionarTodos');

?>

<!DOCTYPE html>
<html lang="en">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
			<h1 class="page-header">Produtos</h1>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			<?php
			if($produtos == false){
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

						</tr>
					</thead>
					<tbody>
							<?php
							foreach ($produtos as $um) {
								echo "<tr>";
								echo "<td width='10%'>".$um[1]."</td>";
								echo "<td width='10%'>".$um[2]."</td>";
								echo "<td width='10%'>".$um[3]."</td>";
								echo "<td width='10%'>".$um[4]."</td>";
								echo "<td width='10%'>".$um[5]."</td>";
								echo "<td width='10%'>".$um[6]."</td>";
								echo "<td width='10%'>".$um[7]."</td>";
								echo "</tr>";

							}			
							?>
						</tr>
					</tbody>
				</table>
				<?php
			}
			?>
			<p>
				<input type="submit" value="Cadastrar produto" onclick="location. href= 'cadastraProdutos.php' "> 
			</p>

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
} );
window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
</body>
</html>