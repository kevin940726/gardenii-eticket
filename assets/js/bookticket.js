
$( document ).ready(function() {
	
	$(".ticketseatstyle td[class!='stage']").on( "click", function(){
		if($(this).css('background-color') =='rgb(255, 255, 255)'){
			$(this).css('background-color','rgb(190, 190, 190)');
			$(this).find('.seat_div').css('background-color','rgb(190, 190, 190)');
		}
		else if ($(this).css('background-color') == 'rgb(190, 190, 190)'){
			$(this).css('background-color','rgb(255, 255, 255)');
			$(this).find('.seat_div').css('background-color','rgb(255, 255, 255)');

		}
	});

	$('#ticketform #savechange').on( "click", function(){
		var seatlist=[];
		$('.ticketseatstyle td').each(function(){
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
