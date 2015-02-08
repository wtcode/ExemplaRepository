<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sqlForm = "select * from receita where idreceita = '$id'";		
		$resultForm = mysql_query($sqlForm,$conect);
		$linhaForm = mysql_fetch_array($resultForm);
		$idForm = $linhaForm['idEvento'];
		$titulo = $linhaForm['titulo'];
		$descricao = $linhaForm['descricao'];
		$dataMostra = explode("-",$linhaForm['dataEvento']);
		$dia = $dataMostra[2];
		$mes = $dataMostra[1];
		$ano = $dataMostra[0];
		$imagem = $linhaForm['patch_banner'];
		
		$nomeMes = array('','Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezemro');
					
		$envia = "controle/update/edita_receita.php";
	}else{
		$envia = "controle/insert/insert_receita.php";	
	}
	$titulo_form = "Receitas";
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
  	<th>Banner</th>
    <td>
        <input type="file" name="imagem1" id="imagem1" class="input">
        <input type="hidden" name="acao" value="imagem">
        <br>
        <?php
        if(isset($_GET['id'])){
        	echo "<div id='thumb_image'><img src='../imagemSite/thumb/thumb_$imagem'></div>";
		}
		?>
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