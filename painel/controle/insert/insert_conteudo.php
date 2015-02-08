<?php
	include "../conect.php";
	
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$descricao = addslashes(stripslashes($_POST['descricao']));
	
	$sqlInsertConteudo = "insert into conteudo(idPagina,titulo,descricao) values ('$id','$titulo','$descricao')";
	$resultInsertConteudo = mysql_query($sqlInsertConteudo,$conect);
	
	if($id == 5){
		include "../upload/imagem_midia.php";	
	}
	
	echo "
	<script>
		location.href = '../../conteudo.php?id=$id'
	</script>
	";
?>