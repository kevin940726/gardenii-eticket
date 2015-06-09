$( document ).ready(function() {
	$('#inputTime').datetimepicker({
		format: 'DD/MM/YYYY HH:mm'
	});
	$('.seatstyle').on( "click", function(){
		console.log('hi');
		var seatchoice = $(this).attr('id');
		$('.seatstyle').each(function() {
		  $(this).css('background-color','rgb(240, 240, 240)');
		});

		$(this).css('background-color','rgb(190, 190, 190)');
		$('#inputSeat').val(seatchoice);
		
	});
	// $('#launchform').submit(function(event){
	// 	event.preventDefault();
	// 	var title = $("#launch input#inputTitle").val();
	// 	var descript = $("#launch input#inputDescript").val();
	// 	var time = $("#launch input#inputTime").val();
	// 	var place = $("#launch input#inputPlace").val();
	// 	var host = $("#launch input#inputHost").val();
	// 	var pic = $("#launch input#inputPic").val();
	// 	var website = $("#launch input#inputCome").val();


	// 	var infor = {"title": title, "descript": descript, "time": time, "place": place, "host": host, "pic": pic, "website": website};
	//   console.log('bookinfor',infor);
	//   /*
	//   $.post("bookticket.php", infor)
	// 	.done(function( data ) {
	// 		console.log( "Data Loaded: " , data );
	// 	});
	// 	*/
	// 	//window.location.href='../main/index';

	// });
});