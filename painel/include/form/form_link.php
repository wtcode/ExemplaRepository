<?php
// require_once ("controle/conect.php");
// Edição
if (isset ( $_GET ['lnk'] )) {
	$idlink = $_GET ['lnk'];
	$sqlForm = "select * from link where idlink = '$idlink'";
	$resultForm = mysql_query ( $sqlForm, $conect );
	$linhaForm = mysql_fetch_array ( $resultForm );
	$nome = $linhaForm ['nome'];
	$link = $linhaForm ['link'];
	$patch = $linhaForm ['patch'];
	$titulo_form = "Editar Link";
	$envia = "controle/update/edita_link.php";
} else {
	$envia = "controle/insert/insert_link.php";
	$nome = "";
	$link = "";
	$patch = "";
	$idlink = "";
	$titulo_form = "Inserir Link";
}

// $pg = $_GET['pg'];
// $sqlForm = "select nome from pagina where idpagina = '$pg'";
// $resultForm = mysql_query($sqlForm,$conect);
// $linhaForm = mysql_fetch_array($resultForm);
// $titulo_form = "Inserir ".$linhaForm['nome'];
?>
<form action="<?php echo $envia ?>" method="post" enctype="multipart/form-data">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
		<tr>
			<td colspan="2" class="titulo" align="center"><?php echo $titulo_form ?></td>
		</tr>
		<tr>
			<th>Nome</th>
			<td>
				<input type="text" name="nome" class="input" size="50" value="<?php echo $nome; ?>"> 
				<input type="hidden" name="idlink" value="<?php echo $idlink ?>"> 
				<input type="hidden" name="patch" value="<?php echo $patch ?>">
			</td>
		</tr>
		<tr>
			<th>Link</th>
			<td><input type="text" name="link" class="input" size="50" value="<?php echo $link ?>" /></td>
		</tr>
		<tr>
			<th>Imagem</th>
			<td>
				<input type="file" name="imagem1" id="imagem1" class="input"> 
				<input type="hidden" name="acao" value="imagem"> <br>
				<?php
					if ($titulo_form == "Editar Link") {
				?>  	
				<div id='thumb_image'>
					<img src="../imagens/links/<?php echo $patch ?>"> <br> <a
						href='controle/delete/delete_imagem_link.php?id=$id_link'>Excluir</a>
				</div>"</td>
			<?php  } ?>
		</tr>
		<tr>
			
			<td align="center" colspan="2">
				<a href="link.php?id=1"><input type="button" value="Voltar" class="submit"></a>
				<input type="submit" value="Salvar" class="submit">
			</td>
		</tr>
	</table>
</form>