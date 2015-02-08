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
					if(isset($_GET['msg']) and $_GET['msg'] = 1){
						echo "<span style=\"font-family:Arial, Helvetica, sans-serif; color:red; font-size:12px;\">" .
						"Dados atualizados com sucesso!" .
						"</span>";
						}
					?>
                  </div>  
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
                     Senha E-mail: <input class="input" type="password" style="width:343px;" name="senhaEmailEmpresa" value="<?php echo $senhaEmailEmpresa['valorparametro']; ?>" /> 
                      </div>
                
                <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;float:left;">Layout</span>
                    <div style=" font-family:Arial, Helvetica, sans-serif; width:98%; height:132px; padding-left:10px; padding-top:10px; float:left; border:3px solid 
                    #FFF; margin:0px 0px 0px 0px;">
                     <b>Logomarca:</b><br> 
                     Largura: <input class="input" type="text" style="width:40px;" name="larguraImgLogo" value="<?php echo $img_logo_altura['valorparametro']; ?>"/> px (Somente números)
                     Altura: <input class="input" type="text" style="width:40px;" name="alturaImgLogo" value="<?php echo $img_logo_largura['valorparametro']; ?>" /> px (Somente números)<br />
                     
                     Imagem Logo: <input class="input" type="file" name="imagem1" /> px (Somente números)   <br />  
                     <input type="hidden" name="acao" value="imagem">
                     
                     Cor de fundo: <input class="input" type="text" style="width:88px;" name="corDeFundo" value="<?php echo $corDeFundo['valorparametro']; ?>"  /> (Hexadecimal)          
                      </div>
                      
                  <div style="font-family:Arial, Helvetica, sans-serif; width:98%; height:20px; padding-left:10px; padding-top:10px; float:left; text-align:right;">
                    <input type="submit" value="Salvar" class="submit_index"  />
                  </div>
                  
                   
                <?php 
				//PAG SEGURO COMENTADO
				
				   /*<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; float:left;">Pag Seguro</span>
                    <div style=" font-family:Arial, Helvetica, sans-serif; width:98%; height:100px; padding-left:10px; padding-top:10px; float:left; border:3px solid 
                    #FFF; margin:0px 0px 0px 0px;">
                     TOKEN  PagSeguro: <input class="input" type="text" style="width:320px;" name="tokenPagSeguro" value="<?php echo $tokenPagSeguro['valorparametro']; ?>" /><br />
                     Email PagSeguro: <input class="input" type="text" style="width:330px;" name="emailPagSeguro" value="<?php echo $emailPagSeguro['valorparametro']; ?>" /> <br />
                     Desconto Pag Seguro (Promoção): <input class="input" type="text" style="width:40px;" name="descontoPagSeguro" value="<?php echo $descontoPagseguro['valorparametro']; ?>" /> %<br />
                      </div>*/ ?>
                </form>