<?php
include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/usuario.class.php");
include_once("classes/caixa.class.php");
include_once("classes/caixaControle.class.php");
session_start();

if(isset($_GET['error'])){
	if($_GET['error'] == 1){
		echo '<script>alert("Favor preencha todos os campos.")</script>';
	}
}

?>
<div class="container-fluid">
	<div class="row">
		<?php
    //include_once("inputs/menu.php");
		?>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header">Nova entrada</h1>

			<div class="row placeholders">
				<form action="salvarEntrada.php" method="post"  align="left">
					<p>	
						Valor: <input type="number" name="valor" placeholder="Valor" required="required">
					</p>
					<p>
						Descrição: <input type="text" name="descricao" placeholder="Descrição" required="required">
					</p>
					<p>
						<input type="submit" value="Salvar">
					</p>
				</form>
			</div>
		</div>
	</div>
</div>