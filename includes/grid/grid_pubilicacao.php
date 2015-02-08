 <?php 
		//Calcula a margim, se o resto 
		$i = 1;
		$style = "35";
		
		while($i<=20){
			if($i % 2 == 0){
				$style = "style='margin-right:0px;margin-left:0px;'";
				}
			else{$style = "style='margin-right:29px;margin-left:16px;'";}
		?>
        
        <a href="../../publicacoes.php?nt=10">
        <div class="blocoPublicacao">
        	
            <div class="barraTitulo">
            	<table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
                	<tr>
                    	<td style="height:35px; vertical-align:middle;padding-left:23px;">
                        	Título Publicações
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="barraData tdData"> 
            	<table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
                	<tr>
                    	<td style="height:35px; text-align:right; vertical-align:middle;padding-right:23px;" >
                        	20/03/2014
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="fotoPublicacao">
            	<img src="imagens/imgpublicacao.png" />
            </div>
            
            <div class="blocoTexto">
            	Descrição da publicação descrição da publicação descrição da pu- blicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação descrição da publicação
            </div>
            
            
        </div> <?php //fim bloco PUBLICACAO ?>
        </a>
        
            
            <?php 
			$i++; 
			} 
			//fecha WHILE 
			?>