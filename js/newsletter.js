// JavaScript Document

function teste()
{
	alert("Teste Newsletter1!");
}

function cadastra()
{
	alert("Teste Newsletter1!");
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		//document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		
		alert("Teste Newsletter2!");
		
		
		}
	  }
	xmlhttp.open("GET","newsletter_ajax.php",true);
	xmlhttp.send();
}

