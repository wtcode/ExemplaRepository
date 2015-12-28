<?php
	include "../conect.php";
	
	$id = $_GET['id'];	
	
	$sql_imagem_produto = "select * from conteudo where idconteudo = '$id'";
	$result_imagem_produto = mysql_query($sql_imagem_produto,$conect);
	$linha_imagem_produto = mysql_fetch_array($result_imagem_produto);
	$imagem = $linha_imagem_produto['patch'];	
	$caminho_imagem = "../../../imagens/".$imagem;

	//exclusão da imagem no servidor
	unlink($caminho_imagem);

	//exclusão do nome da imagem no banco de dados
	$sql_delete_imagem = "update conteudo set patch=null where idconteudo = '$id'";
	$result_delete_imagem = mysql_query($sql_delete_imagem,$conect);

	//echo $result_delete_imagem;
	
	//retorna para a tela de seleção
	echo "<script>";
	echo "location.href = '../../cadastramento.php?cad=6&idconteudo=$id&pg=8'";
	echo "</script>";
?>