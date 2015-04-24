<?php
    //session_start();
    require_once ("controle/conect.php");
    require_once("controle/validaSessao.php");
    $pagina = 1;

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'nome_empresa'";
    $nomeEmpresa = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'emailpadrao_empresa'";
    $emailEmpresa = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'senhaemail_empresa'";
    $senhaEmailEmpresa = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'rua_empresa'";
    $enderecoRuaEmpresa = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'bairro_empresa'";
    $enderecoBairroEmpresa = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'cidade_empresa'";
    $enderecoCidadeEmpresa = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'cep_empresa'";
    $enderecoCepEmpresa = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'uf_empresa'";
    $enderecoUFEmpresa = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'horariofuncionamento_empresa'";
    $horarioEmpresa = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'telefone_empresa'";
    $telefoneEmpresa = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'token_pagseguro'";
    $tokenPagSeguro = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'desconto_pagseguro'";
    $descontoPagseguro = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'email_pagseguro'";
    $emailPagSeguro = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'cordefundo_layout'";
    $corDeFundo = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'img_logo_altura'";
    $img_logo_altura = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'img_logo_largura'";
    $img_logo_largura = mysql_fetch_array(mysql_query($sql,$conect));

    $sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'cnpj_empresa'";
    $cnpj_empresa = mysql_fetch_array(mysql_query($sql,$conect));
	
?>
<form action="controle/update/edita_parametrizacao.php" id="form_alterar" name="form_alterar" method="post" enctype="multipart/form-data">
    <div style="font-family:Arial, Helvetica, sans-serif; width:98%; height:20px; padding-left:10px; padding-top:10px; float:left; text-align:center;">
        <?php
        if (isset($_GET['msg']) and $_GET['msg'] = 1) {
            echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color:red; font-size:12px;\">" .
            "Dados atualizados com sucesso!" .
            "</span>";
        }
        ?>
    </div>  
    <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;float:left;">Dados da Empresa</span>
    <div style= "font-family:Arial, Helvetica, sans-serif; width:98%; padding-left:10px; padding-top:10px; float:left; border:3px solid 
                    #FFF; margin:0px 0px 0px 0px;">
        <table>
            <tr>
                <td class="form_right">
                    Nome da empresa:
                </td>
                <td>
                    <input class="input" type="text" style="width:385px;" name="nomeEmpresa" value="<?php echo $nomeEmpresa['valorparametro']; ?>" />
                </td>
            </tr>    
            <tr>
                <td class="form_right">
                    CNPJ:
                </td>
                <td>
                    <input class="input" type="text" style="width:385px;" name="cnpjEmpresa" value="<?php echo $cnpj_empresa['valorparametro']; ?>" />
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    Telefone:
                </td>
                <td>
                    <input class="input" onkeyup="mascara(this,mtel)" type="text" style="width:385px;" name="telefoneEmpresa" value="<?php echo $telefoneEmpresa['valorparametro']; ?>" />
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    Rua:
                </td>
                <td>
                    <input class="input" type="text" style="width:385px;" name="enderecoRuaEmpresa" value="<?php echo $enderecoRuaEmpresa['valorparametro']; ?>" />
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    Bairro:
                </td>
                <td>
                    <input class="input" type="text" style="width:385px;" name="enderecoBairroEmpresa" value="<?php echo $enderecoBairroEmpresa['valorparametro']; ?>" />
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    Cidade:
                </td>
                <td>
                    <input class="input" type="text" style="width:385px;" name="enderecoCidadeEmpresa" value="<?php echo $enderecoCidadeEmpresa['valorparametro']; ?>" />
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    UF:
                </td>
                <td>
                    <input class="input" type="text" style="width:69px;" name="enderecoUFEmpresa" value="<?php echo $enderecoUFEmpresa['valorparametro']; ?>" />
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    CEP:
                </td>
                <td>
                    <input class="input" type="text" style="width:79px;" name="enderecoCepEmpresa" value="<?php echo $enderecoCepEmpresa['valorparametro']; ?>" />
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    Horário:
                </td>
                <td>
                    <input class="input" type="text" style="width:271px;" name="horarioEmpresa" value="<?php echo $horarioEmpresa['valorparametro']; ?>"/>
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    E-mail padrão:
                </td>
                <td>
                    <input class="input" type="text" style="width:385px;" name="emailEmpresa" value="<?php echo $emailEmpresa['valorparametro']; ?>"/>
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    Senha e-mail:
                </td>
                <td>
                    <input class="input" type="password" style="width:385px;" name="senhaEmailEmpresa" value="<?php echo $senhaEmailEmpresa['valorparametro']; ?>" />
                </td>
            </tr>       
        </table>
    </div>
    
    <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;float:left;">Layout</span>
    <div style=" font-family:Arial, Helvetica, sans-serif; width:98%; height:172px; padding-left:10px; padding-top:10px; float:left; border:3px solid 
                    #FFF; margin:0px 0px 0px 0px;">
        <b>Logomarca:</b><br> 
        <table>
            <tr>
                <td class="form_right">
                    Largura:
                </td>
                <td>
                    <input class="input" type="text" style="width:40px;" name="larguraImgLogo" value="<?php echo $img_logo_altura['valorparametro']; ?>"/> px (Somente números)
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    Altura:
                </td>
                <td>
                    <input class="input" type="text" style="width:40px;" name="alturaImgLogo" value="<?php echo $img_logo_largura['valorparametro']; ?>" /> px (Somente números)
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    Imagem Logo:
                </td>
                <td>
                    <input class="input" type="file" name="imagem1" /> px (Somente números)
                    <input type="hidden" name="acao" value="imagem">
                </td>
            </tr>
            <tr>
                <td class="form_right">
                    Cor de fundo:
                </td>
                <td>
                    <input class="input" type="text" style="width:88px;" name="corDeFundo" value="<?php echo $corDeFundo['valorparametro']; ?>"  /> (Hexadecimal)
                </td>
            </tr>
        </table>       
    </div>
    <div style="font-family:Arial, Helvetica, sans-serif; width:98%; height:20px; padding-left:10px; padding-top:10px; float:left; text-align:right;">
        <input type="submit" value="Salvar" class="submit_index"  />
    </div>


    <?php
    //PAG SEGURO COMENTADO

    /* <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; float:left;">Pag Seguro</span>
      <div style=" font-family:Arial, Helvetica, sans-serif; width:98%; height:100px; padding-left:10px; padding-top:10px; float:left; border:3px solid
      #FFF; margin:0px 0px 0px 0px;">
      TOKEN  PagSeguro: <input class="input" type="text" style="width:320px;" name="tokenPagSeguro" value="<?php echo $tokenPagSeguro['valorparametro']; ?>" /><br />
      Email PagSeguro: <input class="input" type="text" style="width:330px;" name="emailPagSeguro" value="<?php echo $emailPagSeguro['valorparametro']; ?>" /> <br />
      Desconto Pag Seguro (Promo��o): <input class="input" type="text" style="width:40px;" name="descontoPagSeguro" value="<?php echo $descontoPagseguro['valorparametro']; ?>" /> %<br />
      </div> */
    ?>
</form>