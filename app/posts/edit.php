<?php
		include("layout/header.php");
		include("../../config.php");
	  	
			if(isset($_POST['atualizar'])){
				$id = $_GET['id'];
				$titulo = $_POST['titulo'];
				$conteudo = $_POST['conteudo'];
								

		date_default_timezone_get("America/Belem");

 		$data = date("Y-m-d H:i:m");

				$atualizado_em = $_POST['atualizado_em'] = $data = date("Y-m-d H:i:m");


				$sqlUpdate = "UPDATE posts SET titulo = '$titulo', conteudo = '$conteudo', atualizado_em='$atualizado_em' WHERE id='$id'";

				if (mysqli_query($con, $sqlUpdate)) {
					
					    header("Location:index.php");
					} else {
					    echo "Erro ao salvar" . mysqli_error($con);
				}
			}



	if(isset($_GET['id']) && (int)$_GET['id']){

		$id = $_GET['id'];

		$posts = mysqli_query($con, "SELECT * FROM posts WHERE id=$id");
			while($post = mysqli_fetch_array($posts)){

?>
		<div class="container">
				
					 <form style="margin-top: 20" role="form" caction="new.php" method="post">
					 	<div class="form-group row">
					 		<div class="col-md-1">
					 			<label for="titulo">Título:</label>
					 		</div>
					 		<div class="col-md-4">
					 			<input  name="titulo" value="<?php echo $post['titulo']; ?>" placeholder="Defina o título aqui" class="form-control" type="text"/><br/>
					 		</div>
						 </div>
						 <div class="form-group row">
						 	<div class="col-md-1">
						 		<label>Conteúdo:</label><br/>
						 	</div>
						 	<div class="col-md-11">
						 		<textarea name="conteudo" class="form-control" rows="10" cols="70"><?php echo $post['conteudo']; ?></textarea><br/>
						 	</div>
						 </div>
						 	
						 	<input type="hidden" value="<?php echo $post['usuario']; ?>" name="usuario" />						 	
						 	<input type="submit" class="btn btn-default" name="atualizar" value="Salvar">
					 	
					 </form>
				
			
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>
				
<?php

	}
}
	

?>


</body>
</html>