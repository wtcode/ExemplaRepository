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
	
	//exclusão do registro no banco de dados
	$sqlDeleteConsultoria = "DELETE FROM link WHERE idlink = '$id'";
	$resultDeleteConsultoria = mysql_query($sqlDeleteConsultoria,$conect);
	
?>
<script>
	location.href = "../../link.php?id=1";
</script>