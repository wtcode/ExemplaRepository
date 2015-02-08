<?php
	include "../conect.php";
	
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$descricao = addslashes(stripslashes($_POST['descricao']));
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];
	
	$dataEnvento = $ano."-".$mes."-".$dia;
	
	$sqlInsertConteudo = "insert into evento(titulo,descricao,dataEvento) values ('$titulo','$descricao','$dataEnvento')";
	$resultInsertConteudo = mysql_query($sqlInsertConteudo,$conect);
	
	$capturaid = "select idEvento from evento where idEvento = LAST_INSERT_ID()";
	$resultCapturaId = mysql_query($capturaid,$conect);
	$linhaCapturaId = mysql_fetch_array($resultCapturaId);
	$_SESSION['idEvento'] = $linhaCapturaId['idEvento'];
	
	include "../upload/banner_evento.php";
	
	echo "
	<script>
		location.href = '../../evento.php'
	</script>
	";
?>