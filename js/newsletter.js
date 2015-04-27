// JavaScript Document

function teste()
{
	alert("Teste Newsletter1!");
}

function cadastra()
{
	
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	var nome = document.getElementById("txtNomeNewsletter").textContent;
        var email = document.getElementById("txtEmailNewsletter").textContent;
        
        alert(nome, email);
}

