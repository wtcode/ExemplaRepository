<?php
	include "../../include/conect.php";
	
	$idAlbum = $_POST['id'];
	$album = $_POST['album'];
	$descricao = addslashes(stripslashes($_POST['descricao']));
	$sessao = $_POST['sessao'];
	$nome = $_POST['nome'];
	
	$sqlUpdateAlbum = "update albuns set nomeSite = '$nome', descricao = '$descricao' where idAlbuns = '$idAlbum'";
	$resultUpdateAlbum = mysql_query($sqlUpdateAlbum,$conect);
?>
<script>
	history.go(-1);
</script>	