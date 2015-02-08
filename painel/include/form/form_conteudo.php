<?php
	if(isset($_GET['id'])){
			$id = $_GET['id'];
			$titulo_form = "Conteudo";
			$sqlForm = "select * from conteudo where idpagina = '$id'";		
			$resultForm = mysql_query($sqlForm,$conect);
			$linhaForm = mysql_fetch_array($resultForm);
			$idForm = $linhaForm['idconteudo'];
			$titulo = $linhaForm['titulo'];
			$descricao = $linhaForm['descricao'];
			if($idForm != ""){
				$envia = "controle/update/edita_conteudo.php";
			}else{
				$envia = "controle/insert/insert_conteudo.php";	
			}
	}
?>
<form  action="<?php echo $envia ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
<tr>
	<td colspan="2" class="titulo" align="center"><?php echo $titulo_form ?></td>
</tr>
  <tr>
    <th width="20%">Titulo</th>
    <td width="80%">
        <input type="text" name="titulo" class="input" size="59" value="<?php echo $titulo; ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>" >
    </td>
  </tr>
  <tr>
  	<td colspan="2" align="center" class="titulo">
    	Descri&ccedil;&atilde;o
    </td>
  </tr>
  <tr>
    <td colspan="2">
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
    <td align="center" colspan="2"><input type="submit" value="Salvar" class="submit"></td>
  </tr>
</table>
</form>