<?php
	include("conect.php");
	$sql = "select * from acesso where estatus = 2";
	$result = mysql_query($sql);
?>
<ul id="menu">
        <li><a href="principal.php">Principal</a></li>
		<?php
			while($linha = mysql_fetch_array($result))
				if ($linha['ACESSO']=1){
					
		?>
		<li>
			<a href="#"><?php  echo "$linha['NOME']" ?></a>
		<?php   } ?>	
			</li>
		<?php } ?>	
			<ul>
				<li><a href="conteudo.php?id=1">Empresa</a></li>
                <li><a href="conteudo.php?id=4">Área de Entrega</a></li>
			</ul>
		</li>
		<?php } ?>
        
</ul>