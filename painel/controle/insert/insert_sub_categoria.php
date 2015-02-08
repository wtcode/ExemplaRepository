<?php 
	include "../conect.php";
	
	$titulo 	= $_POST['titulo'];
	$descricao  = $_POST['descricao'];
	$categoria  = $_POST['categoria'];
	
	$sql_insert_categoria 	 = "insert into sub_categoria (idcategoria,titulo,descricao) value ('$categoria','$titulo', '$descricao')";
	echo $sql_insert_categoria;
	$result_insert_categoria =	mysql_query($sql_insert_categoria,$conect);
?>
<script>
	location.href = "../../produtos.php?id=2"
</script>