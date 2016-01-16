<?php
if (isset ( $_GET ['pg'] )) {
	$pg = $_GET ['pg'];
} else
	$pg = 0;

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0"
	class="tabela_form" id="resultado">

	<tr>
		<th colspan="8" class="titulo" align="center">Área de Atuação <a
			href="cadastramento.php?cad=6"
			style="float: right; position: relative; margin-right: 10px;"><img
				src="images/add.png" /> <br /> Adicionar</a>
		</th>
	</tr>

	<tr>
		<td width="90%" class="titulo_grid">Título</td>
		<td width="10%" class="titulo_grid" colspan="2"><center>Ações</center></td>

	</tr>
<?php
$sqlGrid = "select obj.titulo, obj.conteudo, obj.patch, obj.idconteudo, obj.idpagina 
				from conteudo obj, pagina obj2
				where obj2.nome = 'areas_de_atuacao'  
				and obj.idpagina = obj2.idpagina";

$resultGrid = mysql_query ( $sqlGrid, $conect );
$num = 0;
while ( $linhaGrid = mysql_fetch_array ( $resultGrid ) ) {
	
	$titulo = $linhaGrid ['titulo'];
	$conteudo = $linhaGrid ['conteudo'];
	$patch = $linhaGrid ['patch'];
	$idconteudo = $linhaGrid ['idconteudo'];
	$idpagina = $linhaGrid ['idpagina'];
	
	if ($num % 2 == 1) {
		$cor = "#DDDDDD";
	} else {
		$cor = "#F0F0F0";
	}
	
	$num = $num + 1;
	?>
  <tr bgcolor="<?php echo $cor; ?>" class="corpo_grid">



		<td class="corpo_grid"><?php  echo $titulo ?></td>

		<td class="corpo_grid"><a
			href="cadastramento.php?cad=6&idconteudo=<?php echo $idconteudo ?>&pg=<?php echo $idpagina ?>"><img
				src="images/document_edit.png" title="Editar" alt="Editar" /></a></td>
		<td class="corpo_grid"><a
			href="controle/delete/delete_areadeatuacao.php?id=<?php echo $idconteudo ?>"
			class="item-excluir" id="<?php echo $idconteudo ?>"><img
				src="images/delete2.png" alt="Excluir" title="Excluir" /></a></td>
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
						endereco	: 'controle/delete/delete_areadeatuacao.php?id='+codigo
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