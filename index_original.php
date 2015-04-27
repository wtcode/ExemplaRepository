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

    <!--JS NewsLetter -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>	
        
    <!--CSS Banners -->
    <link rel="stylesheet" href="banners/orbit-1.2.3.css">
    <link rel="stylesheet" href="banners/demo-style.css">
        
    <!--CSS Página em geral -->
    <link rel="stylesheet" href="css/frontend.css">
    <link rel="stylesheet" href="css/empresa.css">
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
       
    <style type="text/css">
        .tituloPagina{
        margin-top: 51px; font-size:25px; font-family:Myriad Pro; color:#37929F; padding-left:10px; width: 990px;
        background-image:url(imagens/linhaportifolio.png); background-position:bottom left;	background-repeat:no-repeat; background-size:202px; float:left;          
    }
    </style>
</head>
    
<body>
    
    <div class="tudo">
        <?php 
            include("includes/topo.php");
            if ($MasterPage->VerificaBanners() >= 1){
                include("includes/banners.php"); 
            }
            include("includes/breadcumps.php"); 
        ?>

        <div class="conteudo" style="margin:-10px auto;">
            <?php include("includes/produtos_home.php"); ?>  
        </div>
        <div class="clear" style="height:55px;">
        </div>
        <?php include("includes/parceiros.php"); ?>
        <?php include("includes/rodape.php"); ?>
    </div>

    <?php 
	$MasterPage->CloseMySQL();
    ?>
    
</body>
</html>	