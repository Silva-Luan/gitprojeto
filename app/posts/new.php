<?php 
	include("layout/header.php");
	include("../../config.php");
 ?>

 <?php 
//if($_POST['enviado'])
 
 	if (isset($_POST['enviado'])) {
 		
 		date_default_timezone_get("America/Belem");

 		$data = date("Y-m-d H:i:m");
 		print_r($data);
 		echo "<br/>2016-02-02 00:00:00";
 		$sql = "INSERT INTO posts (titulo, conteudo, usuario, criado_em) VALUES('{$_POST['titulo']}','{$_POST['conteudo']}','{$_POST['usuario']}','{$data}')";
 		mysqli_query($con, $sql) or die(mysqli_error($con));
 		
 		header("Location:index.php");


 		
 	}

 	// if (isset($_POST["submit"])) {

		// echo "Tem dados no POST";
		// }else{
 	// 	echo "<br/>Não tem dados no POST";
 	// }



  ?>

		<div class="container">
				
					 <form style="margin-top: 20"  role="form" action="new.php" method="post">
					 	<div class="form-group row">
						 	<div class="col-md-1">
						 		<label  for="titulo">Título:</label>
						 	</div>
							<div class="col-md-4">
					 			<input name="titulo" placeholder="Defina o título aqui" class="form-control" type="text"/><br/>
					 		</div>			
						 </div>
						 <div class="form-group row">
						 	<div class="col-md-1">
							 	<label>Conteúdo:</label><br/>
							 </div>
							 <div class="col-md-11">
							 	<textarea name="conteudo" class="form-control" rows="10" cols="70"></textarea><br/>
							 </div>
						 </div>
						 <div>
						 	<input type="hidden" name="usuario" value="<?php echo $_SESSION["id_usuario"] ?>" />						 	
						 	<input type="submit" class="btn btn-default" name="enviado" value="Salvar">
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