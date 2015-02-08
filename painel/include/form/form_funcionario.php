<?php
	if(isset($_GET['func'])){
		
		$cdcadastro = $_GET['func'];
		
		$sqlForm = "select * from cadastro where cdcadastro = '$cdcadastro'";	
		$resultForm = mysql_query($sqlForm,$conect);
		$linhaForm = mysql_fetch_array($resultForm);
		
		$nome = $linhaForm['nome'];
		$descricao = $linhaForm['descricao'];
		$cpf = $linhaForm['cpf'];
		$cnpj = $linhaForm['cnpj'];
		$email = $linhaForm['email'];
		$telefone = $linhaForm['telefone'];
		$rua = $linhaForm['rua'];		
		$complemento = $linhaForm['complemento'];
		$bairro = $linhaForm['bairro'];
		$cidade = $linhaForm['cidade'];
		$estado = $linhaForm['estado'];
		$numero = $linhaForm['numero'];
		
		//redes sociais.
		$sqlFormRede = "select * from cadastro_redesocial where cdcadastro = '$cdcadastro'";	
		
		//echo "select * from cadastro_redesocial where cdcadastro = '$cdcadastro'";
		
		$resultFormRede = mysql_query($sqlFormRede,$conect);
		$linhaFormRede = mysql_fetch_array($resultFormRede);
		
		$txtFacebook		 = $linhaFormRede['facebook'];
		$txtLinkedIn		 = $linhaFormRede['linkedin'];
		$txtTwiter		 	 = $linhaFormRede['twiter'];
		$txtInstagran		 = $linhaFormRede['instagran'];
		
		$chkFacbe = ""; 
		$chkLinkedIn = ""; 
		$chkTwiter = ""; 
		$chkInstagran = "";
		
		if(trim($txtFacebook) != ""){
			$chkFacbe = "checked='checked'";
		}
		
		if($txtLinkedIn != ""){
			$chkLinkedIn = "checked='checked'";
		}
		
		if($txtTwiter != ""){
			$chkTwiter = "checked='checked'";
		}
		
		if($txtInstagran != ""){
			$chkInstagran = "checked='checked'";
		}
		
		$envia = "controle/update/edita_funcionario.php";
		
	}else{
		$envia = "controle/insert/insert_funcionario.php";	
		$sub_categoria_titulo = "Selecione uma categoria";
		$sub_categoria = 0;
	}
	$titulo_form = "Inserir Funcionário";
