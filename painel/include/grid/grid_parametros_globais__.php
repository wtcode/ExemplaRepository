<?php
	session_start();
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
	
	$sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'img_miniatura_altura'";
	$img_miniatura_altura = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'img_miniatura_largura'";
	$img_miniatura_largura = mysql_fetch_array(mysql_query($sql,$conect));
	
	$sql = "SELECT valorparametro FROM parametrizacao where nmparametro = 'cnpj_empresa'";
	$cnpj_empresa = mysql_fetch_array(mysql_query($sql,$conect));
	
	


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
               <form action="" id="form_alterar" name="form_alterar" method="post" enctype="multipart/form-data">
                <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;float:left;">Dados da Empresa</span>
                    <div style=" font-family:Arial, Helvetica, sans-serif; width:98%; padding-left:10px; padding-top:10px; float:left; border:3px solid 
                    #FFF; margin:0px 0px 0px 0px;">
                     Nome Da Empresa: <input class="input" type="text" style="width:310px;" name="nomeEmpresa" value="<?php echo $nomeEmpresa['valorparametro']; ?>" /> <br />
                     CNPJ: <input class="input" type="text" style="width:385px;" name="cnpjEmpresa" value="<?php echo $cnpj_empresa['valorparametro']; ?>" /> <br />
                     Telefone: <input class="input" onkeyup="mascara(this,mtel)" type="text" style="width:370px;" name="telefoneEmpresa" value="<?php echo $telefoneEmpresa['valorparametro']; ?>" /> <br />
                     Rua: <input class="input" type="text" style="width:394px;" name="enderecoRuaEmpresa" value="<?php echo $enderecoRuaEmpresa['valorparametro']; ?>" /> <br />
               		 Bairro: <input class="input" type="text" style="width:384px;" name="enderecoBairroEmpresa" value="<?php echo $enderecoBairroEmpresa['valorparametro']; ?>" /> <br />
                     Cidade: <input class="input" type="text" style="width:281px;" name="enderecoCidadeEmpresa" value="<?php echo $enderecoCidadeEmpresa['valorparametro']; ?>" /> UF: <input class="input" type="text" style="width:69px;" name="enderecoUFEmpresa" value="<?php echo $enderecoUFEmpresa['valorparametro']; ?>" /> <br />
                     CEP: <input class="input" type="text" style="width:79px;" name="enderecoCepEmpresa" value="<?php echo $enderecoCepEmpresa['valorparametro']; ?>" /> <br />
                     
                     Horário de Funcionamento: <input class="input" type="text" style="width:271px;" name="horarioEmpresa" value="<?php echo $horarioEmpresa['valorparametro']; ?>"/> <br>            
                     E-mail Padr&atilde;o: <input class="input" type="text" style="width:339px;" name="emailEmpresa" value="<?php echo $emailEmpresa['valorparametro']; ?>"/> <br>  
                     Senha E-mail: <input class="input" type="text" style="width:343px;" name="senhaEmailEmpresa" value="<?php echo $senhaEmailEmpresa['valorparametro']; ?>" /> 
                      </div>
                
                <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;float:left;">Layout</span>
                    <div style=" font-family:Arial, Helvetica, sans-serif; width:98%; height:132px; padding-left:10px; padding-top:10px; float:left; border:3px solid 
                    #FFF; margin:0px 0px 0px 0px;">
                     <b>Imagem Miniatura:</b><br> 
                     Largura: <input class="input" type="text" style="width:40px;" name="larguraImgMiniatura" value="<?php echo $img_miniatura_altura['valorparametro']; ?>"/> px (Somente números)
                     Altura: <input class="input" type="text" style="width:40px;" name="alturaImgMiniatura" value="<?php echo $img_miniatura_largura['valorparametro']; ?>" /> px (Somente números)<br />
                     Cor de fundo: <input class="input" type="text" style="width:88px;" name="corDeFundo" value="<?php echo $corDeFundo['valorparametro']; ?>"  /> (Hexadecimal)<br />
                     Imagem de Fundo: <input class="input" type="file" name="imgDefundo" /> px (Somente números)               
                      </div>
                      
                      
                    <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; float:left;">Pag Seguro</span>
                    <div style=" font-family:Arial, Helvetica, sans-serif; width:98%; height:100px; padding-left:10px; padding-top:10px; float:left; border:3px solid 
                    #FFF; margin:0px 0px 0px 0px;">
                     TOKEN  PagSeguro: <input class="input" type="text" style="width:320px;" name="tokenPagSeguro" value="<?php echo $tokenPagSeguro['valorparametro']; ?>" /><br />
                     Email PagSeguro: <input class="input" type="text" style="width:330px;" name="emailPagSeguro" value="<?php echo $emailPagSeguro['valorparametro']; ?>" /> <br />
                     Desconto Pag Seguro (Promoção): <input class="input" type="text" style="width:40px;" name="descontoPagSeguro" value="<?php echo $descontoPagseguro['valorparametro']; ?>" /> %<br />
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