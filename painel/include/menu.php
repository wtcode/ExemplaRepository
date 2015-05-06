<?php
include("controle/conect.php");
$sql = "select * from ACESSO order by IDMODULO";
$result = mysql_query($sql);
?>

<ul id="menu">
    <li><a href="principal.php">Principal</a></li>

    <?php
    $linha = mysql_fetch_array($result);
    if ($linha["ACESSO"] == 1 && $linha["IDMODULO"] == 1) {
        ?>
   
        <li>
            <a href="#">Conteúdo/Páginas</a>
            <ul>
                <li><a href="#"><b>Empresa</b></a>
                    <ul>
                        <li><a href="conteudo.php?id=1">&nbsp;&nbsp;&nbsp;Institucional</a></li>
                        <li><a href="conteudo.php?id=4">&nbsp;&nbsp;&nbsp;Missão e Visão</a></li>
                        <li><a href="conteudo.php?id=6">&nbsp;&nbsp;&nbsp;Links</a></li>
                        <li><a href="cadastramento.php?cad=3">&nbsp;&nbsp;&nbsp;Equipe</a></li>
                    </ul>
                </li>
                
                <li><a href="#"><b>Àrea de Atuação</b></a>
                    <ul>
                        <li><a href="#">&nbsp;&nbsp;&nbsp;Àrea</a></li>
                        <li><a href="#">&nbsp;&nbsp;&nbsp;Conteúdo</a></li>
                    </ul>
                </li>
                
                <li><a href="portifolio.php?id=1"><b>Portifólio</b></a></li>
                
                <li><a href="#"><b>Clientes e Parceiros</b></a>
                	<ul>
                        <li><a href="conteudo.php?id=5">&nbsp;&nbsp;&nbsp;Clientes</a></li>
                        <li><a href="conteudo.php?id=9">&nbsp;&nbsp;&nbsp;Parceiros</a></li>
                    </ul>
                </li>
                
            </ul>
        </li>

    <?php
    }
    $linha = mysql_fetch_array($result);
    if ($linha["ACESSO"] == 1 && $linha["IDMODULO"] == 2) {
        ?>

        <li>
            <a href="#">Produtos</a>
            <ul>
                <li><a href="produtos.php?id=1">Categoria</a></li>
                <li><a href="produtos.php?id=2">Sub-Categoria</a></li>
                <li><a href="produtos.php?id=3">Produtos</a></li>
            </ul>
        </li>

    <?php
    }
    $linha = mysql_fetch_array($result);
    if ($linha["ACESSO"] == 1 && $linha["IDMODULO"] == 3) {
        ?>

        <li>
            <a href="#">Frete</a>
            <ul>
                <li><a href="frete.php">Gestão de bairros</a></li>
            </ul>
        </li>

    <?php
    }
    $linha = mysql_fetch_array($result);
    if ($linha["ACESSO"] == 1 && $linha["IDMODULO"] == 4) {
        ?>

        <!--<li>
                        <a href="#">Clientes Cadastrados</a>
                        <ul>
                                <li><a href="clientes.php">Listar Clientes</a></li>
                        </ul>
                </li>

        <li>
            <a href="#">Cadastros</a>
            <ul>
                <li><a href="cadastramento.php?cad=2">Links</a></li>
                <li><a href="cadastramento.php?cad=2">Áreas de Atuação</a></li>
                <li><a href="cadastramento.php?cad=2">Portifólio</a></li>
                <li><a href="cadastramento.php?cad=3">Funcionários</a></li>
            </ul>  
        </li>     
        <!--
        <ul>
                            <li><a href="cadastramento.php?cad=1">Listar Clientes</a></li>
                            <li><a href="cadastramento.php?cad=2">Parceiros</a></li>
                            <li><a href="cadastramento.php?cad=3">Funcion�rios</a></li>
            <li><a style="background-image:url(http://exempla.com.br/painel/images/setamenu.png); background-position:center right; background-repeat:no-repeat;" href="#" 
            onmousemove="subMenuNoticias.style.display='';"
            onmouseout="subMenuNoticias.style.display='none';">Not�cias</a></li>
                    </ul>
            </li>
            <div class="subMenuNoticias" id="subMenuNoticias" style="width:200px; display:none;position:absolute;margin-top:-28px;margin-left:180px;" onmouseover="this.style.display='';" onmouseout="this.style.display='none';">
               <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><a href="produtos.php?id=1">Categoria</a></td>
                  </tr>
                  <tr>
                    <td> <a href="produtos.php?id=2">Sub-Categoria</a></td>
                  </tr>
                  <tr>
                    <td><a href="produtos.php?id=3">Not�cias</a></td>
                  </tr>
                </table>
            </div>  -->

<?php
}
$linha = mysql_fetch_array($result);
if ($linha["ACESSO"] == 1 && $linha["IDMODULO"] == 5) {
    ?>

        <li>
            <a href="#">Banner Home</a>
            <ul>
                <li><a href="gestao_banner.php?id=1">Inserir Banner</a></li>
                <li><a href="gestao_banner.php">Gerenciar Banners</a></li>
            </ul>
        </li>

        <!--
        <li>
                        <a href="#">Projetos Realizados</a>
                        <ul>
                                <li><a href="produtos.php?pt=1">Inserir Projetos Realizados</a></li>
                <li><a href="produtos.php">Gerencia Projetos Realizados</a></li>
                        </ul>
                </li> -->

<?php
}
$linha = mysql_fetch_array($result);
if ($linha["ACESSO"] == 1 && $linha["IDMODULO"] == 6) {
    ?>

        <li>
            <a href="#">Galeria de Fotos</a>
            <ul>
                <li><a href="albuns.php">Gerenciar Albuns</a></li>
            </ul>
        </li>

<?php
}
$linha = mysql_fetch_array($result);
if ($linha["ACESSO"] == 1 && $linha["IDMODULO"] == 7) {
    ?>

        <li>
            <a href="#">Newslletter</a>
            <ul>
                <li><a href="newslletter.php?id=1">Listar</a></li>
                <li><a href="newslletter.php">Exportar Lista</a></li>
            </ul>
        </li>

<?php
}
$linha = mysql_fetch_array($result);
if ($linha["ACESSO"] == 1 && $linha["IDMODULO"] == 8) {
    ?>

        <li>
            <a href="#">Configura&ccedil;&otilde;es</a>
            <ul>
                <li><a href="configuracoes.php?id=1">Alterar Senha</a></li>
                <li><a href="configuracoes.php?id=2">Parametros Globais</a></li>
                <li><a href="configuracoes.php?id=3">Configurar Contato</a></li>
            </ul>
        </li>
<?php } ?>

</ul>