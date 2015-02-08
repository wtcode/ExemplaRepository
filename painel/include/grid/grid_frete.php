<?php
	if(isset($_GET['id'])){
		$sql_frete = "SELECT * FROM frete  where idfrete = '".$_GET['id']."'";
		$result_frete = mysql_query($sql_frete,$conect);
		$linha_frete = mysql_fetch_array($result_frete);
		$enviar = "controle/update/edita_frete.php";
	} else {
		$enviar = "controle/insert/insert_frete.php";	
	}
?>
<form action="<?php echo $enviar ?>" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
        <tr>
            <th colspan="3" class="titulo" align="center">Inserir Bairro <a href="frete.php" style="float:right; position:relative; margin-right:10px;"><img src="images/add.png" /> <br />  Adicionar</a></th>
          </tr>
	<tr>
    <td>
    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
    <label style="margin-left:15px;"><strong>Bairro</strong></label> <input type="text" name="bairro" class="input" value="<?php echo $linha_frete['bairro'] ?>"> 
     <label style="margin-left:15px;"><strong>Valor</strong></label> <input type="text" name="valor" class="input" value="<?php echo $linha_frete['valor'] ?>"> 
    <input type="submit" value="Salvar" class="submit">
    </td>
</table>    
</form>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
  <tr>
    <th colspan="4" class="titulo" align="center">Frete</th>
  </tr>
  <tr>
    <td width="50%" class="titulo_grid">Bairros</td>
    <td width="22%" class="titulo_grid">Valor</td>
    <td width="14%" class="titulo_grid">&nbsp;</td>
    <td width="14%" class="titulo_grid">&nbsp;</td>
  </tr>
<?php
	$dataAtual = date('Y-m-d');
	$sqlGridServico = "select * from frete order by idfrete desc" ;
	$resultGridServico = mysql_query($sqlGridServico,$conect);
	while($linhaGridServico = mysql_fetch_array($resultGridServico)){
		$dataNoticia = explode("-",$linhaGridServico['dataEvento']);
		$noticiaData = $dataNoticia[2]."/".$dataNoticia[1]."/".$dataNoticia[0];
		
		if($num % 2 == 1) {
		  $cor="#706c6d"; 
		  } else { 
		 	 $cor = "#463d3f"; 
		  }
		    
		$num = $num + 1;
?>
  <tr bgcolor="<?php echo $cor; ?>" class="corpo_grid">
    <td class="corpo_grid"><?php  echo $linhaGridServico['bairro'] ?></td>
    <td class="corpo_grid"><?php echo $linhaGridServico['valor']  ?></td>
    <td class="corpo_grid"><a href="frete.php?id=<?php echo $linhaGridServico['idfrete'] ?>"><img src="images/document_edit.png"  title="Editar" alt="Editar"/></a></td>
    <td class="corpo_grid"><a href="controle/delete/delete_frete.php?id=<?php echo $linhaGridServico['idfrete'] ?>"><img src="images/delete2.png" title="Excluir" alt="Ecluir" /></a></td>
  </tr>
<?php
	}
?>
</table>