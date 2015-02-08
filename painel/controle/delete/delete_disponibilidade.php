<?php
	$id = $_GET['id'];
	$prod = $_GET['prod'];
	
	include "../conect.php";
	
	$delete_disponibilidade = "delete from diponibilidade_produto where iddiponibilidade_produto = '$id'";
	$result_disponibilidade = mysql_query($delete_disponibilidade,$conect);
	
	echo "<script>
			location.href = '../../produtos.php?pt=1&prod=$prod';
		</script>
	";
?>