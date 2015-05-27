
$( document ).ready(function() {
	var seatlists=['A1','A2','B1','B2'];
	for(var i = 0; i<4; i++){
		$('#seatareaA').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"A"+i+"</a></div>");
		$('#seatareaB').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"B"+i+"</a></div>");
		$('#seatareaC').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"C"+i+"</a></div>");
		$('#seatareaD').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"D"+i+"</a></div>");		
	}
	for(var i = 0; i<4; i++){
		$('#disemail').append("<label for='inputEmail' class='col-sm-2 control-label'>"+seatlists[i]+"</label><div class='col-sm-10'><input type='email' class='form-control' id='inputEmail' placeholder='請輸入Email'></div>");
	}	
	for(var i = 0; i<seatlists_distribute.length; i++){
		$('#myseats').append("<div class='col-md-1 seat_distribute'><a href='javascript:;'>"+seatlists_distribute[i]+"</a></div>");
	}    
	$('.seat').on( "click", function(){

		if(seatlists.indexOf($(this).text())>-1){
			$(this).css('background','white');
	    	seatlists.splice(seatlists.indexOf($(this).text()),1);
	    	console.log('seatlists',seatlists);		
	    	
	  } 
    else{
    	$(this).css('background','pink');
    	seatlists.push($(this).find('a').text());
    	console.log('seatlists',seatlists);
    }
	});

	$('#ticketform #savechange').on( "click", function(){
    	$('#ticketform #inputPosition').val(seatlists);
	});
	$('#ticketform').click(function(){
		var email = $("#ticketform input#inputEmail").val();
		var name = $("#ticketform input#inputName").val();
		var phone = $("#ticketform input#inputPhone").val();
		var seat = $("#ticketform input#inputPosition").val();
		var donate;
		$("#ticketform input[name='optionsRadios']").each(function() {		
			if($(this).prop('checked'))
				donate = $(this).val();
		});
		var bookinfor = {"email": email, "name": name, "phone": phone, "seat": seat, "donate": donate};
	  console.log('bookinfor',bookinfor);
	  
	  $.post("bookticket.php", bookinfor)
		.done(function( data ) {
			console.log( "Data Loaded: " , data );
		});
	
	});



});
