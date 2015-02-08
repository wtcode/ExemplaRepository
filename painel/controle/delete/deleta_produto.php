<?php
	include "../conect.php";
	
	$id = $_GET['id'];	
	
	
	$sql_delete_imagem = "delete from produtos where idprodutos = '$id'";
	$result_delete_imagem = mysql_query($sql_delete_imagem,$conect);

	echo "<script>
			location.href = '../../produtos.php?id=3';
		</script>
	";
?>