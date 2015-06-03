$( document ).ready(function() {
	$('#inputTime').datetimepicker();
	
	$('#launchform').submit(function(event){
		event.preventDefault();
		var title = $("#launch input#inputTitle").val();
		var descript = $("#launch input#inputDescript").val();
		var time = $("#launch input#inputTime").val();
		var place = $("#launch input#inputPlace").val();
		var host = $("#launch input#inputHost").val();
		var pic = $("#launch input#inputPic").val();
		var website = $("#launch input#inputCome").val();


		var infor = {"title": title, "descript": descript, "time": time, "place": place, "host": host, "pic": pic, "website": website};
	  console.log('bookinfor',infor);
	  /*
	  $.post("bookticket.php", infor)
		.done(function( data ) {
			console.log( "Data Loaded: " , data );
		});
		*/
		//window.location.href='../main/index';

	});
});