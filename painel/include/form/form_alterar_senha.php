<?php
    //session_start();  //Estava dando erro pois a sessão já existe
    require_once ("controle/conect.php");
    require_once("controle/validaSessao.php");
    $pagina = 1;
?>

<div>
    <?php 
        if (isset($_GET['msg']) and $_GET['msg'] = 1) {
            echo "<span style='color:red; font-family: Arial;'>Senha alterada com sucesso!</span>";
        } else
        if (isset($_GET['msg']) and $_GET['msg'] = 2) {
            echo "Senha inválida!";
        }
    ?>
</div>

<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;float:left;">Alterar Senha</span>
    <div style= "font-family:Arial, Helvetica, sans-serif; width:98%; padding-left:10px; padding-top:10px; float:left; border:3px solid 
                    #FFF; margin:0px 0px 0px 0px;">

        <div style="width:30%; height:250px; padding-left:10px; padding-top:10px; float:left; margin:0px 0px 0px 15px;">
            <form action="alterar_senha_adim.php" id="form_alterar" name="form_alterar" method="post" enctype="multipart/form-data">
                Login:<br /> <input class="input" name="login" id="login" style="width:195px;" value="<?php echo $Usuario; ?>" /><br />
                Senha atual:<br /> <input type="password" class="input" name="senha" id="senha" style="width:195px;" /><br />
                Nova Senha:<br /> <input type="password" class="input" name="newsenha" id="senha" style="width:195px;"/><br />
                Repetir Senha:<br /> <input type="password" class="input" name="rptnewsenha" id="senha"  style="width:195px;"/><br /><br />
                <input type="submit" class="" value="Alterar Senha" />
            </form>
        </div>
    </div>