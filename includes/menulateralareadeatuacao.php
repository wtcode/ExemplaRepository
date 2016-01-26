<?php	
	include("conect.php");					
	$sql = "SELECT * 
			FROM conteudo obj, pagina obj2
			where obj.idpagina = obj2.idpagina 
			and obj2.nome='areas_de_atuacao'";
	$result = mysql_query($sql);
		
?>

<div class="menuLateral">
       <table width="230" border="0" cellspacing="0" cellpadding="0">
            <?php
           	while ($linha = mysql_fetch_array($result)){
            ?>
	              <tr>
	                <td colspan="2" class="tituloMenu">
	                	<a href="areadeatuacao.php?prd=<?php echo $linha['idconteudo'] ?>"><?php echo $linha['titulo'] ?></a>
	               	</td>
	              </tr>
            <?php
		}
            ?>
        </table>
</div>
