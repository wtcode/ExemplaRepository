$(document).ready(function(){
    $("#bttOkNewsletter").click(function(){
        var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	var nome = document.getElementById("txtNomeNewsletter").value;
        var email = document.getElementById("txtEmailNewsletter").value;
        var padrao = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$";
        
        if (nome === "Seu nome" || email === "Seu email")
        {
            alert("Dados incorretos");
        }else if (nome === "" || email === "")
        {
            alert("Dados incorretos");
        }else if (padrao.test(email))
        {
            alert("Dados incorretos - regex");
            
        }
    });
});