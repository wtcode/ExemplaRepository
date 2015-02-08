<?php
	session_start();
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Área Reservada</title>
</head>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>

<script src="http://www.wtcode.com.br/hamacon/painel/js/funcoes.js" type="text/javascript"></script>
<script src="js/jquery-1.2.1.min.js" type="text/javascript"></script>
<script src="js/menu-collapsed.js" type="text/javascript"></script>
<script type="text/javascript">
		function getValor(valor){

			$("#recebeValor").html("<option value='0'>Carregando...</option>");
			setTimeout(function(){
				$("#recebeValor").load("include/ajaxValor.php",{id:valor})
			}, 2000);
		};
    </script>
<script>
	
	function showUser(str)
	{
	//document.getElementById("txtHint").innerHTML=str;
	
	if (str.length==0)
	  { 
	  document.getElementById("txtHint").innerHTML="";
	  return;
	  }
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","area_contato.php?q="+str,true);
	xmlhttp.send();
	}
	
</script>    
<?php include "include/validaBotoes.php";?>
<body>
<div id="pai">
	<div id="topo">
    <div style="width:952px;  margin:0 auto; height:100px;">
        	<div style="float:left; width:24%; height:100px;">
            </div>
            <div style="float:left; width:56%; ">
                <table style="width:100%;">
                    <tr>
                        <td style="vertical-align:middle; text-align:center">
                             <img src="../../../imagens/logo.png"/>
                        </td>
                    </tr>
                </table>
            </div>
        	<div style="float:left; width:20%; height:100px; ">
            </div>
        </div>
    </div>
    <div id="meio" align="center">
    	<div id="corpo" align="left">
        <?php
			include "include/boasVindas.php";
		?>
        	<div id="conteudo">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="21%">
				<?php 
					include ("include/menu.php");
				?>
				</td>
                
                <td width="79%">
                
                <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;float:left;">Configurações de contato</span>
                    <div style=" font-family:Arial, Helvetica, sans-serif; width:98%; padding-left:10px; padding-top:10px; float:left; border:3px solid 
                    #FFF; margin:0px 0px 0px 0px;">
                    
                      <form action="../painel/controle/update/edita_area_contato.php">
                    	<table width="100%">
                        	 <tr>
                                <td width="50%" align="right"> 
                                	Gerenciar emails de àreas:
                                </td> 	
                                <td width="50%">
                                    <select name="area" onchange="showUser(this.value)">
                                    	<option value="">Selecione a Àrea</option>
                                          <?php 
                                            $sql = "SELECT nome FROM areacontato";
                                            $result = mysql_query($sql,$conect);
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
						  $oFCKeditor->ToolbarSet	= 'Basic';
						  $oFCKeditor->Value = $mensagemcliente['valorparametro'] ;
						  $oFCKeditor->Create() ;
						?>
    				
                    <br /><br />
                    <center><input class="submit" type="submit" value="Salvar">	</center>	

                      </div>
                
               
                </form>

                </td>
              </tr>
            </table>
            </div>   
        </div>
    </div>
    <div id="rodape" align="center">
    	<?php include "include/rodape.php" ?>
    </div>
</div>
</body>
</html>