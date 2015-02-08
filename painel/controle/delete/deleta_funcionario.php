<?php
	include "../conect.php";
	
	$id = $_GET['id'];	
	
	
	$sql_delete_imagem = "delete from cadastro where cdcadastro = '$id'";
	$result_delete_imagem = mysql_query($sql_delete_imagem,$conect);

	echo "<script>
			location.href = '../../cadastramento.php?cad=3';
		</script>
	";
?>