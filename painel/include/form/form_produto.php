<?php
	if(isset($_GET['prod'])){
		$id = $_GET['prod'];
		$sqlForm = "select * from produtos where idprodutos = '$id'";	
		$resultForm = mysql_query($sqlForm,$conect);
		$linhaForm = mysql_fetch_array($resultForm);
		$titulo = $linhaForm['titulo'];
		$descricao = $linhaForm['descricao'];
		$preco = $linhaForm['preco'];
		$habilitado = $linhaForm['idhabilitado'];
		$destaque_home = $linhaForm['destaque_home'];
		$destaque_topo = $linhaForm['destaque_topo'];
		
		if($habilitado == 1){
			$checked_habilitar = "checked='checked'";
		} else {
			$checked_habilitar = "";
		}
		
		if($destaque_home == 1){
			$checked_home = "checked='checked'";
		} else {
			$checked_home = "";
		}
		
		if($destaque_topo == 1){
			$checked_topo = "checked='checked'";
		} else {
			$checked_topo = "";
		}
		
		$categoria = $linhaForm['idcategoria'];		
		$sub_categoria = $linhaForm['idsub_categoria'];
		
		$sql_captura_categoria = "select * from categoria where idcategoria = '$categoria'";
		$result_captura_categoria = mysql_query($sql_captura_categoria,$conect);
		$linha_captura_categoria = mysql_fetch_array($result_captura_categoria);
		
		if($sub_categoria != 0){
			$sql_sub_categoria 	  = "select * from sub_categoria where idsub_categoria = '$sub_categoria'";
			$result_sub_categoria = mysql_query($sql_sub_categoria,$conect);
			$linha_sub_categoria  = mysql_fetch_array($result_sub_categoria);
			$sub_categoria_titulo = $linha_sub_categoria['titulo'];
		} else {
			$sub_categoria_titulo = "Selecione uma categoria";
		}
		
		$sql_disponibilidade = "SELECT * FROM diponibilidade_produto where idprodutos = '$id' ";
		$result_disponibilidade = mysql_query($sql_disponibilidade,$conect);
					
		$envia = "controle/update/edita_produto.php";
	}else{
		$envia = "controle/insert/insert_produtos.php";	
		$sub_categoria_titulo = "Selecione uma categoria";
		$sub_categoria = 0;
	}
	$titulo_form = "Inserir Produtos";
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
  	<th>Categoria</th>
    <td>
    <select name="categoria" class="input" onchange="getValor(this.value, 0)">
    <option value="<?php echo $categoria ?>"><?php echo $linha_captura_categoria['titulo'] ?></option>
    <?php 
		$sql_categoria 	  = "SELECT * FROM categoria order by titulo";
		$result_categoria = mysql_query($sql_categoria,$conect);
		while($linha_categoria = mysql_fetch_array($result_categoria)){
			echo "<option value='".$linha_categoria['idcategoria']."'>".$linha_categoria['titulo']."</option>";
		}
	?>
    </select>
    
    <strong>Sub-Categoria</strong>
    <select name="sub_categoria" id="recebeValor" class="input">
        <option value="<?php echo $sub_categoria ?>"><?php echo $sub_categoria_titulo ?></option>
    </select>	
    </td>
  </tr>
  <!--
  <tr>
  	<th>Disponibilidade</th>
    <td>
  	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>  
            Venda <input type="checkbox" name="disponibilidade[]" value="Venda" class="input" /><br />
            Assis. Técnica <input type="checkbox" name="disponibilidade[]" value="Assistência Técnica" class="input" /><br />
            Peças Rep. <input type="checkbox" name="disponibilidade[]" value="Peças Reposição" class="input" /><br />
            Locação <input type="checkbox" name="disponibilidade[]" value="Locação" class="input" /><br /></td>
        <td>
        	<div id="disponibilidades">
            <div id="titulo_dispo">Disponibilidade</div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                <?php 
					if(isset($_GET['prod'])){
						while($linha_disponibilidade = mysql_fetch_array($result_disponibilidade)){
							echo "<div id='desc_disponibilidade'>";
							echo $linha_disponibilidade['descricao'];
							echo "<a href='controle/delete/delete_disponibilidade.php?id=".$linha_disponibilidade['iddiponibilidade_produto']."&prod=$id'><img src='images/delete2.png' style='float:right'></a>";
							echo "</div>";	
						}
					}
				?>
                </td>
              </tr>
            </table>
            </div>
        </td>
      </tr>
    </table>

    </td>
  </tr>-->
  <tr>
  	<th>Preço</th>
    <td><input type="text" name="preco" class="input" value="<?php echo $preco ?>" /></td>
  </tr>
    <tr>
  	<th>Outras Informações</th>
    <td>
        <input type="checkbox" name="habilitar_site" value="1" class="input"	<?php echo $checked_habilitar ?> /> <label> Habilitar</label>&nbsp;&nbsp;&nbsp;
       <!-- Mostrar Topo <input type="checkbox" name="mostrar_topo" value="1" class="input" <?php echo $checked_home ?> />&nbsp;&nbsp;&nbsp;-->
         <input type="checkbox" name="mostrar_home" value="1" class="input" <?php echo $checked_home ?> /><label>Habilitar Descrição</label>
    </td>
  </tr>
  <tr>
  	<th>imagens</th>
    <td>
        <input type="file" name="imagem1" id="imagem1" class="input">
        <input type="hidden" name="acao" value="imagem">
        <br>
        <?php
        if(isset($_GET['prod'])){
			$sql_imagem_produto = "select * from imagem_produto where idprodutos = '$id'";
			$result_imagem_produto = mysql_query($sql_imagem_produto,$conect);
			while($linha_imagem_produtos = mysql_fetch_array($result_imagem_produto)){
				$imagem = $linha_imagem_produtos['patch'];
        		$id_imagem_produto = $linha_imagem_produtos['idimagem_produto'];
				echo "<div id='thumb_image'>
						<img src='../imagens/miniaturas/thumb_$imagem'>
					 	<br>
						<a href='controle/delete/delete_imagem_produto.php?id=$id_imagem_produto&pt=1&prod=$id'>Excluir</a>
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