<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form" id="resultado">
  <tr>
	<td colspan="3" class="titulo" align="center">Banners</td>
  </tr>
  <tr >
    <td class="titulo_grid">Nome do arquivo</td>
    <td class="titulo_grid" style="width: 50px; text-align: center;">Status</td>
    <td class="titulo_grid" style="width: 40px; text-align: center;">Ações</td>
  </tr>
  <?php 
  	include "controle/conect.php";
  	$sqlProdutos = "SELECT * FROM banner";
        $num = 0;
	$resultProdutos = mysql_query($sqlProdutos,$conect);
	while($linhaProdutos = mysql_fetch_array($resultProdutos)){
		$id_banner = $linhaProdutos['idbanner'];
		if($num % 2 == 1) {
		  $cor="#706c6d"; 
		  } else { 
		 	 $cor = "#463d3f"; 
		  }
		$num = $num + 1;
  ?>
  <tr bgcolor="<?php echo $cor ?>" class="corpo_grid">
    <td class="corpo_grid"><?php echo $linhaProdutos['patch'] ?></td>
    <td class="corpo_grid" style="text-align: center;">
	<?php
		if($linhaProdutos['estatus']  == 1){
		 	echo  "<a href='controle/update/altera_estatus.php?id=$id_banner&est=2'><img src='images/estatusVermelho.png' title='Ativo'></a>"; 
		} else if($linhaProdutos['estatus']  == 2){
			echo  "<a href='controle/update/altera_estatus.php?id=$id_banner&est=1'><img src='images/estatusVerde.png' title='Inativo'></a>";
		}
	?>
     </td>
    <td class="corpo_grid" style="text-align: center;">
	  <!--   <a href="controle/delete/delete_banners.php?id=<?php echo $id_banner ?>">
	    	<img src="images/delete2.png" alt="Excluir Banner" title="Excluir Banner">
	    </a>--> 
	    
	    <a href="controle/delete/delete_banners.php?id=<?php echo $id_banner ?>" class="item-excluir" id="<?php echo $id_banner ?>">
	    	<img src="images/delete2.png" alt="Excluir Banner" title="Excluir Banner">
	    </a>
	    
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
						endereco	: 'controle/delete/delete_banners.php?id='+codigo
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
