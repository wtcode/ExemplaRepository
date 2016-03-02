<?php
$sql = "SELECT c.nome, c.cdcadastro, fc.foto, c.descricao, cr.facebook,cr.instagran, cr.twiter, cr.linkedin 
        FROM cadastro c 
        LEFT JOIN fotoscadastro fc ON c.cdcadastro = fc.cdcadastro 
        LEFT JOIN cadastro_redesocial cr ON c.cdcadastro = cr.cdcadastro
        WHERE c.tipo = 'T' 
		GROUP BY c.cdcadastro
        ORDER BY c.ordem";
$result = mysql_query($sql);

//		while($linha = mysql_fetch_array($result))
//Calcula a margim, se o resto 
$i = 1;
$style = "35";

while ($linha = mysql_fetch_array($result)) {
    if ($i % 3 == 0) {
        $style = "style='margin-right:0px;margin-left:16px;'";
    } else {
        $style = "style='margin-right:44px;margin-left:16px;'";
    }
?>


    <div class="blocopessoa" <?php echo $style; ?>>
        <a href="empresa.php?opcao=equipe&func=<?php echo $linha["cdcadastro"]; ?>">
            <div class="foto">
                <img onerror="this.onerror=null;this.src='imagens/semimgequipe.jpg';"  
                     alt="funcionário exempla" src="imagens/miniaturas/thumb_<?php echo $linha["foto"]; ?>"/>
            </div><?php //fim foto equipe ?>

            <div class="nomefunc">
                <?php echo $linha["nome"]; ?>
            </div>

            <div class="descricaofunc">
                <?php
                $desc = preg_replace("@<[\/\!]*?[^<>]*?>@si", "", $linha["descricao"]);
                echo substr($desc, 0, 240) . "... <span style='color:#37949F;'>[+] Leia Mais.</span>";
                ?>

            </div><?php // fim descricao funcionario ?>
        </a> 
    
        <div class="blocoRedeSocialFunci">
        
            <?php
                if ($linha["facebook"] != "") {
                    echo "<a target='_blank' href='" . $linha["facebook"] . "'>	<img alt=\"funcionario exempla\" src=\"imagens/faceequipe.png\"/> </a>";
                }

                if ($linha["linkedin"] != "") {
                    echo "<a target='_blank' href='" . $linha["linkedin"] . "'>	<img alt=\"funcionario exempla\" src=\"imagens/linkdinequipe.png\"/> </a>";
                }

                if ($linha["twiter"] != "") {
                    echo "<a target='_blank' href='" . $linha["twiter"] . "'>	<img alt=\"funcionario exempla\" src=\"imagens/skypeequipe.png\"/> </a>";
                }

                if ($linha["instagran"] != "") {
                    echo "<a target='_blank' href='" . $linha["instagran"] . "'>	<img alt=\"funcionario exempla\" src=\"imagens/instagranequipe.png\"/> </a>";
                }
            ?>

        </div> <?php //Rede Social ?>
    </div><?php //fim DIV blocopessoa ?>

    <?php
    $i++;
} //fecha WHILE ?>