<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sqlAlbum = "SELECT * FROM albuns where idAlbuns = '$id'";
		$resultAlbum = mysql_query($sqlAlbum,$conect);
		$linhaAlbum = mysql_fetch_array($resultAlbum);
		$disable = "disabled='disabled'";
		$sessao = $linhaAlbum['sessao'];
		$diretorio = "album/".$sessao."/".$linhaAlbum['nome'];
		$descricao = $linhaAlbum['descricao'];
		$idAlbum = $linhaAlbum['idAlbuns'];
		$envia = "controle/update/editaAlbum.php";
	} else {
		$envia = "controle/criaAlbum.php";	
	}
?>	
<form action="<?php echo $envia ?>" method="post" class="formulario_insert" >
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
<tr>
	<td colspan="2" class="titulo" align="center">Adicionar Album</td>
</tr>
  <tr>
    <th>Nome do diretorio</th>
    <td>
    <input type="text" name="album" class="input" size="38" <?php echo $disable ?> value="<?php echo $diretorio ?>" /> <br />
    	<span class="alerta">*Não use caracteres especiais (´ ~ ^ ç ? !) no nome do diretorio</span>
    </td>
  </tr>
  <tr>
  	<th>Nome do Album</th>
    <td>
    <input type="text" name="nome" class="input" size="38" value="<?php echo $linhaAlbum['nomeSite'] ?>" />
    <input type="hidden" name="id" value="<?php echo $idAlbum ?>"  />
    <input type="hidden" value="galeria_fotos" name="sessao" />
    </td>
  </tr>
  <!--<tr>
  	<th>Sessão</th>
    <td>
    <select name="sessao" class="input" <?php echo $disable ?> >
    	<option><?php //echo $sessao ?></option>
        <option value="galeria_fotos">Galeria de Fotos</option>
        <option value="fotos_evento">Fotos enventos</option>
    </select>
    
    Obrigatorio escolher sessão
    </td>
  </tr>-->
  <tr>
    <th>Descri&ccedil;&atilde;o</th>
    <td>
	<?php
        include_once("include/fckeditor/fckeditor.php");
		$oFCKeditor = new FCKeditor('descricao');
		$oFCKeditor->BasePath = 'include/fckeditor/';
		$oFCKeditor->ToolbarSet	= 'Basic';
		$oFCKeditor->Value = $descricao ;
		$oFCKeditor->Create() ;
	?>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" value="Salvar" class="submit" /></td>
  </tr>
</table>
</form>