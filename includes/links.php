<?php
include ("conect.php");

$buscalinks = "select obj.nome, obj.link, obj.patch
        						   from link obj, pagina obj2
        					       where obj.idpagina = obj2.idpagina
        						   and obj2.nome = 'links'";

$result = mysql_query ( $buscalinks, $conect );
while ( $linha = mysql_fetch_array ( $result ) ) {
	?>

<div class="links">
	<a href='<?php echo $linha["link"]; ?>' target='_blank'> <img border="0"
		src="imagens/links/<?php echo $linha["patch"]; ?>" /></a>
</div>

<?php } ?>