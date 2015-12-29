<?php
	include "../conect.php";
	
	$id = $_GET['id'];	
	
	$sql_imagem_produto = "select * from link where idlink = '$id'";
	$result_imagem_produto = mysql_query($sql_imagem_produto,$conect);
	$linha_imagem_produto = mysql_fetch_array($result_imagem_produto);
	$imagem = $linha_imagem_produto['patch'];	
	$caminho_imagem = "../../../imagens/links/".$imagem;

	//exclusão da imagem no servidor
	unlink($caminho_imagem);

	//exclusão do nome da imagem no banco de dados
	$sql_delete_imagem = "update link set patch=null where idlink = '$id'";
	$result_delete_imagem = mysql_query($sql_delete_imagem,$conect);

	//echo $result_delete_imagem;
	
	//retorna para a tela de seleção
	echo "<script>";
	echo "location.href = '../../link.php?id=2&lnk=$id&pg=6'";
	echo "</script>";
?>