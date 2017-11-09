<?php
include_once("inputs/header.php");
include_once("inputs/menu.php");
include_once("classes/usuario.class.php");
include_once("classes/fornecedoresControle.class.php");
include_once("classes/fornecedores.class.php");

$fc = new fornecedoresControle();

$forn = $fc->controleAcao('selecionarTodos');

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
			<h1 class="page-header">Cadastro de produto</h1>

			<div class="row placeholders">
				<form action="salvarProduto.php" method="post"  align="left">
					<p>
						Categoria:
						<select name="categoria">
							<option value="Memoria">Memória</option>
							<option value="Hd">HD</option>
							<option value="Processador">Processador</option>
							<option value="Motherboard">Placa mãe</option>
							<option value="DVD/CD">DVD/CD</option>
							<option value="Fonte">Fonte</option>
							<option value="Pendrive">Pendrive</option>
							<option value="Roteador">Roteador</option>
							<option value="Cabos">Cabos</option>
							<option value="Gabinete">Gabinete</option>
							<option value="Estabilizador">Estabilizador</option>
							<option value="Nobreak">Nobreak</option>
							<option value="Placa de rede">Placa de rede</option>
							<option value="Impressora">Impressora</option>
							<option value="Monitor">Monitor</option>
							<option value="Periférico">Periférico</option>
							<option value="Outros">Outros</option>
						</select>
					</p>
					<p>
						Descrição: <input type="text" name="descricao" placeholder="Descrição" required="required">
					</p>
					<p>	
						Marca: <input type="text" name="marca" placeholder="Marca" required="required">
					</p>
					<p>	
						Fornecedor:
						<select name="fornecedor">
							<?php
							foreach($forn as $um){
								echo '<option value="'.$um[1].'">'.$um[1].'</option>';
							}
							?>
						</select>
					</p>
					<p>	
						Quantidade: <input type="text" name="quantidade" placeholder="Quantidade" required="required">
					</p>
					<p>	
						Custo: <input type="number" name="custo" placeholder="Marca" required="required">
					</p>
					<p>	
						Preço final: <input type="number" name="precoFinal" placeholder="Preço final" required="required">
					</p>
					<p>
						<input type="submit" value="Salvar">
					</p>
				</form>
			</div>
		</div>
	</div>
</div>