<?php
	include "../conect.php";
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$descricao = addslashes(stripslashes($_POST['descricao']));
	
	$sqlUpdateConteudo = "update conteudo set titulo = '$titulo', descricao = '$descricao' where idPagina = '$id'";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);
	
	if($id == 5){
		include "../upload/imagem_midia.php";	
	}
	
	echo "<script>
			location.href = '../../conteudo.php?id=$id'
		  </script>";
?>