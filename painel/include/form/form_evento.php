<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sqlForm = "select * from evento where idEvento = '$id'";		
		$resultForm = mysql_query($sqlForm,$conect);
		$linhaForm = mysql_fetch_array($resultForm);
		$idForm = $linhaForm['idEvento'];
		$titulo = $linhaForm['titulo'];
		$descricao = $linhaForm['descricao'];
		$dataMostra = explode("-",$linhaForm['dataEvento']);
		$dia = $dataMostra[2];
		$mes = $dataMostra[1];
		$ano = $dataMostra[0];
		$imagem = $linhaForm['patch_banner'];
		
		$nomeMes = array('','Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezemro');
					
		$envia = "controle/update/edita_evento.php";
	}else{
		$envia = "controle/insert/insert_evento.php";	
	}
	$titulo_form = "Evento";
?>
<form  action="<?php echo $envia ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form">
<tr>
	<td colspan="2" class="titulo" align="center"><?php echo $titulo_form ?></td>
</tr>
  <tr>
    <th width="20%">Titulo</th>
    <td width="80%">
        <input type="text" name="titulo" class="input" size="59" value="<?php echo $titulo; ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>" >
    </td>
  </tr>
  <tr>
  	<th>Data</th>
    <td>
    <select name="dia" class="input">
    	<option value="<?php echo $dia ?>"><?php echo $dia ?></option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>
     / 
     <select name="mes" class="input">
     	<option value="<?php echo $mes ?>"><?php echo $nomeMes[$mes] ?></option>
        <option value="01">Janeiro</option>
        <option value="02">Fevereiro</option>
        <option value="03">Março</option>
        <option value="04">Abril</option>
        <option value="05">Maio</option>
        <option value="06">Junho</option>
        <option value="07">Julho</option>
        <option value="08">Agosto</option>
        <option value="09">Setembro</option>
        <option value="10">Outubro</option>
        <option value="11">Novembro</option>
        <option value="12">Dezembro</option>
     </select>
      /
      <select name="ano" class="input">
      	<option value="<?php echo $ano ?>"><?php echo $ano ?></option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
      </select>
    </td>
  </tr>
  <tr>
  	<th>Banner</th>
    <td>
        <input type="file" name="imagem1" id="imagem1" class="input">
        <input type="hidden" name="acao" value="imagem">
        <br>
        <?php
        if(isset($_GET['id'])){
        	echo "<div id='thumb_image'><img src='../imagemSite/thumb/thumb_$imagem'></div>";
		}
		?>
    </td>
  </tr>
  <tr>
  	<td colspan="2" align="center" class="titulo">
    	Descri&ccedil;&atilde;o
    </td>
  </tr>
  <tr>
    <td colspan="2">
     <?php
        include_once("include/fckeditor/fckeditor.php");
		$oFCKeditor = new FCKeditor('descricao');
		$oFCKeditor->BasePath = 'include/fckeditor/';
		$oFCKeditor->ToolbarSet	= 'Basic';
		$oFCKeditor->Value = $descricao ;
		$oFCKeditor->Create() ;
	?>
    </td>
  </tr>
  <tr>
    <td align="center" colspan="2"><input type="submit" value="Salvar" class="submit"></td>
  </tr>
</table>
</form>