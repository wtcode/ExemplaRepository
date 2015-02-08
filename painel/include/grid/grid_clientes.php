<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
	<?php
        if(!isset($_GET['msg'])){
    ?>
      <!--<tr>
        <th colspan="5" class="titulo" align="center">Clientes <a href="include/exporta_clientes.php" style="float:right; margin-right:10px;"><img src="images/excel8.png" width="50" /><br /> Exportar Clientes</a></th>
      </tr>-->
      <tr>
        <td width="38%" class="titulo_grid">Nome</td>
        <td width="19%" class="titulo_grid">Telefone</td>
        <td width="11%" class="titulo_grid">Celular</td>
        <td width="18%" class="titulo_grid">Empresa</td>
        <td width="14%" class="titulo_grid">Email</td>
    
      </tr>
    <?php
        $dataAtual = date('Y-m-d');
        $sqlGridServico = "select * from cliente order by nome desc limit 15" ;
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
        <td class="corpo_grid"><?php  echo $linhaGridServico['nome'] ?></td>
        <td class="corpo_grid"><?php echo $linhaGridServico['telefone_fixo']  ?></td>
        <td class="corpo_grid"><?php echo $linhaGridServico['telefone_celular']  ?></td>
        <td class="corpo_grid"><?php echo $linhaGridServico['nome_empresa']  ?></td>
        <td class="corpo_grid"><?php echo $linhaGridServico['email']  ?></td>
      </tr>
    <?php
        }
	} else {
	  echo "<tr>
			  <th  class='titulo' align='center'>Clientes</th>
		    </tr>";
		echo "<tr>";
			echo "<td>";
				echo "<br>";
			 	echo "O arquivo foi salvo com sucesso clique no icone para baixar. <a href=\"include/excel4.xls\"><img src='images/excel8.png' width ='50'></a>";	
			 	echo "<br><br>";
				echo "<center><a href='clientes.php'><img src='images/nav_left_green.png' title='Voltar'></a></center>";
				echo "<br><br>";
		 	echo "</td>";
		echo "<tr>";
	}
?>
</table>