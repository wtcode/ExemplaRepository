<?php
	include "../conect.php";
	
	$cdfoto = $_GET['cdfoto'];	
	$func = $_GET['func'];
	
	$sql_imagem_produto = "select * from fotoscadastro where cdfotocadastro = '$cdfoto'";
	$result_imagem_produto = mysql_query($sql_imagem_produto,$conect);
	$linha_imagem_produto = mysql_fetch_array($result_imagem_produto);
	$imagem = $linha_imagem_produto['foto'];
	
	$caminho_imagem = "../../../imagens/".$imagem;
	$caminho_thumb = "../../../imagens/miniaturas/thumb_".$imagem;
		
		unlink($caminho_imagem);
		unlink($caminho_thumb);
		
		$sql_delete_imagem = "delete from fotoscadastro where cdfotocadastro = '$cdfoto'";
		$result_delete_imagem = mysql_query($sql_delete_imagem,$conect);
	
	echo "<script>";
	echo "location.href = '../../cadastramento.php?nf=1&func=$func'";
	echo "</script>";
?>