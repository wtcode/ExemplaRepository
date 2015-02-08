<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form" id="resultado">
  <tr>
    <th colspan="4" class="titulo" align="center">Sub Categoria <a href="produtos.php?id=2&cat=2" style="float:right; position:relative; margin-right:10px;"><img src="images/add.png" /> <br />  Adicionar</a></th>
  </tr>
  <?php
  	if($_GET['cat'] == 2){
		if(isset($_GET['idcat'])){
			$id_sub_categoria 		= $_GET['idcat'];
			$sql_sub_categoria		= "select * from sub_categoria where idsub_categoria = '$id_sub_categoria'";
			$result_sub_categoria	= mysql_query($sql_sub_categoria,$conect);
			$linha_sub_categoria	= mysql_fetch_array($result_sub_categoria);
			$titulo 				= $linha_sub_categoria['titulo'];
			$descricao				= $linha_sub_categoria['descricao'];
			
			$id_cagoria_mostra    	 = $linha_sub_categoria['idcategoria'];
			$sql_categoria_mostra 	 = "select * from categoria where idcategoria = '$id_cagoria_mostra'";
			$result_categoria_mostra = mysql_query($sql_categoria_mostra,$conect);
			$linha_categoria_mostra  = mysql_fetch_array($result_categoria_mostra); 
			
			$enviar = "controle/update/edita_sub_categoria.php";
		} else {
			$enviar = "controle/insert/insert_sub_categoria.php";
		}
		
		echo "<tr>";
			echo "<td class='titulo_grid' colspan='4'>";
			echo "<form action='$enviar' method='post'>";
				echo "<strong>Titulo</strong>&nbsp;";
				echo "<input type='text' name='titulo' class='input' size='40' value='$titulo'>";
				echo "<input type='hidden' name='id' value='$id_sub_categoria'>";
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td class='titulo_grid' colspan='4'>";
				echo "<strong>Escolha uma categoria</strong> &nbsp;";
				$sql_categoria = "SELECT * FROM categoria";
				$result_categoria = mysql_query($sql_categoria,$conect);
				echo "<select name='categoria' class='input'>";
					echo "<option value='$id_cagoria_mostra'>".$linha_categoria_mostra['titulo']."</option>";
					while($linha_categoria = mysql_fetch_array($result_categoria)){
						$id_categoria = $linha_categoria['idcategoria'];
						echo "<option value='".$id_categoria."'>".$linha_categoria['titulo']."</option>";
					}
				echo "</select>";
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
				echo "<input type='button' class='input' value='Cancelar' onClick='location.href=\"produtos.php?id=2\"'>";
			echo "</form>";
			echo "</td>";
		echo "</tr>";
	}
  ?>
  <tr>
    <td width="50%" class="titulo_grid">Sub Categoria</td>
    <td width="22%" class="titulo_grid" >Categoria</td>
    <td width="14%" class="titulo_grid">&nbsp;</td>
    <td width="14%" class="titulo_grid">&nbsp;</td>
  </tr>
<?php
	$dataAtual = date('Y-m-d');
	$sqlGridServico = "SELECT * FROM sub_categoria order by titulo" ;
	$resultGridServico = mysql_query($sqlGridServico,$conect);
	while($linhaGridServico = mysql_fetch_array($resultGridServico)){
		$id_captura_categoria = $linhaGridServico['idcategoria'];
		$sql_captura_categoria = "select * from categoria where idcategoria = '$id_captura_categoria'";
		$result_captura_categoria = mysql_query($sql_captura_categoria,$conect);
		$linha_captura_categoria = mysql_fetch_array($result_captura_categoria);
		
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
    <td class="corpo_grid"><?php echo $linha_captura_categoria['titulo']   ?></td>
    <td class="corpo_grid"><a href="produtos.php?id=2&cat=2&idcat=<?php echo $linhaGridServico['idsub_categoria'] ?>"><img src="images/document_edit.png"  title="Editar" alt="Editar"/></a></td>
    <td class="corpo_grid">
    <!--<a href="controle/delete/delete_categoria.php?id=<?php echo $linhaGridServico['idcategoria'] ?>"><img src="images/delete2.png" title="Excluir" alt="Ecluir" /></a>-->
    
    <a href="#" class="item-excluir" id="<?php echo $linhaGridServico['idsub_categoria'] ?>"><img src="images/delete2.png"  alt="Exluir"  title="Excluir"/></a>
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
						endereco	: 'controle/delete/delete_sub_categoria.php?id='+codigo
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