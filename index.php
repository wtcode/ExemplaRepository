<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include("includes/MasterPage.php"); 
$MasterPage = new MasterPage();
?>
<head>



	<style type="text/css">

    	body{background-color:#006A33; margin:0 auto;}

		.tudoConteudo{

		 width:100%;

		 height:410px; 

		 background-color:#FFF;

		 margin-top:100px;

		 border-top:4px solid #37949F;

		 border-bottom:4px solid #37949F;

		 }

		 .conteudo{

			 width:1000px;

			 height:410px;

			 margin:0 auto;

		 }

		 .titulo{

			font-family:Myriad Pro;

			font-size:42px;

			letter-spacing:9px;

			width:100%;

			text-align:center; 

			margin-top:63px;

			float:left;

			color:#929292;

		 }

		 .segura{

			width:100%;

			height:86px;

			float:left;

			margin-top:62px;	 

		 }

		 .logo{

			 float:left;

		 }

		 .contato{

			float:right;

			width:312px;

			text-align:left;

			font-family:Myriad Pro;

		 }

		 .logoWT{

			float:left;

			width:100%;

			text-align:center;	

			margin-top:95px;

				 

	      }

    </style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $MasterPage->getNomeEmpresa(); ?></title>

<link rel="shortcut icon" href="imagens/favicon.ico" />

</head>



<body>



	<div class="tudoConteudo">

    

    	<div class="conteudo">

        

        	<div class="titulo"> Página em Construção </div>

            

            <div class="segura">

            

            	<div class="logo"> <img src="imagens/logo.png" /> </div>

                

                <div class="contato"> 
                
                	

                    <span style="font-size:25px; color:#006A33"> Entre em contato conosco </span><br />

                    <span style="font-size:20px; color:#37939F"> <b> E-mail: </b> <?php echo $MasterPage->getEmailEmpresa(); ?> </span><br />

                    <span style="font-size:20px; color:#37939F"> <b> Tel.: </b> <?php echo $MasterPage->getTelefoneEmpresa(); ?> </span>

                 </div>

            

            </div>

            

            <div class="logoWT"> <img src="logoWT.png" /> </div>

        

        </div>	

        

    </div>

</body>

</html>