?>
<form action="<?php echo $envia ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">

    <tr>
        <td colspan="2" class="titulo" align="center"><?php echo $titulo_form ?></td>
    </tr>

  <tr>
    <th width="20%">Nome</th>
    <td width="80%">
        <input type="text" name="nome" id="nome" class="input" size="59" value="<?php echo $nome; ?>">
        <input type="hidden" name="cdcadastro" id="cdcadastro" value="<?php echo $cdcadastro ?>" >
    </td>
  </tr>
  
  <tr>
    <th width="20%">CPF</th>
    <td width="80%">
        <input type="text" name="cpf" id="cpf" class="input" size="59" value="<?php echo $cpf; ?>">
    </td>
  </tr>
  
  <tr>
    <th width="20%">CNPJ</th>
    <td width="80%">
        <input type="text" name="cnpj" id="cnpj" class="input" size="59" value="<?php echo $cnpj; ?>">
    </td>
  </tr>
  
  <tr>
    <th width="20%">E-mail</th>
    <td width="80%">
        <input type="text" name="email" id="email" class="input" size="59" value="<?php echo $email; ?>">
    </td>
  </tr>
  
  <tr>
    <th width="20%">Telefone</th>
    <td width="80%">
        <input type="text" name="telefone" id="telefone" class="input" size="59" style="width:170px;" value="<?php echo $telefone; ?>">
    </td>
  </tr>
  
  <tr>
    <th width="20%">Rua</th>
    <td width="80%">
        <input type="text" name="rua" id="rua" class="input" size="59" style="width:270px;" value="<?php echo $rua; ?>">
        &nbsp;&nbsp;
        Numero <input type="text" name="numero" id="numero" class="input" size="59" style="width:38px;" value="<?php echo $numero; ?>">
    </td>
  </tr>
  
  <tr>
    <th width="20%">Complemento</th>
    <td width="80%">
        <input type="text" name="complemento" id="complemento" class="input" size="59" value="<?php echo $complemento; ?>">
    </td>
  </tr>
  
  <tr>
    <th width="20%">Bairro</th>
    <td width="80%">
        <input type="text" name="bairro" id="bairro" class="input" size="59" value="<?php echo $bairro; ?>">
    </td>
  </tr>
  
  <tr>
    <th width="20%">Cidade</th>
    <td width="80%">
        <input type="text" name="cidade" id="cidade" class="input" style="width:169px;" size="59" value="<?php echo $cidade; ?>">
        &nbsp;&nbsp;&nbsp;
        <strong>UF </strong><input type="text" name="estado" id="estado" class="input" size="59"  style="width:67px;"  value="<?php echo $estado; ?>">
    </td>
  </tr>
  <tr>
  <th width="20%">Redes Sociais</th>
    <td width="80%">
    
    	<table cellpadding="0" cellspacing="0">
        	<tr>
            	<td style="vertical-align:middle;">
                	<input type="checkbox" id="Facebook" <?php echo "$chkFacbe"; ?> value="Facebook" onclick="AbreCampos('Facebook');"/>Facebook
                    <input type="text" class="input" id="txtFacebook" name="txtFacebook" value="<?php echo "$txtFacebook"; ?>" style="display:none;" />
                </td>
            </tr>
            <tr>
            	<td style="vertical-align:middle;">
                	<input type="checkbox" id="LinkedIn" <?php echo "$chkLinkedIn"; ?> value="LinkedIn" onclick="AbreCampos('LinkedIn');"/>LinkedIn
                    <input type="text" class="input" id="txtLinkedIn" name="txtLinkedIn" value="<?php echo "$txtLinkedIn"; ?>" style="display:none;" />
                </td>
            </tr>
            <tr>
            	<td style="vertical-align:middle;">
                	<input type="checkbox" id="Twiter" value="Twiter" <?php echo "$chkTwiter"; ?> onclick="AbreCampos('Twiter');"/>Twiter
                    <input type="text" class="input" id="txtTwiter" name="txtTwiter" value="<?php echo "$txtTwiter"; ?>" style="display:none;"/>
                </td>
            </tr>
            <tr>
            	<td style="vertical-align:middle;">
                	<input type="checkbox" id="Instagran" <?php echo "$chkInstagran"; ?> value="Instagran" onclick="AbreCampos('Instagran');" />Instagran
                    <input type="text" class="input" id="txtInstagran" name="txtInstagran" value="<?php echo "$txtInstagran"; ?>" style="display:none;" />
                </td>
            </tr>
 
                    
        </table>
        
        <script type="text/javascript">
		function AbreCampos(campo){
			//alert(campo);
			if (document.getElementById(campo).checked == true){
				document.getElementById("txt" + campo).style.display = "inherit";
				}
				else{document.getElementById("txt" + campo).style.display = "none";}
			
			}
			
			window.onload = 
			AbreCampos("Facebook");
			AbreCampos("Instagran");
			AbreCampos("Twiter");
			AbreCampos("LinkedIn");
			
			
	</script>
    </td>
  </tr>
  <tr>
  	<th>imagens</th>
    <td>
        <input type="file" name="imagem1" id="imagem1" class="input">
        <input type="hidden" name="acao" value="imagem">
        <br>
        <?php
        if(isset($_GET['func'])){
			$sql_imagem_produto = "select * from fotoscadastro where cdcadastro = '$cdcadastro'";
			//echo sql_imagem_produto;
			$result_imagem_produto = mysql_query($sql_imagem_produto,$conect);
			while($linha_imagem_produtos = mysql_fetch_array($result_imagem_produto)){
				$imagem = $linha_imagem_produtos['foto'];
        		$cdfotocadastro = $linha_imagem_produtos['cdfotocadastro'];
				echo "<div id='thumb_image'>
						<img src='../imagens/miniaturas/thumb_$imagem'>
					 	<br>
						<a href='controle/delete/delete_imagem_funcionario.php?cdfoto=$cdfotocadastro&nf=1&func=$cdcadastro'>Excluir</a>
					 </div>";
				
			}
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