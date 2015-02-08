<?php
	include "../conect.php";
	
	$id = $_GET['id'];
	$habilitado = $_GET['hab'];
	$home = $_GET['hom'];
	$topo = $_GET['topo'];
	
	
	if($habilitado != ""){
		if($habilitado == 1){
			$sqlUpdateConteudo = "update produtos set idhabilitado = '$habilitado'	where idprodutos = '$id'";
			$sql_result_conteudo = mysql_query($sqlUpdateConteudo,$conect);
		} else {
			$sqlUpdateConteudo = "update produtos set idhabilitado = ''	where idprodutos = '$id'";
			$sql_result_conteudo = mysql_query($sqlUpdateConteudo,$conect);
		}
	}
	
	if($home != ""){
		if($home == 1){
			$sqlUpdateConteudo = "update produtos set destaque_home = '$home'	where idprodutos = '$id'";
			$sql_result_conteudo = mysql_query($sqlUpdateConteudo,$conect);
		} else {
			$sqlUpdateConteudo = "update produtos set destaque_home = ''	where idprodutos = '$id'";
			$sql_result_conteudo = mysql_query($sqlUpdateConteudo,$conect);
		}
	}
	
	if($topo != ""){
		if($topo == 1){
			$sqlUpdateConteudo = "update produtos set destaque_topo = '$topo' where idprodutos = '$id'";
			$sql_result_conteudo = mysql_query($sqlUpdateConteudo,$conect);
		} else {
			$sqlUpdateConteudo = "update produtos set destaque_topo = '' where idprodutos = '$id'";
			$sql_result_conteudo = mysql_query($sqlUpdateConteudo,$conect);
		}
	}
	
?>
<script>
	location.href = "../../produtos.php?id=3";
</script>