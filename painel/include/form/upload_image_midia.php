  <div align="center">
    <input type="file" name="imagem0" id="imagem0" class="input">
    <input type="file" name="imagem1" id="imagem1" class="input">
    <input type="file" name="imagem2" id="imagem2" class="input">
    <input type="file" name="imagem3" id="imagem3" class="input">
    <input type="file" name="imagem4" id="imagem4" class="input">
    <input type="file" name="imagem5" id="imagem5" class="input">
    <input type="hidden" name="album" value="<?php echo $album ?>">
    <input type="hidden" name="sessao" value="<?php echo $sessao ?>">
    <input type="hidden" name="acao" value="imagem">
    </div>
<?php

$dir="../album/midia/";
$dirhandle = opendir("$dir");

while ($arquivos = readdir($dirhandle)) {
   if($arquivos != "." && $arquivos != ".."){
	   echo "<div id='thumb_image'>
				<img src=\"$dir/$arquivos\" width='150'><br>	
				<a href='controle/delete/delete_logo_clientes.php?dir=$dir&arq=$arquivos'>Excluir</a>
			 </div>
     ";
   }
}
?>