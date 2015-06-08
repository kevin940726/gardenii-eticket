
$( document ).ready(function() {


	
	$('#resgisterform').submit(function(event){
		event.preventDefault();
		var email = $("#resgisterform input#inputEmailReg").val();
		var account = $("#resgisterform input#inputAccountReg").val();
		var password = $("#resgisterform input#inputPasswordReg").val();
		var confirmPassword = $("#resgisterform input#inputConfirmPasswordReg").val();
		var name = $("#resgisterform input#inputNameReg").val();

		if (password != confirmPassword){
			$('#inputConfirmPasswordReg').parent().parent().addClass('has-error');
		}
		else {
			$('#inputConfirmPasswordReg').parent().parent().removeClass('has-error');	
		}
		
		var infor = {'name':name, 'account':account,'password':password,'email':email};
		console.log(infor);	
		$.post( "/gardenii-eticket/index.php/member/register_handler", infor).done(function( data ) {
		  console.log(data);
		});
		/*
	  	$.post("bookticket.php", infor)
		.done(function( data ) {
			console.log( "Data Loaded: " , data );
			window.loaction.href='../main/index';
		});
		*/
	});


});
