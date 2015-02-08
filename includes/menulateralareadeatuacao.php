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
                <td colspan="2" class="tituloMenu"><br /><a style="font-size:16px;" href="areadeatuacao.php?prd=<?php echo $linha['idprodutos'] ?>"><?php echo utf8_encode($linha['titulo']) ?></a></td>
              </tr>
            <?php
				}
            ?>
              
              <!-- 
              <tr>
                <td colspan="2" style="padding-left:19px; padding-top:10px;">
                	<table width="180" border="0" cellspacing="0" cellpadding="0">
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">Institucional</td>                          
                       </tr>
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">Missão</td>
                       </tr>
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">Equipe</td>
                       </tr>
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">Links</td>
                       </tr>
              		</table>
                </td>
              </tr>
              -->
            </table>

        </div>