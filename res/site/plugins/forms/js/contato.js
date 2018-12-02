function captchaCode() {
  var Numb1, Numb2, Numb3, Numb4, Code;     
  Numb1 = (Math.ceil(Math.random() * 10)-1).toString();
  Numb2 = (Math.ceil(Math.random() * 10)-1).toString();
  Numb3 = (Math.ceil(Math.random() * 10)-1).toString();
  Numb4 = (Math.ceil(Math.random() * 10)-1).toString();
  Code = Numb1 + Numb2 + Numb3 + Numb4;
  $("#captchaContato span").remove();
  $("#captchaContato input").remove();
  $("#retorna").val(Code);
  $("#captchaContato").append("<span id='code'>" + Code + "</span>");
}

function validac(){
  var valc = $("#retorna").val();
  var vald = $("#inputcaptchaContato").val();
  if(valc != vald){
  	alert("Captcha inválido ou incorreto, tente novamente!");
  	return false;}
  	return true;
}

$(function() {
	captchaCode();
  	$('#contactForm').submit(function(){var captchaVal = $("#code").text(); var captchaCode = $(".captcha").val();
	if (captchaVal == captchaCode) {$(".captchaContato");}
	else {$(".captchaContato");}
	var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,10})+$/;   
	var emailText = $(".email").val();
	if (emailFilter.test(emailText)) {$(".email");}
	else {$(".email");}
	var nameFilter = /^([a-zA-Z \t]{3,15})+$/;
	var nameText = $(".name").val();
	if (nameFilter.test(nameText)) {$(".name");}
	else {$(".name");}
	var messageText = $(".message").val().length;
	if (messageText > 50) {$(".message");}
	else {$(".message");}
	if ((captchaVal !== captchaCode) || (!emailFilter.test(emailText)) || (!nameFilter.test(nameText)) || (messageText < 50)) {return false;}
	if ((captchaVal == captchaCode) && (emailFilter.test(emailText)) && (nameFilter.test(nameText)) && (messageText > 50)) {
	$("#contactForm").css("display", "none");
	$("#form").append("<h2>Message sent!</h2>");
	return false;}});       
});

$("#enviarIndique").click(function(){
	var nome = $("#nome").val();
	var email = $("#email").val();
	var nomea = $("#nomea").val();
	var emaila = $("#emaila").val();
	var url = $("#url").val();
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if(filtro.test(email)&&filtro.test(emaila)&&nome!=""&&nomea!="")
         {
         	$.post("../site/noticias/indique/indiqueEnvia.php",{nome:nome,email:email,nomea:nomea,emaila:emaila,url:url}, function(data){
		        alert("Email enviado com sucesso!");
		        $("#indique").animate({
				    height: 'toggle'
				});
		    });
         }
}); 

$('#formContato').on('submit', function (e) {
	e.preventDefault();
	var dados = new FormData( this ); 
    var action = $(this).attr('action');
    $.ajax({
        type: "POST",
        dataType: "json",
        url: action,
        data: dados,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
        	$('body').block();
        },
        success: function( data ) {
        	$('body').unblock();
        	if(data.success == true) {
        		$('#formContato')[0].reset();
        		swal('Mensagem Enviada', 'Sua mensagem foi enviada com sucesso!', "success");
        	} else {
        		swal("Ops!", "Preencha os campos corretamente.", "error");
        	}
            //retornoAjax(data);
        },
        error: function( data ) {
        	$('body').unblock();
        	swal('Ops!', 'Preencha os campos corretamente.', "error");
        }
    });
})