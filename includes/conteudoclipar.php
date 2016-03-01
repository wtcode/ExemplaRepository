<div class="divmain tituloPagina">Clientes</div>

<div class="conteudo">
    <?php
		include ("conect.php");
		$sql = "SELECT * FROM conteudo where idpagina = 10";
		$result = mysql_query ( $sql );
		$linha = mysql_fetch_array ( $result );
		echo "<center>" . $linha ["descricao"] . "</center>"; 
    	//include ("linksclientes.php");
    ?>
</div><?php //fim DIV CONTEUDO ?>

<div class="clear"></div>

<div class="divmain tituloPagina">Parceiros</div>

<div class="conteudo">
    <?php
		$sql = "SELECT * FROM conteudo where idpagina = 11";
		$result = mysql_query ( $sql );
		$linha = mysql_fetch_array ( $result );
		echo "<center>" . $linha ["descricao"] . "</center>";
		//include ("linksparceiros.php");
    ?>
</div><?php //fim DIV CONTEUDO ?>