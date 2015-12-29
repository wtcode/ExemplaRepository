<?php

include "../conect.php";
$idconteudo = $_POST ['idconteudo'];
$titulo = $_POST ['titulo'];
$patch = $_POST ['patch'];
$conteudo = addslashes(stripslashes($_POST['conteudo']));

$sqlUpdateConteudo = "update conteudo set titulo = '$titulo', patch = '$patch', conteudo = '$conteudo' where idconteudo = '$idconteudo' ";
$resultUpdateConteudo = mysql_query ( $sqlUpdateConteudo, $conect );

$_SESSION ['idconteudo'] = $idconteudo;
include "../upload/fotos_areadeatuacao.php";

	echo "<script>
			location.href = '../../cadastramento.php?cad=5';
		  </script>";
?>