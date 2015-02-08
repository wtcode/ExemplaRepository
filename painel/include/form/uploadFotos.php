<?php
	$album = $_GET['alb'];
	$sessao = $_GET['ses'];
?>
<form action="controle/upload/foto2.php" method="post" class="formulario_insert" enctype="multipart/form-data" >
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
<tr>
	<td colspan="2" class="titulo" align="center">Upload Fotos</td>
</tr>
<tr>
	<td colspan="2" align="center" class="titulo_grid">Carregar Imagens</td>
</tr>
  <tr>
    <td align="center">
    <!--<script type="text/javascript">
		function addCampo(id){
			el = document.getElementById(id);
			el.innerHTML += '<input type="file" name="img[]" class="input"><br>';	
		}
	</script>
    <input type="file" name="img[]" class="input">
    <div id="img-extra"></div>
        <a href="#" onClick="addCampo('img-extra')">ADD</a> -->
    <input type="file" name="imagem0" id="imagem0" class="input">
    <input type="file" name="imagem1" id="imagem1" class="input">
    <input type="file" name="imagem2" id="imagem2" class="input">
    <input type="file" name="imagem3" id="imagem3" class="input">
    <input type="file" name="imagem4" id="imagem4" class="input">
    <input type="file" name="imagem5" id="imagem5" class="input">
    <input type="hidden" name="album" value="<?php echo $album ?>">
    <input type="hidden" name="sessao" value="<?php echo $sessao ?>">
    <input type="hidden" name="acao" value="imagem">
    
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <input type="submit" value="Enviar" class="submit">
     </td>
  </tr>
</table>
</form>
<?php

        $sql_fotos = "SELECT * FROM image_album";
        $result_fotos = mysql_query($sql_fotos,$conect);
        $num_fotos = mysql_num_rows($result_fotos);
        while($linha_fotos = mysql_fetch_array($result_fotos)){
        $image = $linha_fotos['patch'];
		$idimage = $linha_fotos['idimage_album'];
    ?>
       <div id="thumb_image">
          <img src="../<?php echo $image ?>" width="90" height="100"/><br />
          <?php echo "<a href='controle/delete/deleteImagemAlbum.php?dir=$image&idimage=$idimage'>Excluir</a>" ?>
       </div>         
    <?php
        }

/*$dir="../album/$album/";
$dirhandle = opendir("$dir");

while ($arquivos = readdir($dirhandle)) {
   if($arquivos != "." && $arquivos != ".."){
	   echo "<div id='thumb_image'>
				<img src=\"$dir/$arquivos\" width='260' height='195'><br>	
				<a href='controle/delete/deleteImagemAlbum.php?dir=$dir&arq=$arquivos'>Excluir</a>
			 </div>
     ";
   }
}*/
?>