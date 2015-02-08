<?php
	include "../conect.php";
	$arquivo = $_GET['arq'];
	$diretorio = "../../".$_GET['dir']."/";
	$diretorio_thumb = "album/midia_thumb/thumb_";
	
	if(file_exists($diretorio.$arquivo)){
		unlink($diretorio.$arquivo);
		//unlink($diretorio_thumb.$arquivo);
		/*$sqlDeleteImagem = "delete from image_album where patch like '$arquivo'";
		$resultDeleteImagem = mysql_query($sqlDeleteImagem,$conect);
		echo $sqlDeleteImagem;*/
	}else{
		echo "arquivo nao encontrado";	
	}
?>
<script>
	location.href = "../../conteudo.php?id=5";
</script>