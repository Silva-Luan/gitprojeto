<?php 
	include("layout/header.php");
	include("../../config.php");
 ?>
<div class="container">
 <?php 

 	


 	if (@$_POST["enviado"]) {

	 	$nome = addslashes(trim($_POST["nome"]));
		$email = addslashes(trim($_POST["email"]));
		$senha = addslashes(trim($_POST["senha"]));
		$tipo = addslashes(trim(@$_POST["tipo"]));


	if (!$nome  || !$email || !$senha || $tipo=="") {
 		echo "<div class='alert alert-danger'>
		<button type='button' class='close' data-dismiss='alert'>&times;</button>
		<strong>Faltam dados para o cadastro!</strong>
		</div>";
 	}else{

	 		$sql = "SELECT * FROM usuarios WHERE email = '" . $email . "'";
			$result_id = mysqli_query($con, $sql) or die("Erro no banco de dados!");
			$total = mysqli_num_rows($result_id);

			if($total)
			{
				echo "<div class='alert alert-danger'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Já existe existe um cadastro com este email</strong>
				</div>";
			}else{
				    
				$md5 = md5($senha);
		 		$sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES('$nome', '$email', '{$md5}', '$tipo' )";
		 		mysqli_query($con,$sql) or die(mysqli_error($con));
		 		echo "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Cadastrado com sucesso!</strong>
				</div>";	

			}



	 		
	 		
	 	}

 	}
  ?>

<form method="post" action="new.php" class="col-md-6 ">

	<div class="form-group has-default has-feedback">
	  <label class="control-label sr-only" for="inputGroupSuccess4">Input group with success</label>
	  <div class="input-group">
	    <span class="input-group-addon">Nome: </span>
	    <input type="text" name="nome"  title="Preencha o campo com um nome para o cadastro" placeholder="Insira o nome aqui" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
	  </div>
	  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	  <span id="inputGroupSuccess4Status" class="sr-only">(success)</span>
	</div>


	<div class="form-group has-default has-feedback">
	  <label class="control-label sr-only" for="inputGroupSuccess4">Input group with success</label>
	  <div class="input-group">
	    <span class="input-group-addon">Email: </span>
	    <input type="email" name="email" title="Preencha o campo com um email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="exemplo@email.com" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
	  </div>
	  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	  <span id="inputGroupSuccess4Status" class="sr-only">(success)</span>
	</div>

	<div class="form-group has-default has-feedback">
	  <label class="control-label sr-only" for="inputGroupSuccess4">Input group with success</label>
	  <div class="input-group">
	    <span class="input-group-addon">Senha: </span>
	    <input type="password" name="senha" placeholder="***********" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
	  </div>
	  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	  <span id="inputGroupSuccess4Status" class="sr-only">(success)</span>
	</div>

	<div class="form-group">
      <label for="disabledSelect">Categoria:</label>
      <select id="disabledSelect" name="tipo" class="form-control">
        <option value="">Escolha uma categoria</option>
        <option value="1">Editor</option>
 		<option value="2">Administrador</option>
      </select>
    </div>
 	<input class="btn btn-default" type="submit" name="enviado" value="Salvar" />
 </form>

<div class="col-md-12">
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
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>

 </body>
 </html>