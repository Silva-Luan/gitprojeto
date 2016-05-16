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


				$sqlUpdate = "UPDATE posts SET titulo = '$titulo', conteudo = '$conteudo', usuario='$usuario', atualizado_em='$atualizado_em' WHERE id='$id'";

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
		<div class="jumbotron">
			<div class="container">
				
					<ul class="nav nav-tabs nav-pills">
						<li role="presentation" class="active"><a href="http://localhost/systems/unifaphp/app/posts/index.php">Home</a></li>
						<li role="presentation"><a href="#">Curso Web (HTML, CSS, BOOTSTRAP, PHP)</a></li>
					</ul>
				
			</div>
		</div>
		<div class="container">
				<div class="row">
					 <form style="margin-top: 20" class="form-horizontal" role="form" caction="new.php" method="post">
					 	<div class="form-group">
					 		<label for="titulo">Título:</label>
					 		<input  name="titulo" value="<?php echo $post['titulo']; ?>" placeholder="Defina o título aqui" class="form-control" type="text"/>
						 </div>
						 <div class="form-group">
						 	<label>Conteúdo:</label><br/>
						 	<textarea name="conteudo" class="form-control" rows="10" cols="70"><?php echo $post['conteudo']; ?></textarea><br/>
						 </div>
						 	<input type="hidden" value="<?php echo $post['usuario']; ?>" name="usuario" value="1" />
						 	<!-- <input type="hidden" name="enviado" value="1" /> -->
						 	<input type="submit" class="btn btn-default" name="atualizar" value="Salva">
					 	
					 </form>
				</div>
			
				<div class="navbar">
		 			<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <div class="navbar-header">
					      <a class="navbar-brand" href="index.php">
					        Voltar
					      </a>
					    </div>
					  </div>
					</nav>
				</div>
		</div>
				
<?php

	}
}
	

?>


</body>
</html>