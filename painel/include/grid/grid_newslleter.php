<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
  <tr>
	<td colspan="3" class="titulo" align="center">Newslleter</td>
  </tr>
  <tr >
    <td class="titulo_grid">Nome</td>
    <td class="titulo_grid">Email</td>
  </tr>
  <?php 
  	$sqlProdutos = "select * from newslletter";
	$resultProdutos = mysql_query($sqlProdutos,$conect);
        $num = 0;
	while($linhaProdutos = mysql_fetch_array($resultProdutos)){
		if($num % 2 == 1) {
		  $cor="#706c6d"; 
		  } else { 
		 	 $cor = "#463d3f"; 
		  }
		$num = $num + 1;
  ?>
  <tr bgcolor="<?php echo $cor ?>" class="corpo_grid">
    <td class="corpo_grid"><?php echo $linhaProdutos['nome'] ?></td>
    <td class="corpo_grid"><?php echo $linhaProdutos['email'] ?></td>
  </tr>
  <?php
	}
  ?>
</table>
