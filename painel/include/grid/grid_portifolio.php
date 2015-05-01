<table width="100%" border="1" cellspacing="0" cellpadding="0" class="tabela_form" id="resultado">
  <tr>
      
    <th colspan="8" class="titulo" align="center">
        Portifólio  
        <a href="produtos.php?pt=1" style="float:right; position:relative; margin-right:10px;"><img src="images/add.png" /> <br />  Adicionar</a>
    </th>
  </tr>
  <tr>
      <td width="64%" class="titulo_grid" colspan="3">Portifólio</td>
    <td width="8%" class="titulo_grid"></td>
    <td width="7%" class="titulo_grid"></td>
    <td width="9%" class="titulo_grid"></td>
    <td width="12%" class="titulo_grid" colspan="2" ><center>Ações</center></td>
    
  </tr>
<?php
	
	$sqlGridServico = "select c.idconteudo, c.titulo, c.conteudo from conteudo c where c.idpagina=9 order by c.idconteudo" ;
	
	$resultGridServico = mysql_query($sqlGridServico,$conect);
        $num = 0;
	while($linhaGridServico = mysql_fetch_array($resultGridServico)){
		
		$titulo   = $linhaGridServico['titulo'];
		$conteudo = $linhaGridServico['conteudo'];
                $idconteudo = $linhaGridServico['idconteudo'];
			
		if($num % 2 == 1) {
		  $cor="#DDDDDD"; 
		  } else { 
		 	 $cor = "#F0F0F0"; 
		  }
		    
		$num = $num + 1;
?>
  <tr bgcolor="<?php echo $cor; ?>" class="corpo_grid">
    <td class="corpo_grid"><?php  echo $linhaGridServico['titulo'] ?></td>
    <td class="corpo_grid"></td>
    <td class="corpo_grid" align="center"></td>
    <td class="corpo_grid"></td>
    <td class="corpo_grid">
		<?php 
		/*if($linhaGridServico['destaque_home'] == 1){
			echo "<a href='controle/update/edita_estatus_produto.php?hom=2&id=".$linhaGridServico['idprodutos']."'><img src='images/home.png' title='Desabilitar Para home'></a>";
		} else {
			echo "<a href='controle/update/edita_estatus_produto.php?hom=1&id=".$linhaGridServico['idprodutos']."'><img src='images/home2.png' title='Habilitar Para home'></a>";	
		}*/
		 ?>
        </td>
    <td class="corpo_grid">
    <?php 
		/*if($linhaGridServico['destaque_topo'] == 1){
			echo "<a href='controle/update/edita_estatus_produto.php?topo=2&id=".$linhaGridServico['idprodutos']."'><img src='images/topo.png' title='Desabilitar Para Topo'></a>";
		} else {
			echo "<a href='controle/update/edita_estatus_produto.php?topo=1&id=".$linhaGridServico['idprodutos']."'><img src='images/topo2.png' title='Habilitar Para Topo'></a>";	
		}*/
	?>
    </td>
    <td class="corpo_grid"><a href="portifolio.php?id=2&cont=<?php echo $linhaGridServico['idconteudo'] ?>"><img src="images/document_edit.png"  title="Editar" alt="Editar"/></a></td>
    <td class="corpo_grid">
    <!--<a href="controle/delete/deleta_produto.php?id=<?php echo $linhaGridServico['titulo'] ?>"><img src="images/delete2.png" title="Excluir" alt="Ecluir" /></a>-->
    <a href="#" class="item-excluir" id="<?php echo $linhaGridServico['titulo'] ?>"><img src="images/delete2.png"  alt="Exluir"  title="Excluir"/></a>
    </td>
  </tr>
<?php
	}
?>
</table>
<script type="text/javascript">	
	$(document).ready(function(){
		$('table#resultado a.item-excluir').each(function(){
			var codigo = $(this).attr('id');
			$(this).m2brDialog({
				tipo: 		'pergunta',
				titulo:		'Confirme',
				texto:		'Tem certeza que deseja excluir o registro?',
				draggable: true,
				botoes: {
					1: {
						label		: 'sim',
						tipo		: 'link',
						endereco	: 'controle/delete/deleta_produto.php?id='+codigo
					},
					2: {
						label		: 'n&atilde;o',
						tipo		: 'fechar'
					},
				}
			});	
		});		
	});
	
</script>