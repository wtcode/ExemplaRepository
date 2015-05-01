<?php
	if(isset($_GET['cont'])){
		$id = $_GET['cont'];
		$sqlForm = "select * from conteudo where idconteudo = '$id'";	
		$resultForm = mysql_query($sqlForm,$conect);
		$linhaForm = mysql_fetch_array($resultForm);
		$titulo = $linhaForm['titulo'];
		$conteudo = $linhaForm['conteudo'];
		
		
		$envia = "controle/update/edita_portifolio.php";
	}else{
		$envia = "controle/insert/insert_portifolio.php";	
	}
	$titulo_form = "Inserir Portifolio";
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
  	<th>Decrição</th>
    <td>
        <input type="text" name="conteudo" class="input" size="59" value="<?php echo $conteudo; ?>">
    	
    </td>
  </tr>
  <tr>
    <td align="center" colspan="2"><input type="submit" value="Salvar" class="submit"></td>
  </tr>
</table>
</form>