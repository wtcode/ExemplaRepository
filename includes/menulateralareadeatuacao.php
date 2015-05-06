<?php	
	include("conect.php");					
	$sql = "SELECT * FROM produtos where idcategoria = 11 and idhabilitado=1";
	$result = mysql_query($sql);
		
?>

<div class="menuLateral">
       <table width="230" border="0" cellspacing="0" cellpadding="0">
            <?php
           	while ($linha = mysql_fetch_array($result)){
            ?>
	              <tr>
	                <td colspan="2" class="tituloMenu">
	                	<a href="areadeatuacao.php?prd=<?php echo $linha['idprodutos'] ?>"><?php echo utf8_encode($linha['titulo']) ?></a>
	               	</td>
	              </tr>
            <?php
		}
            ?>
        </table>
</div>
