 <html lang="pt-BR">
<head>
	<meta name="author" content="Luan Silva">
	<meta name="reply-to" content="luansstkd@gmail.com">
	
	<!-- <meta http-equiv="refresh" content=" 10 ;url=http://localhost/horario/horario.php"> -->


	<meta charset="UTF-8">
	<meta name="description" content="TheBlogue"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css">
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="container">			
					<ul class="nav nav-tabs nav-pills">							
						<li role="presentation" class="active"><a href="../index.php">Home</a></li>						
						<li class="hidden-xs " role="presentation"><a href="#">Login</a></li>						
							<li class=" col-xs-8 visible-xs text-nowrap text-left" role="presentation"><a href="#">Login</a></li>
								
					</ul>				
			</div>
		</div>
	</div>

<div class="container">

<?php 
	if (isset($_GET['erro'])) {
		$erro = $_GET['erro'];
		if ($erro == 1) {
		
		echo "<div class='alert alert-danger'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Você deve digitar seu email e senha</strong>
			</div>";
		}
		if ($erro == 2){

		echo "<div class='alert alert-danger'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Senha inválida</strong>
			</div>";
		}
		if ($erro == 3){

		echo "<div class='alert alert-danger'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Login inválido</strong>
			</div>";
		}
	}


 ?>



	<form method="post" action="auth.php" class="col-md-6">

	<div class="form-group has-default has-feedback">
	  <label class="control-label sr-only" for="inputGroupSuccess4">Input group with success</label>
	  <div class="input-group">
	    <span class="input-group-addon">Email: </span>
	    <input type="email" name="email"  title="Preencha o campo com um email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="exemplo@email.com" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
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

	<input class="btn btn-default" type="submit" value="Entrar">

	</form>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>


</body>
</html>