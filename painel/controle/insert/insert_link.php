<?php
	include "../conect.php";
	
	$id = $_POST['id'];
	$bairro = $_POST['bairro'];
	$valor = $_POST['valor'];
	
	$sqlInsertConteudo = "insert into frete(bairro,valor) values ('$bairro','$valor')";
	$resultInsertConteudo = mysql_query($sqlInsertConteudo,$conect);
	
	echo "
	<script>
		location.href = '../../frete.php'
	</script>
	";
?>