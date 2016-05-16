<?php
	include("../../config.php");

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$sql = "DELETE FROM usuarios where id=$id";
		mysqli_query($con, $sql);

		if(mysqli_affected_rows($con)){
			echo "Registro Removido";
			
			header("Location:index.php");
			
		}else{
			echo "Houve um erro";
		}
			echo " <a href='index.php'><< Voltar</a>";

	}

?>

