
$( document ).ready(function() {


	
	$('#registerform').submit(function(event){
		event.preventDefault();
		var email = $("#inputEmailReg").val();
		var account = $("#inputAccountReg").val();
		var password = $("#inputPasswordReg").val();
		var confirmPassword = $("#inputConfirmPasswordReg").val();
		var name = $("#inputNameReg").val();

		if (password != confirmPassword){
			$('#inputConfirmPasswordReg').parent().parent().addClass('has-error');
		}
		else {
			$('#inputConfirmPasswordReg').parent().parent().removeClass('has-error');	
		}
		
		var infor = {'name':name, 'account':account,'password':password,'email':email};
		console.log(infor);	
		$.post( "/gardenii-eticket/index.php/member/register_handler", infor).done(function( data ) {
			if(data=='YES'){
				$('#messagetext').text("註冊成功！");
				$('#register-dialog').modal('show');
				setTimeout(function() {
					window.location.href='/gardenii-eticket/index.php/main/index';
				}, 2000);
			}
			else{
				$('#messagetext').text("註冊失敗");
				$('#register-dialog').modal('show');
				setTimeout(function() {
					$('#register-dialog').modal('hide');
				}, 2000);
			}	  
		});
	
	});


});
