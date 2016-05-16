<?php 
	include("layout/header.php");
	include("../../config.php");
 ?>

<?php if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM posts WHERE id = $id";
		$post = mysqli_fetch_assoc(mysqli_query($con, $sql));

	} 
?>
<div class="container">

		<form style="margin-top: 20" role="form" caction="">
		 	<div class="form-group row">
		 		<div class="col-md-1">
		 			<label for="titulo">Título:</label>
		 		</div>
		 		<div class="col-md-4">
		 			<?php echo $post['titulo']; ?>
		 		</div>
			 </div>
			 <div class="form-group row">
			 	<div class="col-md-1">
			 		<label>Conteúdo:</label><br/>
			 	</div>
			 	<div class="col-md-11">
			 		<textarea name="conteudo" readonly class="form-control" rows="10" cols="70" style="background: #EEE; cursor: not-allowed; color: #777"><?php echo $post['conteudo']; ?></textarea><br/>
			 	</div>
			 </div>
			 <div class="row form-group text-center">
			 	<div class="col-sm-6 col-xs-6"><?php echo "Criado em: ". $post['criado_em']; ?><br/></div>
			 	<div class="col-sm-6 col-xs-6"><?php echo "Atualizado: ". $post['atualizado_em']; ?><br/></div>
			 </div>	 					 	
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
	</body>
</html>