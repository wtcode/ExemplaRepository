<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
include("includes/MasterPage.php"); 
$MasterPage = new MasterPage();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $MasterPage->getNomeEmpresa(); ?></title>

		<link rel="shortcut icon" href="imagens/favicon.ico" />
		<!--CSS Banners -->
	  	<link rel="stylesheet" href="banners/orbit-1.2.3.css">
	  	<link rel="stylesheet" href="banners/demo-style.css">
        
        <!--CSS Página em geral -->
        <link rel="stylesheet" href="css/frontend.css">
        <link rel="stylesheet" href="css/publicacoes.css">
	  	
		<!--JS Banners -->
		<script type="text/javascript" src="banners/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="banners/jquery.orbit-1.2.3.min.js"></script>	
		
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
        
        <div class="divmain tituloPagina">
        	Principais Publicações
        </div>
        
        
        <div class="conteudo">
        
        <div class="menuLateral">
        	<table width="180" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="2" class="tituloMenu">Categoria</td>
              </tr>
              <tr>
                <td colspan="2" style="padding-left:19px; padding-top:10px;">
                	<table width="180" border="0" cellspacing="0" cellpadding="0">
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">
                          Sub-Categoria
                          </td>
                       </tr>
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">Sub-Categoria</td>
                       </tr>
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">Sub-Categoria</td>
                       </tr>
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">Sub-Categoria</td>
                       </tr>
              		</table>
                </td>
              </tr>
              
              <tr>
                <td colspan="2" class="tituloMenu">Categoria</td>
              </tr>
              <tr>
                <td colspan="2" style="padding-left:19px; padding-top:10px;">
                	<table width="180" border="0" cellspacing="0" cellpadding="0">
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">
                          Sub-Categoria
                          </td>
                       </tr>
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">Sub-Categoria</td>
                       </tr>
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">Sub-Categoria</td>
                       </tr>
                       <tr>
                          <td style="padding-bottom:10px;"><img src="imagens/setaMenu.png" style="width:5px;"/></td>
                          <td class="subCategoriaMenu">Sub-Categoria</td>
                       </tr>
              		</table>
                </td>
              </tr>
              
            </table>

        </div>
        
       <?php 
	   if (isset($_GET["nt"])){
			include("includes/detalhe_publicacao.php");
		}
		else{
			//quando não houver nenhumm parametro deve entrar neste else
			include('includes/grid/grid_pubilicacao.php');
			}
	   ?>
                   
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