<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/fornecedores.class.php");
include_once("classes/fornecedoresControle.class.php");

session_start();

$user = unserialize($_SESSION['user']);

$fc = new fornecedoresControle();

$todos = $fc->controleAcao('selecionarTodos');

?>

<!DOCTYPE html>
<html lang="en">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
			<h1 class="page-header">Fornecedores</h1>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			<?php
			if($todos == false){
				echo "Ainda não há fornecedores cadastrados.";
			}
			else{
				?>
				<table id="fornecedores" class="display">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Telefone</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
							<?php
							foreach ($todos as $um) {
								echo "<tr>";
								echo "<td width='10%'>".$um[1]."</td>";
								echo "<td width='10%'>".$um[2]."</td>";
								echo "<td width='10%'>".$um[3]."</td>";
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
				<input type="submit" value="Cadastrar fornecedor" onclick="location. href= 'cadastraFornecedor.php' "> 
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
    $('#fornecedores').DataTable();
} );
window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
</body>
</html>