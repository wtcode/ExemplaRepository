<?php 
	include	("gapi.class.php");
	 
	// Autenticação
	$ga = new gapi('guilherme@gemape.com.br', 'Gg34334666');
	
	// ID do perfil do site
	$id = '48632027';
	
	// Define o periodo do relatório
	$inicio = date('Y-m-01', strtotime('-4 month')); // 1° dia do mês passado //'2010-08-01';
	$fim = date('Y-m-d'); // Último dia do mês passado
	
	$data_inicio_mostra = explode("-",$inicio);
	$data_final_mostra = explode("-",$fim);
		
	echo "<table width='400' border='0' cellspacing='0' cellpadding='0' class='tabela_form'>";
	echo "<tr>
    		<th colspan='3' class='titulo' align='center'>Visitas de: " .$data_inicio_mostra[2]."/".$data_inicio_mostra[1]."/".$data_inicio_mostra[0]." Até ". $data_final_mostra[2]."/".$data_final_mostra[1]."/".$data_final_mostra[0]."</th>
  		  </tr>";
	echo "<tr>
			<td width='30' class='titulo_grid'>Mes</td>	
		  	<td width='30' class='titulo_grid'>Visitas</td>
    	  	<td width='40' class='titulo_grid'>Exibições de página</td>
		  </tr>
		  ";
	  
	$teste = array('pageviews', 'visits');
	 
	// Busca os pageviews e visitas (total do mês passado)
	$ga->requestReportData($id, 'month',$teste , null, null, $inicio, $fim);
	foreach ($ga->getResults() as $dados) {	
		if($num % 2 == 1) {
		  $cor="#c4d8ea"; 
		  } else { 
		 	 $cor = "#e1eaff"; 
		  }
		    
		$num = $num + 1;
		echo "<tr  bgcolor=". $cor .">";	
		echo "<td class='tabela_visitas'> " .$dados . "</td><td class='tabela_visitas' > " . $dados->getVisits() . "</td><td class='tabela_visitas'>  " . $dados->getPageviews() . " </td>";
		echo "</tr>";
	}
	
	
	echo '</table>';
	
	// Define o periodo do relatório
	$inicio = '2010-08-01'; //pega total de visitas desde o inicio do site
	$fim = date('Y-m-d'); // Último dia do mês passado
	
	
	// Busca os pageviews e visitas (total do mês passado)
	$ga->requestReportData($id, 'month', array('pageviews', 'visits'), null, null, $inicio, $fim);
	foreach ($ga->getResults() as $dados) {
		$total = $dados->getVisits();
		$total_pageviews = $dados->getPageviews();
		
		$total_visualizacao = $total_visualizacao + $total_pageviews;
		$total_visitas = $total_visitas + $total;
		
		//echo 'Mês ' . $dados . ': ' . $dados->getVisits() . ' Visita(s) e ' . $dados->getPageviews() . ' Pageview(s)<br />';
	}
	echo "<div id='total_visitas'>";
	//echo "<strong><center>Visitas desde o Inicio do site</center></strong><br>";	
	echo "<strong>Total de Visitas:</strong> ".$total_visitas."<br>";
	echo "<strong>Exibições de página:</strong> ". $total_visualizacao;
	echo "</div>";
	
?>