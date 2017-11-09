<?php

include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/lc.class.php");
include_once("classes/lcControle.class.php");

session_start();

$user = unserialize($_SESSION['user']);

$lc = new lcControle();

$todos = $lc->controleAcao('selecionarTodos');

?>

<!DOCTYPE html>
<html lang="en">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
			<h1 class="page-header">Lista de compras</h1>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			<?php
			if($todos == false){
				echo "Ainda não há nada para ser comprado.";
			}
			else{
				?>
				<table id="lista" class="display">
					<thead>
						<tr>
							<th>Descrição</th>
							<th>Data</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
							<?php
							foreach ($todos as $um) {
								echo "<tr>";
								echo "<td width='10%'>".$um[1]."</td>";
								echo "<td width='10%'>".$um[2]."</td>";
								echo "<td width='10%'><a href='apagarLc.php?id=".$um[0]."'>Apagar</a></td>";
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
				<input type="submit" value="Novo registro" onclick="location. href= 'cadastraLc.php' "> 
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
    $('#lista').DataTable();
} );
window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
</body>
</html>