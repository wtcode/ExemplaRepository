<div class="divmain tituloPagina">Clientes</div>

<div class="conteudo">

<?php
include ("conect.php");					
	$sql = "SELECT * FROM conteudo where idconteudo = 7";
	$result = mysql_query($sql);
	$linha = mysql_fetch_array($result);
	echo "<center>".$linha["descricao"]."</center>";
?>

</div><?php //fim DIV CONTEUDO ?>

<div class="divmain tituloPagina">Parceiros</div>

<div class="conteudo">

<?php
	$sql = "SELECT * FROM conteudo where idconteudo = 16";
	$result = mysql_query($sql);
	$linha = mysql_fetch_array($result);
	echo "<center>".$linha["descricao"]."</center>";
?>

</div><?php //fim DIV CONTEUDO ?>