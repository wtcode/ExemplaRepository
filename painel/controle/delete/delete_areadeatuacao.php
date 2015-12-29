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
	
	//Exclusão do registro no banco de dados
	$sqlDeleteConsultoria = "DELETE FROM conteudo WHERE idconteudo = '$id'";
	$resultDeleteConsultoria = mysql_query($sqlDeleteConsultoria,$conect);
	
?>
<script>
	location.href = '../../cadastramento.php?cad=5';
</script>