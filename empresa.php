<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
    include("includes/MasterPage.php");
    $MasterPage = new MasterPage();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!--JS NewsLetter -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>	
    
    <title><?php echo $MasterPage->getNomeEmpresa(); ?></title>
    <link rel="shortcut icon" href="imagens/favicon.ico" />

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

    <!--JS Banners -->
    <script type="text/javascript" src="js/newsletter.js"></script>
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
            if ($MasterPage->VerificaBanners() >= 1) {  
                include("includes/banners.php");
            }
            include("includes/breadcumps.php"); 
        ?>
        <div class="conteudo" style="margin:-10px auto;">        
            <?php
                $opcao = "";
                if (isset($_GET["opcao"])) {
                    $opcao = $_GET["opcao"];
                    echo "<script type=\"text/javascript\"> $(document).ready(function(){ $(\"body\").scrollTop(500); }) </script>";
                } else {
                    $opcao = "a-empresa";
                }
                
                if ($opcao == "links"){
                	$opcao = "";
                	echo "<div class=\"tituloPagina\">Links</div>";
                	include("includes/menulateralempresa.php");
                	echo "<div class=\"blocoTextoDetalhe\" style=\"width:756px; float:right; margin-top:13px;\">";
                	include("includes/links.php");
                	echo "</div>";
                }else{
                
	                $sql = "SELECT * FROM conteudo where urlamigavel='$opcao'";
	                $result = mysql_query($sql);
	
	                if ($opcao == "equipe") {
	                    echo "<div class=\"tituloPagina\">Equipe</div>";
	                    include("includes/menulateralempresa.php");
	                    //DEPOIS QUE CADASTRAR OS FUNCIONÁRIOS DESCOMENTAR AS DUAS LINHAS ABAIXO.
	                    include("equipe.php");
	                    //echo "<div style='float:left; margin-left:50px;'> <p style='font-family: Myriad Pro; font-size:45px; color:#444444;'> Em breve!! </p> </div>";
	                }
	
	                if (mysql_affected_rows() < 1) {
	                    //include("includes/menulateralempresa.php");	
	                }
	
	                while ($linha = mysql_fetch_array($result)) {
            ?>
            <div class="tituloPagina">
                <?php echo utf8_encode($linha["titulo"]); ?>
            </div>
             <?php include("includes/menulateralempresa.php"); ?>
            <div class="blocoTextoDetalhe" style="width:756px; float:right; margin-top:13px;">
                <?php echo $linha["descricao"]; ?>
            </div>
            <?php
                }
             }
            ?>
        </div><?php //fim DIV CONTEUDO  ?>
        <div class="clear" style="height:55px;">
        </div>
        <?php // PARCEIROS  ?>
        <?php include("includes/parceiros.php"); ?>
        <?php // RODAPÉ ?>
        <?php include("includes/rodape.php"); ?>
    </div><?php //fim DIV TUDO  ?>
    <?php
        $MasterPage->CloseMySQL();
    ?>
</body>
</html>	