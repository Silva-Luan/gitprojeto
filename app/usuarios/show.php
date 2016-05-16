<?php 
	include("layout/header.php");
	include("../../config.php");
 ?>

<?php if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM usuarios WHERE id = $id";
		$usuario = mysqli_fetch_assoc(mysqli_query($con, $sql));

	} 
?>
<div class="container">
				
<?php 
	if ($usuario['tipo'] == 1) {
		echo "<h4>Membro: <small>Administrador</small></h4>";
	}else if ($usuario['tipo'] == 0) {
		echo "<h4>Membro: <small>Editor</small></h4>";
	}else{
		echo "Erro.";
	}

 ?>

			 <form style="margin-top: 20" role="form" caction="new.php" method="post">
			 	<div class="form-group row">
			 		<div class="col-md-1">
			 			<label for="titulo">Nome:</label>
			 		</div>
			 		<div class="col-md-4">
			 			<?php echo $usuario['nome']; ?><br/>
			 		</div>
				 </div>
				 <div class="form-group row">
				 	<div class="col-md-1">
				 		<label>Email:</label><br/>
				 	</div>
				 	<div class="col-md-4">
				 		<?php echo $usuario['email']; ?><br/>
				 	</div>
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