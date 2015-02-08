<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include("conect.php"); 
include("MasterPage.php"); 
$MasterPage = new MasterPage();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hamacon - Construtora</title>

		<link rel="shortcut icon" href="imagens/favicon.icon" />
		<!-- Attach our CSS -->
	  	<link rel="stylesheet" href="banners/orbit-1.2.3.css">
	  	<link rel="stylesheet" href="banners/demo-style.css">
        <link rel="stylesheet" href="css/frontend.css">
        <link href='http://fonts.googleapis.com/css?family=Tinos' rel='stylesheet' type='text/css'>
	  	
        <!--JS Galeria de fotos -->
        <script type="text/javascript" src="js/fucoes.js"></script>
        <script type="text/javascript" src="js/fotos_jquery.min.js"></script>
        <script type="text/javascript">
			//Faz trocr as fotos da  página detalhes.
			$(function(){
				//Criamos um evento de click em todas tags img dentro do elemento com class "thumbs"
				$('.thumbs img').bind('click',trocaImagem);
				 
				/*Adicionados para parte 2*/
				//Criamos um evento de click nos input buttons para realizar a navegação
				$('input.botao').bind('click',navegaImagem);
			});
			
			function trocaImagem(){
				objClk = $(this);
				srcImg = objClk.attr('src');
				$('.imagem img').attr('src',srcImg);
			
			}
			 
			/*Adicionados para parte 2*/
			function navegaImagem(){
				objClk = $(this);
				totalFotos = $('.thumbs img').length;
				indexFoto = $('.thumbs img[src="'+$('.imagem img').attr('src')+'"]').index();
				 
				if(objClk.hasClass('anterior')){
					if(indexFoto == '0'){
						carregarFotoIndex = (totalFotos - 1);
					}else{
						carregarFotoIndex = (indexFoto - 1);
					}                    
				}
				 
				if(objClk.hasClass('proximo')){
					if(indexFoto == (totalFotos - 1)){
						carregarFotoIndex = '0';
					}else{
						carregarFotoIndex = (indexFoto + 1);
					}                    
				}
				 
				$('.thumbs img').eq(carregarFotoIndex).trigger('click');
			}
			//fim galeria página detalhes
		</script>
</head>

