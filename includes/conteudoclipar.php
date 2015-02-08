<?php	
	include("conect.php");					
	$sql = "SELECT * FROM conteudo where idconteudo = 7";
	$result = mysql_query($sql);
	$linha = mysql_fetch_array($result);
	echo "<center>".$linha["descricao"]."</center>";
?>