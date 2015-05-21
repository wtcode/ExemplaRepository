<?php
	include "../conect.php";
	
	
	$titulo = $_POST['titulo'];
	$conteudo = $_POST['conteudo'];
	$idpagina = 9;
	
	$sqlInsertConteudo = "insert into conteudo(idpagina, titulo, conteudo) values ($idpagina,'$titulo', '$conteudo')";
	$resultInsertConteudo = mysql_query($sqlInsertConteudo,$conect);
	
	echo "
	<script>
		location.href = '../../portifolio.php?id=1'
	</script>
	";
?>