<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form" id="resultado">
  <tr>
  <!-- <th class="titulo"></th>
    <th colspan="7" class="titulo" align="center">
    Lista Funcin&aacute;rios  <a href="cadastramento.php?nf=1" style="float:right; position:relative; margin-right:10px;"><img src="images/add.png" /> <br />  Adicionar</a>
    </th>-->
    <td colspan="8" class="titulo">
    	<table cellpadding="0" cellspacing="0" width="100%">
        <tr>
        	 <td class="titulo" style="width:25%;" ></td>
                <td class="titulo" style="text-align:center;vertical-align:middle;"> Lista Funcin&aacute;rios </td>
                <td class="titulo" style="text-align:center;vertical-align:middle;"> 
                <a href="cadastramento.php?nf=1" style="float:right; position:relative; margin-right:10px;"><img src="images/add.png" /> <br />  Adicionar</a> 
                </td>
        </tr>
        </table>
    </td>
   
  </tr>
  <!--<tr>
  	<td colspan="8" class="titulo_grid">
    	Pesquisar <input type="text" id="campoPesquisa" style="border:1px solid blac;" />
    </td>
  </tr>-->
  <tr>
    <td width="24%" class="titulo_grid">Nome</td>
    <td width="17%" class="titulo_grid">CPF / CNPJ</td>
    <td width="23%" class="titulo_grid" align="center">Telefone</td>
    <td width="8%" class="titulo_grid"></td>
    <td width="7%" class="titulo_grid"></td>
    <td width="9%" class="titulo_grid"></td>
    <td width="5%" class="titulo_grid">&nbsp;</td>
    <td width="7%" class="titulo_grid">&nbsp;</td>
  </tr>
  
<?php
	$dataAtual = date('Y-m-d');

	$sqlGridServico = "select cdcadastro, nome, cpf, cnpj, telefone from cadastro where tipo = 'T' order by nome asc" ;
	$resultGridServico = mysql_query($sqlGridServico,$conect);
	
	while($linhaGridServico = mysql_fetch_array($resultGridServico)){
		
		
		if($num % 2 == 1) {
		  $cor="#DDDDDD"; 
		  } else { 
		 	 $cor = "#F0F0F0"; 
		  }
		    
		$num = $num + 1;
		
		
?>
  <tr bgcolor="<?php echo $cor; ?>" class="corpo_grid">
    <td class="corpo_grid" style="color:#000;"><?php  echo $linhaGridServico['nome'] ?></td>
    <td class="corpo_grid" style="color:#000;"><?php if($linhaGridServico['cpf'] != ""){ echo $linhaGridServico['cpf'];} else {echo $linhaGridServico['cnpj'];}   ?></td>
    <td class="corpo_grid" align="center" style="color:#000;"><?php echo $linhaGridServico['telefone'];  ?></td>
    <td class="corpo_grid">
	<?php
		/*if($linhaGridServico['idhabilitado'] == 1){
			echo "<a href='controle/update/edita_estatus_produto.php?hab=2&id=".$linhaGridServico['idprodutos']."'><img src='images/publicado.png' title='Habilitado'></a>";
		} else {
			echo "<a href='controle/update/edita_estatus_produto.php?hab=1&id=".$linhaGridServico['idprodutos']."'><img src='images/despublicado.png' title='Desabilitado'></a>";	
		}*/
	 ?>
     </td>
    <td class="corpo_grid">
    </td>
    <td class="corpo_grid">
    <?php 
	?>
    </td>
    <td class="corpo_grid">
    	<a href="cadastramento.php?nf=1&func=<?php echo $linhaGridServico['cdcadastro'] ?>"><img src="images/document_edit.png"  title="Editar" alt="Editar"/></a>
    </td>
    <td class="corpo_grid">
    <!--<a href="controle/delete/deleta_produto.php?id=<?php //echo $linhaGridServico['cdcadastro'] ?>"><img src="images/delete2.png" title="Excluir" alt="Ecluir" /></a>-->
    <a href="#" class="item-excluir" id="<?php echo $linhaGridServico['cdcadastro'] ?>"><img src="images/delete2.png"  alt="Exluir"  title="Excluir"/></a>
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
						endereco	: 'controle/delete/deleta_funcionario.php?id='+codigo
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