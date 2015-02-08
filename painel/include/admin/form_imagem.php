<!-- PARA MULTIPLOS ARQUIVOS BASTA COPIAR O INPUT FILE A QUANTIDADE DESEJADA-->
<form method="post" action="controle/upload/upload_imagem.php" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
	<tr>
        <td colspan="2" class="titulo" align="center">Inserir Banners</td>
    </tr>
    <tr>
        <th>Arquivo:</th>
        <td>
        <input type="file" name="file[]" class="input">
        <br />O tamanho sugerido para o Banner é 975 X 262
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
    	<th>Estatus</th>
        <td>
        	
            <select name="estatus" class="input">
                <option></option>
                <option value="1">Inativo</option>
                <option value="2">Ativo</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
          <input type="submit" name="submit" value="Enviar" class="submit">
        </td>
    </tr>
</table>  
</form>