<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form" id="resultado">
<tr>
	<td colspan="5" class="titulo" align="center">Albuns<!--<a href="albuns.php?pt=1" style="float:right; right:10px; position:relative;"><img src="images/add.png" /> <br /> Adicionar Albuns</a>--></td>
</tr>
  <tr>
    <td width="30%" class="titulo_grid">Album</td>
    <td width="36%" class="titulo_grid">Sess&atilde;o</td>
    <td width="9%" class="titulo_grid"></td>
    <td width="9%" class="titulo_grid"></td>
    <td width="7%" class="titulo_grid"></td>

  </tr>
  <?php
	  $sqlAlbum = "SELECT * FROM albuns";
	  $resultAlbum = mysql_query($sqlAlbum,$conect);
	  while($linhaAlbum  = mysql_fetch_array($resultAlbum)){
		  if($num % 2 == 1) {
		  $cor="#706c6d"; 
		  } else { 
		 	 $cor = "#463d3f"; 
		  }
		  $num = $num + 1;
  ?>
  <tr bgcolor="<?php echo $cor; ?>" class="corpo_grid">
    <td class="corpo_grid"><?php echo $linhaAlbum['nomeSite'] ?></td>
    <td class="corpo_grid"><?php echo $linhaAlbum['sessao'] ?></td>   
    <td class="corpo_grid"><a href="albuns.php?up=1&alb=<?php echo $linhaAlbum['nome'] ?>&ses=<?php echo $linhaAlbum['sessao'] ?>"><img src="images/add_fotos.png" alt="Adicionar Fotos" title="Adicionar Fotos" /></a></td>
    <td class="corpo_grid"><!--<a href="albuns.php?pt=1&id=<?php echo $linhaAlbum['idAlbuns'] ?>"><img src="images/alterar_fotos.png" alt="Alterar Dados do Album" title="Alterar Dados do Album" /></a>--></td>
    <td	class="corpo_grid"><!--<a href="#" class="item-excluir" id="<?php echo $linhaAlbum['idAlbuns'] ?>" ><img src="images/excluir_mini.png" alt="Excluir Album" title="Excluir Album" /></a>--></td>
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
				texto:		'Tem certeza que deseja Excluir o Album?',
				draggable: true,
				botoes: {
					1: {
						label		: 'sim',
						tipo		: 'link',
						endereco	: 'controle/delete/deleteAlbum.php?id='+codigo
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