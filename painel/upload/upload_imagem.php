
<?php

include "../conect.php";

$estatus 	 = $_POST['estatus'];
$tipo_banner = $_POST['tipo_banner'];


if ($estatus == 0){
	$estatus = 1;
}


//Diretório aonde ficará os arquivos
$dir = "../../../banners/figuras/";


//Extensões permitidas
$ext = array("gif","jpg","png", "swf");

//Quant. de campos do tipo FILE
$campos = 1;

//Formulário
echo 'processando..<br>';
 
 
//Se for enviado
if (isset($_POST['submit'])) {

//Obtendo info. dos arquivos
$f_name = $_FILES['file']['name'];
$f_tmp = $_FILES['file']['tmp_name'];
$f_type = $_FILES['file']['type'];


//Contar arquivos enviados
$cont=0;

//Repetindo de acordo com a quantidade de campos FILE
for($i=0;$i<$campos;$i++){

//Pegando o nome
$name = $f_name[$i];

$sql_banner = "insert into banner (posicao, patch, estatus, tipo_banner) values ('1','$name','$estatus', '$tipo_banner')";
$result_banner = mysql_query($sql_banner,$conect);

//Verificando se o campo contem arquivo
  if ( ($name!="") and (is_file($f_tmp[$i])) and (in_array(substr($name, -3),$ext)) ) {

    if ($cont==0) {
      echo "<b>Arquivo(s) enviados:
</b>";
    }
      echo $name." - ";

      //Movendo arquivo's do upload
      $up = move_uploaded_file($f_tmp[$i], $dir.$name);

        //Status
        if ($up==true):
            echo  "<i>Enviado!</i>";
              $cont++;
        else:
            echo "<i>Falhou!</i>";
        endif;

      echo "
";
  }

}

//echo ($cont!=0) ? "<i>Total de arquivos enviados: </i>".$cont : "Nenhum arquivo foi enviado!";
}
?>
<script>
	location.href = "../../gestao_banner.php";
</script>