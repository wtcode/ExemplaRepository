<?php
	include "../conect.php";
	
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$descricao = addslashes(stripslashes($_POST['descricao']));
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];
	
	$dataEnvento = $ano."-".$mes."-".$dia;
	
	$sqlInsertConteudo = "insert into receita(titulo,descricao) values ('$titulo','$descricao')";
	$resultInsertConteudo = mysql_query($sqlInsertConteudo,$conect);
	
	$capturaid = "select idreceita from receita where idreceita = LAST_INSERT_ID()";
	$resultCapturaId = mysql_query($capturaid,$conect);
	$linhaCapturaId = mysql_fetch_array($resultCapturaId);
	$_SESSION['idEvento'] = $linhaCapturaId['idreceita'];
	
	include "../upload/banner_receita.php";
	
	echo "
	<script>
		location.href = '../../receita.php'
	</script>
	";
?>