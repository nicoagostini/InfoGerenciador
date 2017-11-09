<?php
include_once("classes/tdl.class.php");
include_once("classes/tdlControle.class.php");

$id = $_POST['id'];


$lcc = new tdlControle();
$lcc->controleAcao('deletar', $id);
?>

<div class="col-sm-3 col-md-2 sidebar">
	<ul class="nav nav-sidebar">
		<li class="active"><a href="#">To Do List <span class="sr-only">(current)</span></a></li>
		<br>
		<table id='todo' class="table"><th>Descrição</th><th>Data</th><li>

			<?php

			$todas = $lcc->controleAcao('selecionarTodos');

			foreach($todas as $uma){
				echo "<tr>";
				echo "<td>".$uma[1]."</td>";
				echo "<td>".$uma[2]."</td>";
				echo "<td><button class='apa glyphicon glyphicon-trash' value='".$uma[0]."'></button></td>";
				echo "<tr>";
			}
			?>

		</li></table>

		<form id="tdl">
			<input type="text" name="descricao" placeholder="Tarefa"></input>
			<input type="submit" value="Salvar"></input>
		</form>
	</ul>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		$('#tdl').submit(function(){
			event.preventDefault();
			$.ajax({
				'data':{descricao:$("input[name=descricao]").val()},
				'url':'salvarTdl.php',
				'method': 'post'
			})
			.done(function(data){
				$("#todo").html(data);
			})
		})
		$('.apa').click(function(){
			event.preventDefault();
			var id = ($(this).val());
			$.ajax({
				'data':{id:id},
				'url':'apagarTdl.php',
				'method': 'post'
			})
			.done(function(data){
				$("#todo").html(data);
			})
		})
	</script>
</div>