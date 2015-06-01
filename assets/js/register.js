
$( document ).ready(function() {

	
	$('#resgisterform').submit(function(event){
		event.preventDefault();
		var email = $("#resgisterform input#inputEmail").val();
		var account = $("#resgisterform input#inputAccountReg").val();
		var password = $("#resgisterform input#inputPasswordReg").val();
		var name = $("#resgisterform input#inputNameReg").val();

		var infor = {'name':name, 'account':account,'password':password,'email':email};	
		/*
	  	$.post("bookticket.php", infor)
		.done(function( data ) {
			console.log( "Data Loaded: " , data );
			window.loaction.href='../main/index';
		});
		*/
	});


});
