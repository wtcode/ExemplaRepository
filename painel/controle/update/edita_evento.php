<?php
	include "../conect.php";
	$idProduto = $_POST['id'];
	$titulo = $_POST['titulo'];
	$descricao = addslashes(stripslashes($_POST['descricao']));
	
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];
	
	$dataEnvento = $ano."-".$mes."-".$dia;
	
	$sqlUpdateConteudo = "update evento set titulo = '$titulo', descricao = '$descricao', dataEvento = '$dataEnvento' where idEvento = '$idProduto' ";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);

	$_SESSION['idEvento'] = $idProduto;
	
	include "../upload/banner_evento.php";

	echo "<script>
			location.href = '../../evento.php?pt=1&id=$idProduto';
		  </script>";
?>