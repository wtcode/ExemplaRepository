<!-- PARA MULTIPLOS ARQUIVOS BASTA COPIAR O INPUT FILE A QUANTIDADE DESEJADA-->
<script>
	$(document).ready(function(){
		$(".submit").click(function(){
			//alert('a');
			if ($('#file').eq(0).val() == ""){
				alert("Você deve anexar um arquivo!");
				return false;
	        }
		});	
	});
</script>
<form method="post" action="controle/upload/upload_imagem.php" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
	<tr>
        <td colspan="2" class="titulo" align="center">Inserir Banners</td>
    </tr>
    <tr>
        <th>Arquivo:</th>
        <td>
        <input id="file" type="file" name="file[]" class="input">
        <br /><i>O tamanho sugerido para o Banner é 1000px X 325px</i>
        </td>
    </tr>
	<tr>
    	<th>
        Link
        </th>
        <td>
        	<input type="text" name="tipo_banner" value="" class="input" />
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	
            <select name="estatus" class="input">
                <option value="1">Inativo</option>
                <option value="2">Ativo</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
          <input type="submit" name="submit" value="Inserir" class="submit">
        </td>
    </tr>
</table>  
</form>