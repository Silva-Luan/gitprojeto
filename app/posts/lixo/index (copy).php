<?php
	include("../../config.php");

?>
<html lang="pt-BR">
<head>
	<meta name="author" content="Luan Silva">
	<meta name="reply-to" content="luansstkd@gmail.com">
	
	<!-- <meta http-equiv="refresh" content=" 10 ;url=http://localhost/horario/horario.php"> -->


	<meta charset="UTF-8">
	<meta name="description" content="Home"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
<body>
	<div class="container">
	<div class="jumbotron">
			<div class="container">
				
					<ul class="nav nav-tabs nav-pills">
						<li role="presentation" class="active"><a href="http://localhost/systems/unifaphp/app/posts/index.php">Home</a></li>
						<li role="presentation"><a href="#">Curso Web (HTML, CSS, BOOTSTRAP, PHP)</a></li>
					</ul>
				
			</div>
		</div>

		<table class="table">
			<tr>
				<th>Título</th>
				<th>Conteúdo</th>
				<th>Usuário</th>
				<th>Data de Criação</th>
				<th>Data de Atualização</th>
				<th colspan="2"></th>
				<th></th>
			</tr>
<?php

	$posts = mysqli_query($con, "SELECT * FROM posts LIMIT 10");
		while ($post = mysqli_fetch_array($posts)) {
			
?>		
	<tr>
		<td><a href="show.php?id=<?php echo $post['id']?>"><?php echo $post['titulo']; ?></a></td>
		<td><a href="show.php?id=<?php echo $post['id']?>"><?php echo $post['conteudo']; ?></a></td>
		<td><a href="show.php?id=<?php echo $post['id']?>"><?php echo $post['usuario']; ?></a></td>
		<td><a href="show.php?id=<?php echo $post['id']?>"><?php echo $post['criado_em']; ?></a></td>
		<td><a href="show.php?id=<?php echo $post['id']?>"><?php echo $post['atualizado_em']; ?></a></td>
		<td><a href="edit.php?id=<?php echo $post['id']?>">Editar</a></td>
		<td><a href="delete.php?id=<?php echo $post['id']?>">Remover</a></td>

	</tr>

	

<?php
		} //fim do loop

?>
		</table>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="new.php">
			        Adicionar
			      </a>
			    </div>
			  </div>
			</nav> 
	</div>
</body>
</html>