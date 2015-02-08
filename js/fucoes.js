// JavaScript Document

//Faz trocr as fotos da  página detalhes.
$(function(){
	//Criamos um evento de click em todas tags img dentro do elemento com class "thumbs"
	$('.thumbs img').bind('click',trocaImagem);
	 
	/*Adicionados para parte 2*/
	//Criamos um evento de click nos input buttons para realizar a navegação
	$('input.botao').bind('click',navegaImagem);
});

function trocaImagem(){
	objClk = $(this);
	srcImg = objClk.attr('src');
	$('.imagem img').attr('src',srcImg);

}
 
/*Adicionados para parte 2*/
function navegaImagem(){
	objClk = $(this);
	totalFotos = $('.thumbs img').length;
	indexFoto = $('.thumbs img[src="'+$('.imagem img').attr('src')+'"]').index();
	 
	if(objClk.hasClass('anterior')){
		if(indexFoto == '0'){
			carregarFotoIndex = (totalFotos - 1);
		}else{
			carregarFotoIndex = (indexFoto - 1);
		}                    
	}
	 
	if(objClk.hasClass('proximo')){
		if(indexFoto == (totalFotos - 1)){
			carregarFotoIndex = '0';
		}else{
			carregarFotoIndex = (indexFoto + 1);
		}                    
	}
	 
	$('.thumbs img').eq(carregarFotoIndex).trigger('click');
}
//fim galeria página detalhes


// INICIO FIM DE MASCARAS PARA CAMPO INPUT

        function Mascara(o,f){
                v_obj=o
                v_fun=f
                setTimeout("execmascara()",1)
        }
        
        /*Função que Executa os objetos*/
        function execmascara(){
                v_obj.value=v_fun(v_obj.value)
        }
        
        /*Função que Determina as expressões regulares dos objetos*/
        function leech(v){
                v=v.replace(/o/gi,"0")
                v=v.replace(/i/gi,"1")
                v=v.replace(/z/gi,"2")
                v=v.replace(/e/gi,"3")
                v=v.replace(/a/gi,"4")
                v=v.replace(/s/gi,"5")
                v=v.replace(/t/gi,"7")
                return v
        }
        
        /*Função que permite apenas numeros*/
        function Integer(v){
                return v.replace(/\D/g,"")
        }
        
        /*Função que padroniza telefone (11) 4184-1241*/
        function Telefone(v){
                v=v.replace(/\D/g,"")                            
                v=v.replace(/^(\d\d)(\d)/g,"($1) $2") 
                v=v.replace(/(\d{4})(\d)/,"$1-$2")      
                return v
        }
        
        /*Função que padroniza telefone (11) 41841241*/
        function TelefoneCall(v){
                v=v.replace(/\D/g,"")                            
                v=v.replace(/^(\d\d)(\d)/g,"($1) $2")   
                return v
        }
        
        /*Função que padroniza CPF*/
        function Cpf(v){
                v=v.replace(/\D/g,"")                                   
                v=v.replace(/(\d{3})(\d)/,"$1.$2")         
                v=v.replace(/(\d{3})(\d)/,"$1.$2")         
                                                                                                 
                v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
 
                return v
        }
		
		/*Função que padroniza CEP*/
        function Cep(v){
                v=v.replace(/D/g,"")                            
                v=v.replace(/^(\d{5})(\d)/,"$1-$2") 
                return v
        }
		
		
		 /*Função que padroniza CNPJ*/
        function Cnpj(v){
                v=v.replace(/\D/g,"")                              
                v=v.replace(/^(\d{2})(\d)/,"$1.$2")      
                v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") 
                v=v.replace(/\.(\d{3})(\d)/,".$1/$2")              
                v=v.replace(/(\d{4})(\d)/,"$1-$2")                        
                return v
        }
		
		 function Data(v){
                v=v.replace(/\D/g,"") 
                v=v.replace(/(\d{2})(\d)/,"$1/$2") 
                v=v.replace(/(\d{2})(\d)/,"$1/$2") 
                return v
        }
        
        /*Função que padroniza DATA*/
        function Hora(v){
                v=v.replace(/\D/g,"") 
                v=v.replace(/(\d{2})(\d)/,"$1:$2")  
                return v
        }
        
        /*Função que padroniza valor monétario*/
        function Valor(v){
                v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
                v=v.replace(/^([0-9]{3}\.?){3}-[0-9]{2}$/,"$1.$2");
                //v=v.replace(/(\d{3})(\d)/g,"$1,$2")
                v=v.replace(/(\d)(\d{2})$/,"$1.$2") //Coloca ponto antes dos 2 últimos digitos
                return v
        }
		
//----FIM MASCARAS PARA CAMPOS INPUTS
