<?php 
		include("../../checagem.php");
 ?>

 <html lang="pt-BR">
<head>
	<meta name="author" content="Luan Silva">
	<meta name="reply-to" content="luansstkd@gmail.com">
	
	<!-- <meta http-equiv="refresh" content=" 10 ;url=http://localhost/horario/horario.php"> -->


	<meta charset="UTF-8">
	<meta name="description" content="TheBlogue"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
	<title>TheBlogue - <?php echo $_SESSION['nome_usuario']; ?></title>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="container">			
					<ul class="nav nav-tabs nav-pills">							
						<li role="presentation" class="active"><a href="../../index.php">Home</a></li>						
						<li class="hidden-xs " role="presentation"><a href="#">Gestão de Publicações</a></li>								
							<li class=" col-xs-8 visible-xs text-nowrap text-left" role="presentation"><a href="#">Gestão de Publicações</a></li>
						<li><a href="index.php">Posts</a></li>
						<li><a href="../usuarios/index.php">Usuários</a></li>
						<li><a href="#">Trocar Senha</a></li>
						<li><a href="../../sair.php">Sair</a></li>								
					</ul>				
			</div>
		</div>
<?php if (@$_GET["erro"]==1){
		echo "<div class='alert alert-danger'>
		<button type='button' class='close' data-dismiss='alert'>&times;</button>
		<strong>Só administradores podem ter acesso a divisão de usuários</strong>
		</div>";
	} ?>
	</div>

	
		