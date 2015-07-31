<?php
	include "../conect.php";
	
	$id = $_GET['id'];	
	
	$sql = "select * from imagem_link where idimagem_produto = '$id'";
	$result_imagem_produto = mysql_query($sql_imagem_produto,$conect);
	$linha_imagem_produto = mysql_fetch_array($result_imagem_produto);
	$imagem = $linha_imagem_produto['patch'];
	
	$caminho_imagem = "../../../imagemSite/".$imagem;
	$caminho_thumb = "../../../imagemSite/thumb/thumb_".$imagem;
		
		unlink($caminho_imagem);
		unlink($caminho_thumb);
			
		$sql_delete_imagem = "delete from imagem_produto where idimagem_produto = '$id'";
		$result_delete_imagem = mysql_query($sql_delete_imagem,$conect);
	
	echo "<script>";
	echo "location.href = '../../produtos.php?pt=1&prod=$prod'";
	echo "</script>";
?>