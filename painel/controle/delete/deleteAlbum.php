<?php 
	include "../conect.php";

	$id = $_GET['id'];
	
	$sqlAlbum = "select * from albuns where idAlbuns = '$id'";
	$resultAlbum = mysql_query($sqlAlbum,$conect);
	$linhaAlbum = mysql_fetch_array($resultAlbum);
	$sessao = $linhaAlbum['sessao'];
	$pasta = $linhaAlbum['nome'];
		
	$diretorio = "../../../album/".$sessao."/".$pasta;
	
	if(file_exists($diretorio)){		
		$dir = $diretorio."/";
		$dirhandle = opendir("$dir");		
		while ($arquivos = readdir($dirhandle)) {
		   if($arquivos != "." && $arquivos != ".."){
			   unlink($dir.$arquivos);
		   }
		}
				      	
		rmdir($diretorio);
		$sqlDeleteAlbum = "delete from albuns where idAlbuns = '$id'";
		$resultDeleteAlbuns = mysql_query($sqlDeleteAlbum,$conect);
	}else{
		echo "O arquivo nao existe";
	}
?>
<script>
	location.href = "../../albuns.php";
</script>