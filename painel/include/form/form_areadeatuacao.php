<?php
// require_once ("controle/conect.php");
// Edição
if (isset ( $_GET ['idconteudo'] )) {
	$idconteudo = $_GET ['idconteudo'];
	$sqlForm = "select * from conteudo 
				where idconteudo = '$idconteudo'";
	$resultForm = mysql_query ( $sqlForm, $conect );
	$linhaForm = mysql_fetch_array ( $resultForm );
	$titulo = $linhaForm ['titulo'];
	$conteudo = $linhaForm ['conteudo'];
	$patch = $linhaForm ['patch'];
	$titulo_form = "Editar Área de Atuação";
	$envia = "controle/update/edita_areadeatuacao.php";
} else {
	$envia = "controle/insert/insert_areadeatuacao.php";
	$titulo = "";
	$conteudo = "";
	$patch = "";
	$titulo_form = "Inserir Área de Atuação";
}

// $pg = $_GET['pg'];
// $sqlForm = "select nome from pagina where idpagina = '$pg'";
// $resultForm = mysql_query($sqlForm,$conect);
// $linhaForm = mysql_fetch_array($resultForm);
// $titulo_form = "Inserir ".$linhaForm['nome'];
?>
<form action="<?php echo $envia ?>" method="post"
	enctype="multipart/form-data">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"
		class="tabela_form">
		<tr>
			<td colspan="2" class="titulo" align="center"><?php echo $titulo_form ?></td>
		</tr>
		<tr>
			<th>Título</th>
			<td>
				<input type="text" name="nome" class="input" size="50"	value="<?php echo $titulo; ?>"> 
				<input type="hidden" name="idconteudo" value="<?php echo $idconteudo ?>"> 
				<input type="hidden" name="patch" value="<?php echo $patch ?>">
			</td>
		</tr>
		<tr>
			<th>Imagem</th>
			<td><input type="file" name="imagem1" id="imagem1" class="input"> <input
				type="hidden" name="acao" value="imagem"> <br>
				<?php
					if ($titulo_form == "Editar Área de Atuação" && $patch != null) {
				?>  	
				<div id='thumb_image'>
					<img src="../imagens/links/<?php echo $patch ?>"> <br> <a
						href='controle/delete/delete_imagem_conteudo.php?id=<?php echo $idconteudo ?>'>Excluir</a>
				</div>"</td>
			<?php  } ?>
		</tr>
		<tr>
			<td colspan="2" align="center" class="titulo">
				Descri&ccedil;&atilde;o</td>
		</tr>
		<tr>
			<td colspan="2">
    			<?php
				include_once ("include/fckeditor/fckeditor.php");
				$oFCKeditor = new FCKeditor ( 'conteudo' );
				$oFCKeditor->BasePath = 'include/fckeditor/';
				$oFCKeditor->ToolbarSet = 'Basic';
				$oFCKeditor->Value = $conteudo;
				$oFCKeditor->Create ();
				?>
    		</td>
		</tr>
		<tr>
			<td align="center" colspan="2"><a href="cadastramento.php?cad=5"><input
					type="button" value="Voltar" class="submit"></a> <input
				type="submit" value="Salvar" class="submit"></td>
		</tr>
	</table>
</form>