<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta name="author" content="Luan Silva">
	<meta name="reply-to" content="luansstkd@gmail.com">
	<meta charset="UTF-8">
	<meta name="description" content="Blogue Computação UNIFAP"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">

<style>
body{
	padding-top: 60px;
}

a.painel{
	color:#524e5f;
	text-decoration:none;
}
.panel > .panel-heading {
    background-image: none;
    background-color: #313131;
    color: white;

}
</style>
	
	<title>The blogue</title>
</head>
<body>
<div class="container-fluide hidden-xs">	
	<nav class="nav navbar-inverse navbar-fixed-top col-md-12">
		<div class="container-fluid">
			<div class="navbar-header col-md-2,5">
				<a style="font-size:x-large;" class="navbar-brand" href="#">
					The Blogue
				</a>
			</div>
			<span class="navbar-text col-md-6" >
				<ul class="list-inline"  style="color:white;">
					<li>texto2</li>
					<li>texto3</li>
					<li>texto3</li>
					<li>texto3</li>
					<li>texto3</li>
					<li>texto3</li>
					<li>texto3</li>
					<li>texto3</li>							
				</ul>
			</span>				
			<div class="navbar-right col-md-1" >
				<button class="btn btn-default navbar-btn"><a style="text-decoration:none; color:black;" href="app/login.php">Login</a></button>
			</div>
			<div class="navbar-right">
				<form action="#" class="navbar-form">
					<input type="text" placeholder="Buscar no blogue" class="form-control">
				</form>
			</div>							
		</div>
	</nav>
</div>


<nav class = "navbar navbar-inverse visible-xs" role = "navigation" style="margin-top: -60px;">
   
   <div class = "navbar-header">
      <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>
		
      <a class = "navbar-brand" href = "#">The Blogue</a>
   </div>
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	
      <ul class = "nav navbar-nav">
        <li><a href = "app/login.php">Login</a></li>	
        <li><a href="">texto</a></li>
		<li><a href="">texto</a></li>
		<li><a href="">texto</a></li>
		<li><a href="">texto</a></li>
		<li><a href="">texto</a></li>
		<li><a href="">texto</a></li>
		<li><a href="">texto</a></li>
		<li><a href="">texto</a></li>
		<li><a href="">texto</a></li>
		
         <li>
         	<form action="#" class="navbar-form">
				<input type="text" placeholder="Buscar no blogue" class="form-control">
			</form>
         </li>			        		
      </ul>
   </div>
   
</nav>
				

<!-- Fim do navbar -->

		<div class="container-fluide">
			
	       		<div role="main" class="col-md-8" style="background-color:gray;">  

	       		<div class="divisor" style="margin-bottom:20px;"><hr></div>

				<?php 
	            	include("config.php");
	            	$posts = mysqli_query($con, "SELECT * FROM posts");
				 	while ($post = mysqli_fetch_array($posts)) {


	             ?>

	             		<div class="col-md-6" >
		             		<a class="painel" href="">
			             		<div class="panel panel-default">
			             			
			             			<div class="panel-heading" style="font-size:"><?php echo $post['titulo']; ?></div>
				             		
				             		<?php $text = substr($post['conteudo'],0,176); ?>

				             		<div class="panel-body"><?php echo wordwrap($text, 18, "<br\> \n", true)."..."; ?></div>
				             	
				             		<div class="panel-footer text-center hidden-xs hidden-md"><?php echo " Publicado: ".$post['criado_em'];
				             		if ($post['atualizado_em']!= "0000-00-00") {
				             			echo " > > Atualizado: ".$post['atualizado_em'];
				             		}
				             		 ?></div>
				             		<div class="panel-footer text-center visible-xs visible-md"><?php echo " Publicado >>> ".$post['criado_em'];
				             		if ($post['atualizado_em']!= "0000-00-00") {
				             			echo "<br/>Atualizado >>> ".$post['atualizado_em'];
				             		}
				             		 ?></div>
				             		
			             		</div>
		             		</a>
	             			
	             		</div>
	           <?php
	           		}
	           ?>

				</div>
	        
		        <aside role="complementary" class="col-md-4 hidden-xs">
		            Mais vistos	        
		        </aside>  
	        </div> 
		
		

		

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>