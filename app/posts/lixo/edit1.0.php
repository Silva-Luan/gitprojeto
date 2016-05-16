<?php
		include("../../config.php");

			if (isset($_POST['cancelar'])) {
				header("Location: http://localhost/systems/unifaphp/app/posts/index.php");
			}

	  	
			if(isset($_POST['atualizar'])){
				$id = $_GET['id'];
				$titulo = $_POST['titulo'];
				$conteudo = $_POST['conteudo'];
				$usuario = $_POST['usuario'];
				$criado_em = $_POST['criado_em'];

		date_default_timezone_get("America/Belem");

 		$data = date("Y-m-d H:i:m");

				$atualizado_em = $_POST['atualizado_em'] = $data = date("Y-m-d H:i:m");


				$sqlUpdate = "UPDATE posts SET titulo = '$titulo', conteudo = '$conteudo', usuario='$usuario', criado_em='$criado_em', atualizado_em='$atualizado_em' WHERE id='$id'";

				if (mysqli_query($con, $sqlUpdate)) {
					
					    header("Location: http://localhost/systems/unifaphp/app/posts/index.php");
					} else {
					    echo "Erro ao salvar" . mysqli_error($con);
				}
			}



	if(isset($_GET['id']) && (int)$_GET['id']){

		$id = $_GET['id'];

		$posts = mysqli_query($con, "SELECT * FROM posts WHERE id=$id");
			while($post = mysqli_fetch_array($posts)){

?>
<!DOCTYPE HTML>
<html land="pt-BR">
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<title>Atualizar Cadastro</title>
  	<meta name="description" content="Curso web" />
   	<meta name="author" content="Luan Silva"/>
   	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css" />
  	<link rel="stylesheet" />
 
</head>
<body>
	<div class="container-fluid">
	<div class="jumbotron">
			<div class="container">
				
					<ul class="nav nav-tabs nav-pills">
						<li role="presentation" class="active"><a href="http://localhost/systems/unifaphp/app/posts/index.php">Home</a></li>
						<li role="presentation"><a href="#">Curso Web (HTML, CSS, BOOTSTRAP, PHP)</a></li>
					</ul>
				
			</div>
		</div>
		<section class="jumbotron">
			<form action="" method="post">
				<table class="table">
					<tr>
						<th>Título</th>
						<th>Conteúdo</th>
						<th>Usuário</th>
						<th>Data de Criação</th>
						<th>Data de Atualização</th>
					</tr>
					<tr>
						<td><input type="text" name="titulo" value="<?php echo $post['titulo']; ?>" placeholder="Título:" /></td>
						<td><input type="text" name="conteudo" value="<?php echo $post['conteudo']; ?>" placeholder="Conteúdo:" /></td>
						<td><input type="text" name="usuario" value="<?php echo $post['usuario']; ?>" placeholder="Usuário:" /></td>
						<td><input type="text" name="criado_em" readonly style="background: #EEE; cursor: not-allowed; color: #777" value="<?php echo $post['criado_em']; ?>" placeholder="Data de Criação:" /></td>
						<td><input type="text" name="atualizado_em" readonly style="background: #EEE; cursor: not-allowed; color: #777" value="<?php echo $post['atualizado_em']; ?>" placeholder="Data de Atualização:" /></td>
						
					</tr>
					
				</table>
<?php


?>
					
				<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">
				<a href=""><input type="submit" name="cancelar" class="btn btn-primary" value="Cancelar"></a>
			</form>
		</section>
	</div>
				
<?php

	}
}
	

?>


</body>
</html>