<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<div style="height:32px; width:100%; float:left;">
    <?php //div sepera ?>
</div>

<div class="clear">
</div>

<div class="tituloRodape" style="height:41px; width:100%;"><?php //div Acesso rapido RODAPE ?>
    <div style="height:41px; width:1000px; margin:0 auto;">
        <div style="width:32%; float:left">
            <div style="width:100%; float:left; font-size:20px; background-image:url(../imagens/separatituloradope.png); background-position:0px bottom; background-repeat:no-repeat;">
                Acesso Rápido
            </div>
            <div style="width:100%; float:left;">
                <table width="206" border="0" cellspacing="0" cellpadding="2" style="color:#444444; font-size:15px; margin-left:22px; margin-top:15px;">
                    <tr>
                        <td> <a href="index.php" class="linkRodape"> Home </a> </td>
                    </tr>
                    <tr>
                        <td> <a href="empresa.php" class="linkRodape"> Empresa </a> </td>
                    </tr>
                    <tr>
                        <td><a href="areadeatuacao.php" class="linkRodape">Área de Atuação </a></td>
                    </tr>
                    <tr>
                        <td> <a href="clienteseparceiros.php" class="linkRodape"> Clientes e Parceiros </a> </td>
                    </tr>
                    <tr>
                        <td> <a href="portifolio.php" class="linkRodape"> Portifólio </a> </td>
                    </tr>
                    <tr>
                        <td> <a href="contato.php" class="linkRodape" > Contato </a> </td>
                    </tr>
                </table>              
            </div>

        </div>

        <div style="width:32%; float:left">

            <div style="width:100%; float:left; font-size:20px; background-image:url(../imagens/separatituloradope.png); background-position:0px bottom; background-repeat:no-repeat;">
                Atendimento
            </div>
            <div style="width:100%; float:left;">
                <table width="190" border="0" cellspacing="0" cellpadding="2" style="color:#444444; font-size:15px; margin-left:11px;margin-top:15px;">
                    <tr>
                        <td style="font-size:30px;"> <?php echo $MasterPage->getTelefoneEmpresa(); ?> </td>
                    </tr>
                    <tr>
                        <td> <?php echo $MasterPage->getEmailEmpresa(); ?> </td>
                    </tr>
                </table>              
            </div>

            <div style=" margin-top:20px; width:100%; float:left; font-size:20px; background-image:url(../imagens/separatituloradope.png); background-position:0px bottom; background-repeat:no-repeat;">
                Newsletter
            </div>
            <div style="width:100%; float:left;">
                <form  enctype="multipart/form-data" id="formcadastranl" method="post">
                    <table width="190" border="0" cellspacing="0" cellpadding="2" style="color:#444444; font-size:15px; margin-left:2px;margin-top:15px;">
                        <tr>
                            <td style="font-size:30px;"> 
                                <input id="txtNomeNewsletter" class="inputNewsletter" type="text" value="Seu nome" />
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <input id="txtEmailNewsletter" class="inputNewsletter" type="text" value="Seu e-mail" />
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:right;"> 
                                <input id="bttOkNewsletter" class="bttNewsletter" type="button" value="OK"/>
                            </td>
                        </tr>
                    </table>              
                </form>
            </div>

        </div>

        <div style="width:33.3%; float:left">

            <div style="width:100%; float:left; font-size:20px; background-image:url(../imagens/separatituloradope.png); background-position:0px bottom; background-repeat:no-repeat;">
                Facebook
            </div>
            <div style="width:100%; float:left;">
                <table width="180" border="0" cellspacing="0" cellpadding="2" style="color:#444444; font-size:15px; margin-left:0px;margin-top:15px;">
                    <tr>
                        <td style="font-size:30px;"> 
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id))
                                        return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-like-box" data-href="https://www.facebook.com/exemplaeng" data-width="350" data-height="180" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>

                        </td>
                    </tr>

                </table>              
            </div>

        </div>

    </div>
</div><?php //fim div MENU RODAPE ?>

<div class="clear" style="height:23px;"></div>

<div class="rodape">
    <div class="conteudoRodape">
        <div class="logoRodape">
            <img src="imagens/logo_rodape.png" style="margin-top:20px;" />
        </div>

        <div class="separadorRodape">
        </div>

        <?php /* ?>  
          <div class="enderecoRodape">
          <span><?php echo utf8_encode($MasterPage->getRuaEmpresa() . ", " . $MasterPage->getBairroEmpresa() . " - CEP: " . $MasterPage->getCepEmpresa() . "<br>" . $MasterPage->getCidadeEmpresa() .  " | " . $MasterPage->getUfEmpresa());?>
          <br />

          <span style="font-size:20px;"> <?php echo $MasterPage->getTelefoneEmpresa(); ?></span>
          </span>
          </div>
          <?php */ //Aqui o endereço da empresa foi ocultado ?>
        <div style=" width:98px; float:right; margin-top:40px;">
            <img src="imagens/wtlogo.png"/>
        </div>
    </div><?php //fim DIV CONTEUDO RODAPE  ?>
</div><?php
        //fim DIV RODAPE ?>