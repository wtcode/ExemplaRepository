<?php 
if (isset($_GET['pg'])){
	$pg = $_GET['pg'];
} else $pg=0;

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form" id="resultado">
  
  <tr>
      
    <th colspan="8" class="titulo" align="center">
        Links 
        <a href="link.php?pg=6" style="float:right; position:relative; margin-right:10px;"><img src="images/add.png" /> <br />  Adicionar</a>
    </th>
  </tr>
  
  <tr>
    <td width="30%" class="titulo_grid">Imagem</td>
    <td width="30%" class="titulo_grid">Nome</td>
    <td width="30%" class="titulo_grid">Link</td>
    <td width="10%" class="titulo_grid" colspan="2" ><center>Ações</center></td>
    
  </tr>
<?php
	$sqlGridServico = "select l.nome, l.link, l.patch, l.idlink, l.idpagina  from link l where l.idpagina= 6" ;
	
	$resultGridServico = mysql_query($sqlGridServico,$conect);
    $num = 0;
	while($linhaGridServico = mysql_fetch_array($resultGridServico)){
		
		$nome   = $linhaGridServico['nome'];
		$link = $linhaGridServico['link'];
        $patch = $linhaGridServico['patch'];
        $idlink = $linhaGridServico['idlink'];
        $idpagina = $linhaGridServico['idpagina'];
			
		if($num % 2 == 1) {
		  $cor="#DDDDDD"; 
		  } else { 
		 	 $cor = "#F0F0F0"; 
		  }
		    
		$num = $num + 1;
?>
  <tr bgcolor="<?php echo $cor; ?>" class="corpo_grid">
    <td class="corpo_grid"><img border="0" src="../imagens/links/<?php  echo $patch ?>" /></td>
    <td class="corpo_grid"><?php  echo $nome ?></td>
    <td class="corpo_grid"><?php  echo $link ?></td>
    <td class="corpo_grid"><a href="link.php?id=2&lnk=<?php echo $idlink ?>&pg=<?php echo $idpagina ?>"><img src="images/document_edit.png"  title="Editar" alt="Editar"/></a></td>
    <td class="corpo_grid">
	    <a href="controle/delete/delete_link.php?id=<?php echo $idlink ?>" class="item-excluir" id="<?php echo $idlink ?>"><img src="images/delete2.png"  alt="Excluir"  title="Excluir"/></a>
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
						endereco	: 'controle/delete/delete_link.php?id='+codigo
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