<?php	
	include("conect.php");					
	$opcao = "";
	if(isset($_GET["prd"])){
		$opcao = $_GET["prd"];
	}
	if($opcao == ""){
		$sql = "SELECT * FROM 
				conteudo obj, pagina obj2
				where obj.idpagina = obj2.idpagina
				and obj2.nome = 'areas_de_atuacao'";
	}else{
		$sql = "SELECT * FROM 
				conteudo obj
				where obj.idconteudo = $opcao";
	}			

	$result = mysql_query($sql);
	$linha = mysql_fetch_array($result);
	
	echo $result['titulo'];	
?>

<div class="blocoPublicacaoDetalhe" style="margin-top: 25px;">
	<div class="barraTitulo tdData">
		<table cellpadding="0" cellspacing="0" border="0" style="width: 100%;">
			<tr>
				<td	style="vertical-align: middle; padding-left: 23px; padding-bottom: 7px; padding-top: 7px;">
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
		<img style="float: left; margin-bottom: 10px; margin-right: 22px;"
			src="imagens/<?php echo $linha["patch"]; ?>" alt="">
            	<?php echo $linha['conteudo']; ?>
            </div>


</div>
<?php //fim bloco PUBLICACAO ?>

