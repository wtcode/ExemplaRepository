<?php
	include "../conect.php";
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$conteudo = $_POST['conteudo'];
	
	$sqlUpdateConteudo = "update conteudo set titulo = '$titulo', conteudo = '$conteudo' where idconteudo = '$id' ";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);

	echo "<script>
			location.href = '../../portifolio.php?id=1';
		  </script>";
?>