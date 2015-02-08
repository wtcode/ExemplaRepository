<?php
	// Pega o total de visitas únicas de hoje
	$total_unicas_hj = pegaVisitas();
	 
	// Pega o total de visitas únicas desde o começo do mês
	$total_unicas_mes = pegaVisitas('uniques', 'mes');
	 
	// Pega o total de visitas únicas desde o começo do ano
	$total_unicas_ano = pegaVisitas('uniques', 'ano');
	 
	// Pega o total de pageviews de hoje
	$total_hj = pegaVisitas('pageviews');
	 
	// Pega o total de pageviews desde o começo do mês
	$total_mes = pegaVisitas('pageviews', 'mes');
	 
	// Pega o total de pageviews desde o começo do ano
	$total_ano = pegaVisitas('pageviews', 'ano');
	
	echo "Quantidade de acessos hoje".$total_unicas_hj."<br>";
	echo "Acessos este mes: ".$total_mes."<br>";
	echo "Total de acessos".$total_ano
?>