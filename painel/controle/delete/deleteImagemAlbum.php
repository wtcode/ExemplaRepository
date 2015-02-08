<?php
	include "../conect.php";
	$arquivo = $_GET['arq'];
	$diretorio = "../../../".$_GET['dir'];
	$idimagem = $_GET['idimage'];

	if(file_exists($diretorio)){
		unlink($diretorio);
		$sqlDeleteImagem = "delete from image_album where idimage_album = '$idimagem'";
		$resultDeleteImagem = mysql_query($sqlDeleteImagem,$conect);
		
	}else{
		echo "arquivo nao encontrado";	
	}
?>
<script>
	location.href = "../../albuns.php?up=1&alb=galeria_foto"
</script>