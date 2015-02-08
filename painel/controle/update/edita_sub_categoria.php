<?php 
	include "../conect.php";
	
	$id 		= $_POST['id'];
	$titulo 	= $_POST['titulo'];
	$descricao  = $_POST['descricao'];
	$categoria	= $_POST['categoria'];
	
	$sql_update_categoria 	 = "update sub_categoria set idcategoria = '$categoria',titulo = '$titulo', descricao = '$descricao' where idsub_categoria = '$id'";
	
	$result_insert_categoria =	mysql_query($sql_update_categoria,$conect);
?>
<script>
	location.href = "../../produtos.php?id=2"
</script>