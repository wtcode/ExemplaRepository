<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
include("includes/MasterPage.php"); 
$MasterPage = new MasterPage();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $MasterPage->getNomeEmpresa(); ?></title>

    <!--JS NewsLetter -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>	

    <link rel="shortcut icon" href="imagens/favicon.ico" />
    <!--CSS Banners -->
    <link rel="stylesheet" href="banners/orbit-1.2.3.css">
    <link rel="stylesheet" href="banners/demo-style.css">
        
    <!--CSS Página em geral -->
    <link rel="stylesheet" href="css/frontend.css">
    <link rel="stylesheet" href="css/contato.css">
	  	
    <!--JS Banners -->
    <script type="text/javascript" src="banners/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="banners/jquery.orbit-1.2.3.min.js"></script>

    <!--JS Funcoes. Galeria e Mascaras -->        
    <script type="text/javascript" src="js/fucoes.js"></script>
        
    <!--JS Validação do Formulário -->        
    <script type="text/javascript" src="js/valida_campos.js"></script>

    <!--[if IE]>
         <style type="text/css">
             .timer { display: none !important; }
             div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
        </style>
    <![endif]-->

    <!-- Run the plugin for banners -->
    <script type="text/javascript">
            $(window).load(function() {
                    $('.featured').orbit();
            });
    </script>
    
</head>

<body>

	<div class="tudo">
		<?php 
			include("includes/topo.php");
		 ?>


        <?php
		if ($MasterPage->VerificaBanners() >= 1){
		 		include("includes/banners.php"); 
				}
		 ?>
        
        <?php include("includes/breadcumps.php"); ?>
        
        <div class="conteudo" style="height:600px;">
        
        	<div class="divFormContato">
            	
                <div class="divTitulo">
                	Entre em contato conosco
                </div>
                
                <div class="divObsContato">
                	Tem alguma dúvida, sugestão ou crítica a fazer? Então entre em contato com a gente. Sua opinião é fundamental para o nosso aperfeiçoamento.
                </div>
                
                <div class="divSeguraCampos">
                
                <form action="#" method="post" onsubmit="return valida(this);">
                	
                    <input type="text" id="nome" name="nome" value="Nome" class="input" onfocus="javascript:if(this.value=='Nome') { this.value = '';}" onblur="javascript:if(this.value=='') { this.value = 'Nome';}" /><br /><br />
                    
                    <input type="text" id="email" name="email" value="E-mail" class="input" onfocus="javascript:if(this.value=='E-mail') { this.value = '';}" onblur="javascript:if(this.value=='') { this.value = 'E-mail';}"/><br /><br />
                    
					<input type="text" id="telefone" name="telefone" value="Telefone" class="input" onkeydown="Mascara(this,Telefone);" maxlength="14" onkeypress="Mascara(this,Telefone);" onkeyup="Mascara(this,Telefone);" onfocus="javascript:if(this.value=='Telefone') { this.value = '';}" onblur="javascript:if(this.value=='') { this.value = 'Telefone';}"/><br /><br />
                    
                    <input type="text" id="assunto" name="assunto" value="Assunto" class="input" onfocus="javascript:if(this.value=='Assunto') { this.value = '';}" onblur="javascript:if(this.value=='') { this.value = 'Assunto';}"/><br /><br />
                    
                    <select name="area" class="input" style="width:100%; height:51px;" >
                        <option value="">Selecione uma àrea...</option>
                          <?php 
                            $sql = "SELECT nome FROM areacontato";
                            $result = mysql_query($sql,$conect);
                            while ($area = mysql_fetch_array($result))
                                echo "<option value='" . $area['nome'] . "'> " . $area['nome'] . "</option>";
                          
                          ?>
                    </select>
                    <br /><br />
                    <textarea rows="5" id="mensagem" name="mensagem" onfocus="javascript:if(this.value=='Sua mensagem') { this.value = '';}" onblur="javascript:if(this.value=='') { this.value = 'Sua mensagem';}" >Sua mensagem</textarea><br /><br />
                    
                    <input type="submit" class="botaoEnvia" value="Enviar Mensagem" />
                    
                 </form>
                </div>
                
                
                
            </div><?php //fim div formcontato ?>
            
            <!-- O mapa foi ocultado até a empresa ter um endereço
            <div class="divMapaContato">
            	
                <div class="divTitulo">
                	Faça-nos uma visista
                </div>
                
                <div style="float:left; border:3px solid #37949F; margin-top:17px;">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.8064365898376!2d-43.9246475!3d-19.8481414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69ac81dff8425%3A0x3bc7ae7e80c57d5b!2sRua+Rubens+de+Souza+Pimentel!5e0!3m2!1spt-BR!2sbr!4v1395602945290" width="455" height="390" frameborder="0" style="border:0"></iframe>
                </div>
            	
            </div>	
            -->
                   
        </div><?php //fim DIV CONTEUDO ?>
		
        <div class="clear" style="height:55px;">
        </div>
        
        <?php // PARCEIROS ?>
        <?php include("includes/parceiros.php"); ?>
        
       <?php // RODAPÉ ?>
       <?php include("includes/rodape.php"); ?>
                
        
    </div><?php //fim DIV TUDO ?>
    <?php 
	$MasterPage->CloseMySQL();
	?>
</body>
</html>	