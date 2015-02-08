<?php 
	include "../conect.php";
	
	$id = $_POST['id'];
	$titulo 	= $_POST['titulo'];
	$descricao  = $_POST['descricao'];
	
	$sql_update_categoria 	 = "update categoria set titulo = '$titulo', descricao = '$descricao' where idcategoria = '$id'";

	$result_insert_categoria =	mysql_query($sql_update_categoria,$conect);
?>
<script>
	location.href = "../../produtos.php?id=1"
</script>