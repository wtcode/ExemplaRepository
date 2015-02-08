<?php
   //Incluir a classe excelwriter
   include("excelwriter.inc.php");

   //Você pode colocar aqui o nome do arquivo que você deseja salvar.
    $excel=new ExcelWriter("excel4.xls");

    if($excel==false){
        echo $excel->error;
   }

   //Escreve o nome dos campos de uma tabela
   $myArr=array('NOME','EMAIL');
   $excel->writeLine($myArr);

   //Seleciona os campos de uma tabela
	include "../controle/conect.php";

   $consulta = "SELECT * FROM cliente order by nome";
   $resultado = mysql_query($consulta,$conect);
   if($resultado==true){
      while($linha = mysql_fetch_array($resultado)){
         $myArr=array($linha['nome'],$linha['telefone_fixo'],$linha['telefone_celular'],$linha['nome_empresa'],$linha['cpf_cnpj'],$linha['email'],$linha['observacao']);
         $excel->writeLine($myArr);
      }
   }


    $excel->close();
?>
<script>
	location.href = "../clientes.php?msg=1";
</script>