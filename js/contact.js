$(document).ready(function () {
var form = $("form");
var name = $("#name");
var email = $("#email");
var message = $("#message");

function validateName(){

	if(name.val().length < 3){
		name.css('border', '1px solid red').attr('placeholder', 'Введите Ваше имя');;
		return false;
	}
	else{
		name.css('border', '2px solid #99cc66').attr('placeholder', 'Ваше имя');;
		return true;
	}
}

function validateEmail(){
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var demail= email.attr("value");
	if(!regex.test(demail)){
  		email.css('border', '1px solid red').attr('placeholder', 'Введите Ваш email');
  		return false;
	}
	else{
		email.css('border', '2px solid #99cc66').attr('placeholder', 'Ваш email');
		return true;
	}
}

function validateMessage(){

	if(message.val().length < 10){
		message.css('border', '1px solid red').attr('placeholder', 'Введите текст Вашего сообщения');;
		return false;
	}
	else{			
		message.css('border', '2px solid #99cc66').attr('placeholder', 'Вашего сообщение');;
		return true;
	}
}

name.blur(validateName);
message.blur(validateMessage);
email.blur(validateEmail);

name.keyup(validateName);
email.keyup(validateEmail);
message.keyup(validateMessage);

$('#contact #submit').click(function(){
	if(validateName() && validateEmail() &&validateMessage()){
$('.feedback').css('border', '').text('').text('Ваше сообщение отправлено');
		return true;
	}
else{
	$('.feedback').css('border', '1px solid red').text('').text('Все поля должны быть заполнены');
		return false;

}
});
})