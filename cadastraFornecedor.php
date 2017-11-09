<?php
include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/usuario.class.php");
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
			<h1 class="page-header">Cadastro de fornecedores</h1>

			<div class="row placeholders">
				<form action="salvarFornecedor.php" method="post"  align="left">
					<p>
						Nome: <input type="text" name="nome" placeholder="Nome" required="required">
					</p>
					<p>	
						Telefone: <input type="text" name="telefone" placeholder="Telefone" required="required">
					</p>
					<p>	
						Email: <input type="text" name="email" placeholder="Email" required="required">
					</p>
					<p>
						<input type="submit" value="Salvar">
					</p>
				</form>
			</div>
		</div>
	</div>
</div>