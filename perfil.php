<?php
session_start();
include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/usuario.class.php");

?>


<!DOCTYPE html>
<html lang="en">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header">Perfil</h1>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			<table>
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Senha</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						$user = unserialize($_SESSION['user']);
						
						echo "<td width='10%' left='2%'>".$user->getNome()."</td>";
						echo "<td width='20%' left='2%'>".$user->getEmail()."</td>";
						echo "<td width='10%' left='2%'><input type='password' id='senha' style='background:white; border:none;' disabled='disabled' value='".$user->getSenha()."'></input</td>";
						echo "<td><img src='img/olho.png' id='olho'width='25px' heigth='25px'></td>";
						
						?>
					</tr>
				</tbody>
			</table>


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
    <script>
    	$(document).ready(function(){
    		$( "#olho" ).mousedown(function() {
    			$("#senha").attr("type", "text");
    		});

    		$( "#olho" ).mouseup(function() {
    			$("#senha").attr("type", "password");
    		});

    		$( "#olho" ).mouseout(function() { 
    			$("#senha").attr("type", "password");
    		});
    	});
    </script>
</body>
</html>
