<?php	
	include("conect.php");					
	$opcao = "";
	if(isset($_GET["prd"])){
		$opcao = $_GET["prd"];
	}
	if($opcao == ""){
		$sql = "SELECT * FROM produtos p
					LEFT JOIN imagem_produto i ON p.idprodutos = i.idprodutos
					WHERE p.idhabilitado = '1' and
					p.idcategoria = '11' and 
					p.idprodutos = 74";
	}else{
		/* $sql = "SELECT * 
				FROM produtos
				where idprodutos=$opcao";
		 */
		$sql = "SELECT * FROM produtos p
					LEFT JOIN imagem_produto i ON p.idprodutos = i.idprodutos
					WHERE p.idhabilitado = '1' and
					p.idcategoria = '11' and 
					p.idprodutos = $opcao";
	}			

	$result = mysql_query($sql);
	$linha = mysql_fetch_array($result);
	
	echo $result['titulo'];	
		
?>


        <div class="blocoPublicacaoDetalhe" style="margin-top:25px;">
        	
            <div class="barraTitulo tdData">
            	<table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
                	<tr>
                    	<td style="vertical-align:middle;padding-left:23px; padding-bottom:7px; padding-top:7px;">
                        	<?php  //echo $opcao; ?>
                        	<?php  echo utf8_encode($linha['titulo']); ?>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!--<div class="barraLeiaMais tdData"> 
            	<table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
                	<tr>
                    	<td style="height:35px; text-align:right; vertical-align:middle;padding-right:23px;" >
                        </td>
                    </tr>
                </table>
            </div>-->
            
            <div class="blocoTextoDetalhe">
            	<img style="float:left;margin-bottom:10px; margin-right:22px;" src="imagens/miniaturas/thumb_<?php echo $linha["patch"]; ?>" alt="">
            	<?php echo $linha['descricao']; ?>
            </div>
            
            
        </div> <?php //fim bloco PUBLICACAO ?>
