<?php 
			$style = " style='margin-top:20px;'"; 
			$i = 1;
			
			$sql = "SELECT * FROM produtos p 
					LEFT JOIN imagem_produto i ON p.idprodutos = i.idprodutos
					WHERE p.idhabilitado = '1' and 
					p.idcategoria = '11'";
				
			$result = mysql_query($sql);
			
			?>
            
            <?php while($linha = mysql_fetch_array($result)){ ?>
            
            <?php 
			
			if($i == 1){ echo "<div style=\"width:100%;float:left;\">"; 
			}
			
			if($i % 3 == 0){ $style = " style='margin-top:20px; margin-right:0px;'"; } else { $style = " style='margin-top:20px; margin-right:80px;'"; }
			
			?>
            
            <a href="areadeatuacao.php?prd=<?php echo $linha["idprodutos"]; ?>" style="font-weight:normal;">
            
           	 <div class="produto" <?php echo $style; ?>>
            
  				<div class="tituloProduto" style="height:44px;">
                
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td style="vertical-align:middle; height:44px;">
                                <?php echo utf8_encode($linha["titulo"]); ?>
                            </td>	
                        </tr>
                    </table>
                	
                </div><?php //fim DIV NOME PRODUTO ?>              
                
               <div class="divFotoProduto" style="position:relative;">
               		
                  <div style="float:left; width:100%;">
                     <img onerror="this.onerror=null;this.src='imagens/sem_imagem_prd.jpg';" src="imagens/miniaturas/thumb_<?php echo $linha["patch"]; ?>" />
                  </div>
                    
                    <div style="position:absolute; float:right; background-image:url(imagens/bttplus.png); height:40px; width:40px; background-repeat:no-repeat; margin-top:127px; margin-left:235px;">
                    </div>
                    
               </div><?php //fim DIV FOTO PRODUTO ?>     
               
               <div class="nomeProduto" style="text-align:justify;">
               		<?php echo substr(strip_tags($linha["descricao"]),0,176) . "<span style=\"color:#1E7B46;\"> ... Leia mais [+]</span>"; ?>
               </div>
               
            </div><?php //fim DIV PRODUTO ?>
            
            </a>
            
            <?php 
				if($i % 3 == 0){ 
					echo "</div>"; 
					$i = 1;	
				}
				else {
					$i++;
				}
			} //fecha while produtos 
			?>
        
        <?php echo "</div>"; ?>