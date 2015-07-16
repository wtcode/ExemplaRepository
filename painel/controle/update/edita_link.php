<?php
	include "../conect.php";
	$idlink = $_POST['idlink'];
	$nome = $_POST['nome'];
	$patch = $_POST ['patch'];
	$link = $_POST ['link'];
	
	
	$sqlUpdateConteudo = "update link set nome = '$nome', patch = '$patch', link = '$link' where idlink = '$idlink' ";
	$resultUpdateConteudo = mysql_query($sqlUpdateConteudo,$conect);

	$_SESSION['idlink'] = $idlink;
	include "../upload/fotos_link.php";
	
	echo "<script>
			location.href = '../../link.php?id=1&pg=6';
		  </script>";
?>