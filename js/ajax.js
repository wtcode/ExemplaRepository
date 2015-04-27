$(document).ready(function(){
    $("#bttOkNewsletter").click(function(){
		var nome = document.getElementById("txtNomeNewsletter").value;
	    var email = document.getElementById("txtEmailNewsletter").value;
	    var padrao = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
	    
	    if (nome === "Seu nome" || email === "Seu email")
	    {
	        alert("Peeencha os dados corretamente!");
	    }
	    else if (nome === "" || email === "")
	    {
	        alert("Os campos não podem estar vazios!");
	    }
	    else if (!padrao.test(email))
	    {
	        alert("Informe um email válido!");
	        
	    }
	    //Caso os dados sejam válidos chama a função AJAX
	    else
	    {
	    	$.post("includes/newsletter_ajax.php",
			    {
			        n: nome,
			        e: email
			    },
			    function(data, status){
			        alert("Cadastro realizado com sucesso!");
		    });
	    }
    });
});