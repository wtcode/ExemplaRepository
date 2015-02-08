<?php 
	include "../conect.php";
	
	$titulo 	= $_POST['titulo'];
	$descricao  = $_POST['descricao'];
	
	$sql_insert_categoria 	 = "insert into categoria (titulo,descricao) value ('$titulo', '$descricao')";

	$result_insert_categoria =	mysql_query($sql_insert_categoria,$conect);
?>
<script>
	location.href = "../../produtos.php?id=1"
</script>