<body>
	<div class="tudo">
        
		<?php include("includes/topo.php"); ?>
		
        <div class="conteudo">
        
        <div class="borda_cinza_a15" style="margin-top: 35px;margin-bottom: 35px; width: 727px;">
            
            <table style="margin-top:2px; margin-left:8px;">
                <tr>
                    <td>
                    <img style="width:56px;" src="imagens/home_detalhes.png" />
                    </td>
                    
                    <td>
                     <span class="titulosDestaques_azul" style="font-size:29px;">CONHEÇA SEU IMÓVEL</span>
                    </td>
                </tr>
            </table>
        </div><?php //fim DIV BARRA DESTAQUE ?>
        
        <div class="blocoContatoDetalhes">
        <table cellpadding="0" cellspacing="0">
        	<tr>
                <td>
                	<img src="imagens/botao_agende.png" />
                </td>
            </tr>
        </table>
        </div><?php //FIM BLOCO CONTATO?>
        	
            <div class="blocoNomeCasaDetalhes borda_cinza_a5" style="padding:6px;">
                <span class="titulosDestaques_vermelho" style="font-size:23px;">Casa Geminada - </span>
               
                <span class="titulosDestaques_vermelho" style="font-size:23px;">Lagoa Santa, </span>
                <span class="titulosDestaques_vermelho" style="font-size:23px;">Bairro Imperial</span><br />
                <span class="titulosDestaques_vermelho" style="font-size:23px;">R$  <span class="titulosDestaques_vermelho" style="font-size:30px;">250.000,00</span></span>
            </div><?php //fim DIV nomecasa ?>
            
            <div class="borda_cinza_a5 blocoFotosDestaque" align="center">	
           		
                <div class="imagem" style="position:relative; height:555px;">
                <input type="button" class="botao anterior" value="" />
				<a onclick="navegaImagem()" class="botao proximo" ><div class="botao proximo"></div></a>
                 	<img style="top:0; bottom:0; right:0; left:0; position:absolute;" src="imagens/82469ft_produto.jpg"/>

                </div> 

            </div>

            <div style="width:727px; height:100px; float:left; margin:0 auto; margin-left:0px;">
                 <div class="thumbs">
                        <img src="imagens/imagem_teste.jpg" height="87px" width="87px" />
                        <img src="imagens/82469ft_produto.jpg" height="87px" width="87px" />
                        <img src="imagens/64352ft_produto.jpg" height="87px" width="87px" />
                        <img src="imagens/82469ft_produto.jpg" height="87px" width="87px" />
                        <img src="imagens/64352ft_produto.jpg" height="87px" width="87px" />
                        <img src="imagens/82469ft_produto.jpg" height="87px" width="87px" />
                        <img src="imagens/82469ft_produto.jpg" height="87px" width="87px" />
                 </div>
            </div>
            
           <fieldset style="border:1px solid #D6D6D6;" class="borda_cinza_a5 blocoDescricaoImovelFiltset">
            <legend class="titulosDestaques_vermelho" >DESCRI&Ccedil;&Atilde;O DO IM&Oacute;VEL</legend>
                    <div class="blocoDescricaoImovel">
                    <span class="arial_14_cinza">Descrição: Excelente casa em bairro valorizado, com ótimo acabamento e linda vista para Lagoa Central.
					<br />
                    Área Interna: Casa com 03 quartos, sendo 01 suíte, sala para 02 ambientes, banheiro social e cozinha.
                    Área Externa: Garagem para 02 carros, varanda, lavanderia coberta e amplo quintal
                    </span>
                    </div> <?php //fim DIV descricao imovel?>
 			</fieldset>
            
            <fieldset style="border:1px solid #D6D6D6;" class="borda_cinza_a5 blocoDescricaoImovelFiltset">
               <legend class="titulosDestaques_vermelho" >DETALHES DO IM&Oacute;VEL</legend>
                    <div class="blocoDescricaoImovel">
                    	<table width="300px" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td class="tdTabelaDetalhes">Área Total:</td>
                                <td class="tdTabelaDetalhes" >180,00 m²</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Área Construída:</td>
                                <td class="tdTabelaDetalhes">90,00 m²</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Frente:</td>
                                <td class="tdTabelaDetalhes">-</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Salas:</td>
                                <td class="tdTabelaDetalhes">1</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Quartos:</td>
                                <td class="tdTabelaDetalhes">3</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Banheiros:</td>
                                <td class="tdTabelaDetalhes">1</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Suítes:</td>
                                <td class="tdTabelaDetalhes">1</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Varandas:</td>
                                <td class="tdTabelaDetalhes">1</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Vagas:</td>
                                <td class="tdTabelaDetalhes">2</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Nº Pavimentos:</td>
                                <td class="tdTabelaDetalhes">-</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Unidades por andar:</td>
                                <td class="tdTabelaDetalhes">-</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">IPTU:</td>
                                <td class="tdTabelaDetalhes">-</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Condomínio:</td>
                                <td class="tdTabelaDetalhes">-</td>
                              </tr>
                              <tr>
                                <td class="tdTabelaDetalhes">Idade aprox. do imóvel:</td>
                                <td class="tdTabelaDetalhes">-</td>
                              </tr>
                            </table>
				
                    </div> <?php //fim DIV tabela de detalhes ?>
 			</fieldset>
            
            
        </div><?php //fim DIV CONTEUDO ?>
       
       <?php include("includes/rodape.php") ?>
                
        
    </div><?php //fim DIV TUDO ?>
</body>
</html>	