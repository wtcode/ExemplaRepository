<?php
	include "../conect.php";
	
	//$id = $_POST['id'];
	
	$nome = $_POST['nome'];
	$link = $_POST['link'];
	$idpagina = '6';
	
	$sqlInsert = "insert into link(idpagina,nome,link) values ('$idpagina','$nome','$link')";
	$resultInsertConteudo = mysql_query($sqlInsert,$conect);
	
	//echo $sqlInsert;
	//echo $resultInsertConteudo;
	
	$capturaid = "SELECT max(idlink) as ultimo FROM link";
	$resultCapturaId = mysql_query($capturaid,$conect);
	$linhaCapturaId = mysql_fetch_array($resultCapturaId);
	
	$_SESSION['idlink'] = $linhaCapturaId['ultimo'];
	
	include "../upload/fotos_link.php";
	
	echo "
	<script>
		location.href = '../../link.php?id=1'
	</script>
	";
?>