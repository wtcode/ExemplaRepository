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
        
    <!--CSS P�gina em geral -->
    <link rel="stylesheet" href="css/frontend.css">
    <link rel="stylesheet" href="css/portifolio.css">
	  	
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
        
        <script type="text/javascript">
	function ChangeBackgroungImageOfTab(id)
		{
			document.getElementById(id).style.backgroundImage = 'url("figuras/fundodescricaoportifolioOver.png")';
		}
	
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

        <?php include("includes/conteudoclipar.php"); ?>
       
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