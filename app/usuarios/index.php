<?php 
	include("layout/header.php");
	include("../../config.php");

 ?>
 <div class="container">
	 <div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>id</th>
				<th>Nome</th>
				<th>Email</th>
				<th colspan="2">Opções</th>
			</tr>
			<?php 
				$usuarios = mysqli_query($con,"SELECT * FROM `usuarios`") or trigger_error(mysqli_error());
				while ($usuario = mysqli_fetch_array($usuarios)) {
			 ?>
			<tr>
				<td><?php echo $usuario['id']; ?></td>
				<td><a href="show.php?id=<?php echo $usuario['id']?>"><?php echo $usuario['nome']; ?></a></td>
				<td><?php echo $usuario['email']; ?></td>
				<td><a href="edit.php?id=<?php echo $usuario['id']?>">Editar</a></td>
				<td><a href="delete.php?id=<?php echo $usuario['id']?>" onclick="return confirm('Certeza que deseja remover essa parada?');" >Remover</a></td>
			</tr>
			<?php 
				}
			 ?>
		</table>	
	</div>

<div style="margin-bottom: 20px;">
<a href="new.php"><input class="btn btn-default" type="submit" value="[+] Novo Cadastro" /></a>
</div>
</div>

