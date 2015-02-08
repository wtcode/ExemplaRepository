<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form" id="resultado">
  <tr>
    <th colspan="4" class="titulo" align="center">Categoria <a href="produtos.php?id=1&cat=1" style="float:right; position:relative; margin-right:10px;"><img src="images/add.png" /> <br />  Adicionar</a></th>
  </tr>
  <?php
  	if($_GET['cat'] == 1){
		if(isset($_GET['idcat'])){
			$id_categoria 		= $_GET['idcat'];
			$sql_categoria		= "select * from categoria where idcategoria = '$id_categoria'";
			$result_categoria	= mysql_query($sql_categoria,$conect);
			$linha_categoria	= mysql_fetch_array($result_categoria);
			$titulo 			= $linha_categoria['titulo'];
			$descricao			= $linha_categoria['descricao'];
			$enviar = "controle/update/edita_categoria.php";
		} else {
			$enviar = "controle/insert/insert_categoria.php";
		}
		echo "<tr>";
			echo "<td class='titulo_grid' colspan='4'>";
			echo "<form action='$enviar' method='post'>";
				echo "<strong>Titulo</strong>&nbsp;";
				echo "<input type='text' name='titulo' class='input' size='40' value='$titulo'>";
				echo "<input type='hidden' name='id' value='$id_categoria'>";
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td colspan='4' align='center'>";
				include_once("include/fckeditor/fckeditor.php");
				$oFCKeditor = new FCKeditor('descricao');
				$oFCKeditor->BasePath = 'include/fckeditor/';
				$oFCKeditor->ToolbarSet	= 'Basic';
				$oFCKeditor->Value = $descricao ;
				$oFCKeditor->Height = "200";
				$oFCKeditor->Create() ;
				echo "<input type='submit' class='input' value='Salvar'>&nbsp;&nbsp;";
				echo "<input type='button' class='input' value='Cancelar' onClick='location.href=\"produtos.php?id=1\"'>";
			echo "</form>";
			echo "</td>";
		echo "</tr>";
	}
  ?>
  <tr>
    <td width="50%" class="titulo_grid">Categoria</td>
    <td width="22%" class="titulo_grid" >&nbsp;</td>
    <td width="14%" class="titulo_grid">&nbsp;</td>
    <td width="14%" class="titulo_grid">&nbsp;</td>
  </tr>
<?php
	$dataAtual = date('Y-m-d');
	$sqlGridServico = "SELECT * FROM categoria order by titulo asc limit 15" ;
	$resultGridServico = mysql_query($sqlGridServico,$conect);
	while($linhaGridServico = mysql_fetch_array($resultGridServico)){
		$dataNoticia = explode("-",$linhaGridServico['dataEvento']);
		$noticiaData = $dataNoticia[2]."/".$dataNoticia[1]."/".$dataNoticia[0];
		
		if($num % 2 == 1) {
		  $cor="#706c6d"; 
		  } else { 
		 	 $cor = "#463d3f"; 
		  }
		    
		$num = $num + 1;
?>
  <tr bgcolor="<?php echo $cor; ?>" class="corpo_grid">
    <td class="corpo_grid"><?php  echo $linhaGridServico['titulo'] ?></td>
    <td class="corpo_grid"><?php //echo $noticiaData  ?></td>
    <td class="corpo_grid"><a href="produtos.php?id=1&cat=1&idcat=<?php echo $linhaGridServico['idcategoria'] ?>"><img src="images/document_edit.png"  title="Editar" alt="Editar"/></a></td>
    <td class="corpo_grid">
    <!--<a href="controle/delete/delete_categoria.php?id=<?php echo $linhaGridServico['idcategoria'] ?>"><img src="images/delete2.png" title="Excluir" alt="Ecluir" /></a>-->
    
    <a href="#" class="item-excluir" id="<?php echo $linhaGridServico['idcategoria'] ?>"><img src="images/delete2.png"  alt="Exluir"  title="Excluir"/></a>
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
						endereco	: 'controle/delete/delete_categoria.php?id='+codigo
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