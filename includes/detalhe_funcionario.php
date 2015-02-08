<?php 
$sql = "SELECT c.nome, c.cdcadastro, fc.foto, c.descricao " .
				"FROM cadastro c LEFT JOIN fotoscadastro fc ON c.cdcadastro = fc.cdcadastro " .
				"WHERE c.tipo = 'T' and c.cdcadastro = '" . $_GET["func"] . "'";
		$result = mysql_query($sql);
		
		while($linha = mysql_fetch_array($result)){
			
?>

<div style="">
	<img style="float:left; margin:10px; border-radius:6%;" onerror="this.onerror=null;this.src='imagens/semimgequipe.jpg';"  
                    alt="funcionário exempla" src="imagens/miniaturas/thumb_<?php echo $linha["foto"];?>"/>
                    
            <span style="font-family:Myriad Pro; font-size:30px; color:#37949F;"><?php echo utf8_encode($linha["nome"]); ?></span>   <br/>     
             
            <?php echo $linha["descricao"]; ?>       
</div>
 


<?php
		}//fecha while
?>