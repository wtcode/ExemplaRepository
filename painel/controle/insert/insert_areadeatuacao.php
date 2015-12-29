<?php
	include "../conect.php";
	
	$titulo = $_POST['titulo'];
	$conteudo = addslashes(stripslashes($_POST['conteudo']));
	
	$sqlInsertConteudo = "insert into conteudo(idPagina,titulo,conteudo) values (8,'$titulo','$conteudo')";
	$resultInsertConteudo = mysql_query($sqlInsertConteudo,$conect);
	
	$capturaid = "SELECT max(idconteudo) as ultimo FROM conteudo";
	$resultCapturaId = mysql_query($capturaid,$conect);
	$linhaCapturaId = mysql_fetch_array($resultCapturaId);
	
	$_SESSION['idconteudo'] = $linhaCapturaId['ultimo'];
	
	include "../upload/fotos_areadeatuacao.php";
	
	
	echo "
	<script>
		location.href = '../../cadastramento.php?cad=5'
	</script>
	";
?>