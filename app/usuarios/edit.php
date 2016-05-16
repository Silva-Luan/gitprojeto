<?php
		include("layout/header.php");
		include("../../config.php");

	  	
			if(isset($_POST['atualizar'])){

				$id = $_POST['id'];
				$nome = addslashes(trim($_POST["nome"]));
				$email = addslashes(trim($_POST["email"]));
				$tipo = addslashes($_POST["tipo"]);

					if (!$nome  || !$email) {
			 		echo "<div class='container'><div class='alert alert-danger'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Há campos vazios, a atualização não pôde ser efetuada</strong>
					</div></div>";
	 				}else{


							$sqlUpdate = "UPDATE usuarios SET nome = '$nome', email = '$email', tipo='$tipo' WHERE id='$id'";

							if (mysqli_query($con, $sqlUpdate)) {
								
								header("Location:index.php?");
								} else {
								    echo "Erro ao salvar" . mysqli_error($con);
								  }
							}
			}



	if(isset($_GET['id']) && (int)$_GET['id']){

		$id = $_GET['id'];

		$usuarios = mysqli_query($con, "SELECT * FROM usuarios WHERE id=$id");
			while($usuario = mysqli_fetch_array($usuarios)){

?>

		<div class="container">
				
					 <form class="form-group col-md-6" style="margin-top: 10" role="form" action="" method="post" >
					 	
					<div class="form-group has-default has-feedback">	
					 		<label>Nome:</label>
					 		
					 	<div>
					 			<input  name="nome" value="<?php echo $usuario['nome']; ?>" class="form-control" type="text"/>
					 	</div>
					</div>

					<div class="form-group has-default has-feedback">
						 	
							<label>Email:</label>
						 	
						
						<div>
						 		<input name="email" value="<?php echo $usuario['email']; ?>" class="form-control" type="text">
						</div>
					</div>


					<div class="form-group has-default has-feedback">	
					      <label >Categoria:</label>
					      <select name="tipo" class="form-control">
					        <option value="<?php if ($usuario['tipo']==1) {	echo "1";}else{ echo "2"; } ?>"><?php if ($usuario['tipo']==1) {
					        	echo "Editor</option><option value='2'>Administrador</option>";
					        	}else{
					        		echo "Administrador</option><option value='1'>Editor</option>";
					        	}
					        	  ?>
					       </select> 	
					 </div>	
						 <input name="id" type="hidden" value="<?php echo $usuario['id']; ?>" class="form-control" type="text">
					 	<input type="submit" class="btn btn-default" name="atualizar" value="Salvar">
					 </form>


				
			
				<div class="col-md-12 row">
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
		</div>
				
<?php

	}
}
	

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>

</body>
</html>