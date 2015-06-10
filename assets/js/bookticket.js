
$( document ).ready(function() {



	/*
	for(var i = 0; i<4; i++){
		$('#seatareaA').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"A"+i+"</a></div>");
		$('#seatareaB').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"B"+i+"</a></div>");
		$('#seatareaC').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"C"+i+"</a></div>");
		$('#seatareaD').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"D"+i+"</a></div>");		
	}
	*/
	// for(var i = 0; i<4; i++){
	// 	$('#disemail').append("<label for='inputEmail' class='col-sm-2 control-label'>"+seatlists[i]+"</label><div class='col-sm-10'><input type='email' class='form-control' id='inputEmail' placeholder='請輸入Email'></div>");
	// }	
	// for(var i = 0; i<5; i++){
	// 	$('#activitycontainer').append("<button type='button' class='btn btn-default btn-lg btn-block'>"+activitylists[i]+"</button>");
	// }	
	// for(var i = 0; i<seatlists_distribute.length; i++){
	// 	$('#myseats').append("<div class='col-md-1 seat_distribute'><a href='javascript:;'>"+seatlists_distribute[i]+"</a></div>");
	// } 
	
	$(".ticketseatstyle td[class!='stage']").on( "click", function(){
		if($(this).css('background-color') =='rgb(255, 255, 255)'){
			$(this).css('background-color','rgb(190, 190, 190)');
			$(this).find('div').css('background-color','rgb(190, 190, 190)');
		}
		else{
			$(this).css('background-color','rgb(255, 255, 255)');
			$(this).find('div').css('background-color','rgb(255, 255, 255)');

		}
	});

	$('#ticketform #savechange').on( "click", function(){
		var seatlist=[];
		$('.ticketseatstyle td').each(function(){
			console.log($(this).css('background-color'));
			if($(this).css('background-color') =='rgb(190, 190, 190)'){
				seatlist.push($(this).find('div').text());
			}
		});
		console.log('seatlist',seatlist);
    	$('#ticketform #inputPosition').val(seatlist);
	});

	// $('#ticketform').submit(function(event){
	// 	event.preventDefault();
	// 	var email = $("#ticketform input#inputEmail").val();
	// 	var name = $("#ticketform input#inputName").val();
	// 	var phone = $("#ticketform input#inputPhone").val();
	// 	var seat = $("#ticketform input#inputPosition").val();
	// 	var donate;
	// 	$("#ticketform input[name='optionsRadios']").each(function() {		
	// 		if($(this).prop('checked'))
	// 			donate = $(this).val();
	// 	});
	// 	var bookinfor = {"email": email, "name": name, "phone": phone, "seat": seat, "donate": donate};
	//   	console.log('bookinfor',bookinfor);
	//   /*
	//   $.post("bookticket.php", bookinfor)
	// 	.done(function( data ) {
	// 		console.log( "Data Loaded: " , data );
	// 	});
	// */	
	// 	// window.location.href='/gardenii-eticket/index.php/member/distribute';
	// });
});
