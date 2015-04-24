<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
//include("includes/MasterPage.php");
//$MasterPage = new MasterPage();
?>
<!--CSS Página em geral -->
<link rel="stylesheet" href="css/frontend.css">
<link rel="stylesheet" href="css/equipe.css">
<div style="float:left; width:785px;">
    <div class="conteudo" style="text-align:justify;width:785px; margin:-60px auto;">

        <?php
        if (isset($_GET["func"])) {
            
            include("includes/detalhe_funcionario.php");
        } else {
            //quando não houver nenhumm parametro deve entrar neste else
            include('includes/grid/grid_equipe.php');
        }
        ?>

    </div><?php //fim DIV CONTEUDO  ?>
</div>
        

                
        

