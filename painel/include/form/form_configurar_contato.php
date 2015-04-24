<?php
	require_once ("controle/conect.php");
	require_once("controle/validaSessao.php");
	$pagina = 1;
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'autenticacaosmtp'";
	$autenticacaosmtp = mysql_fetch_array(mysql_query($sql,$conect));

	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'destino1'";
	$destino1 = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'destino2'";
	$destino2 = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'destino3'";
	$destino3 = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'emailorigem'";
	$emailorigem = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'host'";
	$host = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'mensagemcliente'";
	$mensagemcliente = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'nomeorigem'";
	$nomeorigem = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'notificarcliente'";
	$notificarcliente = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'senha'";
	$senha = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'usuario'";
	$usuario = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'assuntonotificacao'";
	$assuntonotificacao = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM configcontato where nmparametro = 'assuntoresposta'";
	$assuntoresposta = mysql_fetch_array(mysql_query($sql,$conect));
?>

<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;float:left;">Configurações de contato</span>
<div style=" font-family:Arial, Helvetica, sans-serif; width:98%; padding-left:10px; padding-top:10px; float:left; border:3px solid 
    #FFF; margin:0px 0px 0px 0px;">

    <form action="../painel/controle/update/edita_area_contato.php">
        <table width="100%">
            <tr>
                <td width="50%" align="right"> 
                    Gerenciar emails de Áreas:
                </td> 	
                <td width="50%">
                    <select name="area" onchange="showUser(this.value)">
                        <option value="">Selecione a Área</option>
                        <?php
                        $sql = "SELECT nome FROM areacontato";
                        $result = mysql_query($sql, $conect);
                        while ($area = mysql_fetch_array($result))
                            echo "<option value='" . $area['nome'] . "'> " . $area['nome'] . "</option>";
                        ?>
                    </select>

                    <div id="txtHint"></div>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
    </form>                     

    <form action="../painel/controle/update/edita_config_contato.php" id="form_alterar" name="form_alterar" method="post" enctype="multipart/form-data">     
        <table>

            <tr>
                <td align="right" >Host: </td> 	
                <td><input class="input" type="text" style="width:385px;" name="host" value="<?php echo $host['valorparametro']; ?>" /> </td>
            </tr>

            <tr>
                <td align="right">Usuário: </td>
                <td><input class="input" type="text" style="width:385px;" name="usuario" value="<?php echo $usuario['valorparametro']; ?>" /> </td>
            </tr>

            <tr>
                <td align="right">Senha: </td>
                <td><input class="input" onkeyup="mascara(this,mtel)" type="text" style="width:385px;" name="senha" value="<?php echo $senha['valorparametro']; ?>" /> </td>
            </tr>

            <tr>
                <td align="right">Exige autenticação (SMTP): </td>
                <td><input type="checkbox" name="autenticacaosmtp"  <?php if ($autenticacaosmtp['valorparametro'] == "on") echo "checked=\"on\""; ?> > </td>
            </tr>

            <tr>
                <td align="right">Email Origem: </td>
                <td><input class="input" type="text" style="width:385px;" name="emailorigem" value="<?php echo $emailorigem['valorparametro']; ?>" /> </td>
            </tr>

            <tr>
                <td align="right">Nome de Origem: </td>
                <td><input class="input" type="text" style="width:385px;" name="nomeorigem" value="<?php echo $nomeorigem['valorparametro']; ?>" /> </td>
            </tr>

            <tr>
                <td align="right">Assunto: </td>
                <td><input class="input" type="text" style="width:385px;" name="assuntonotificacao" value="<?php echo $assuntonotificacao['valorparametro']; ?>" /> </td>
            </tr>

            <tr>
                <td align="right">Notificar Cliente: </td>
                <td><input type="checkbox" name="notificarcliente"  <?php if ($notificarcliente['valorparametro'] == "on") echo "checked=\"on\""; ?> > </td>
            </tr>

            <tr>
                <td align="right">Assunto Cliente: </td>
                <td><input class="input" type="text" style="width:385px;" name="assuntoresposta" value="<?php echo $assuntoresposta['valorparametro']; ?>" /> </td>
            </tr>

        </table>

        Mensagem ao cliente: 


        <?php
        include_once("include/fckeditor/fckeditor.php");
        $oFCKeditor = new FCKeditor('mensagemcliente');
        $oFCKeditor->BasePath = 'include/fckeditor/';
        $oFCKeditor->ToolbarSet = 'Basic';
        $oFCKeditor->Value = $mensagemcliente['valorparametro'];
        $oFCKeditor->Create();
        ?>

        <br /><br />
        <center><input class="submit" type="submit" value="Salvar">	</center>	
    </form>
</div>
