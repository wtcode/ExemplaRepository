<?php
	include "../conect.php";
	$idProduto = $_POST['id'];
	$bairro = $_POST['bairro'];
	$valor = $_POST['valor'];
	
	
	$sqlUpdateConteudo = "update frete set bairro = '$bairro', valor = '$valor' where idfrete = '$idProduto' ";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);


	echo "<script>
			location.href = '../../frete.php?id=$idProduto';
		  </script>";
?>