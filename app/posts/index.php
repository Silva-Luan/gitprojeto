<?php
	include("layout/header.php");
	include("../../config.php");

?>
<div class="container">
	<div class="table-responsive text-center" >
		<table class="table table-striped">
			<tr>
				<th>Título</th>
				<th>Autor</th>
				<th>Data de Criação</th>
				<th>Data de Atualização</th>
				<th colspan="2"></th>
			</tr>
<?php

	// $posts = mysqli_query($con, "SELECT * FROM posts");
	// 	while ($post = mysqli_fetch_array($posts)) {

$sql = 
 		"SELECT posts.* , usuarios.nome AS nomeDoUsuario  FROM posts INNER JOIN usuarios ON posts.usuario = usuarios.id ";
 		$posts = mysqli_query($con, $sql) or trigger_error(mysqli_error($con));
 		while ($post = mysqli_fetch_array($posts)) {
			
?>		
			<tr>				
				<td><a title="Clique para exibir o conteúdo" href="show.php?id=<?php echo $post['id']?>"><?php echo $post['titulo']; ?></a></td>
				<td><a title="Clique para exibir o conteúdo" href="show.php?id=<?php echo $post['id']?>"><?php echo $post['nomeDoUsuario']; ?></a></td>
				<td><a title="Clique para exibir o conteúdo" href="show.php?id=<?php echo $post['id']?>"><?php echo $post['criado_em']; ?></a></td>
				<td><a title="Clique para exibir o conteúdo" href="show.php?id=<?php echo $post['id']?>"><?php echo $post['atualizado_em']; ?></a></td>
				<td><a href="edit.php?id=<?php echo $post['id']?>">Editar</a></td>
				<td><a href="delete.php?id=<?php echo $post['id']?>" onclick="return confirm('Certeza que deseja remover essa parada?');">Remover</a></td>
			</tr>

	

<?php
		} //fim do loop

?>
		</table>
	</div>

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

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>