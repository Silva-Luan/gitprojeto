<?php 
	include("../../checagem.php");

	if ($_SESSION["tipo"]!=2) {
		header("Location:../posts/index.php?erro=1");
        exit;
	}
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
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap-theme.css">
	<title>TheBlogue - <?php echo $_SESSION['nome_usuario']; ?></title>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="container">			
					<ul class="nav nav-tabs nav-pills">							
						<li role="presentation" class="active"><a href="../../index.php">Home</a></li>						
						<li class="hidden-xs " role="presentation"><a href="#">Gestão de Editores</a></li>						
							<li class=" col-xs-8 visible-xs text-nowrap text-left" role="presentation"><a href="#">Gestão de Editores</a></li>
						<li><a href="../posts/index.php">Posts</a></li>
						<li><a href="index.php">Usuários</a></li>
						<li><a href="#">Trocar Senha</a></li>
						<li><a href="../../sair.php">Sair</a></li>
								
					</ul>				
			</div>
		</div>
	</div>

