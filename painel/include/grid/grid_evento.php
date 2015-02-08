<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
  <tr>
    <th colspan="4" class="titulo" align="center">Eventos  <a href="evento.php?pt=1" style="float:right; position:relative; margin-right:10px;"><img src="images/iconeCalendario.png" /> <br />  Adicionar</a></th>
  </tr>
  <tr>
    <td width="50%" class="titulo_grid">Estatuto</td>
    <td width="22%" class="titulo_grid">Data</td>
    <td width="14%" class="titulo_grid">&nbsp;</td>
    <td width="14%" class="titulo_grid">&nbsp;</td>
  </tr>
<?php
	$dataAtual = date('Y-m-d');
	$sqlGridServico = "select * from evento where dataEvento >= '$dataAtual'  order by dataEvento asc limit 15" ;
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
    <td class="corpo_grid"><?php  echo $linhaGridServico['titulo'] ?></td>
    <td class="corpo_grid"><?php echo $noticiaData  ?></td>
    <td class="corpo_grid"><a href="evento.php?pt=1&id=<?php echo $linhaGridServico['idevento'] ?>"><img src="images/document_edit.png"  title="Editar" alt="Editar"/></a></td>
    <td class="corpo_grid"><a href="controle/delete/delete_evento.php?id=<?php echo $linhaGridServico['idevento'] ?>"><img src="images/delete2.png" title="Excluir" alt="Ecluir" /></a></td>
  </tr>
<?php
	}
?>
</table>