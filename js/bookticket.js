
$( document ).ready(function() {
	var seatlists=[];
	var seatlists_distribute=['A1','B1','C1','D1'];
	var choice_distribute=[];
	var result_distribution=[];
	for(var i = 0; i<4; i++){
		$('#seatareaA').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"A"+i+"</a></div>");
		$('#seatareaB').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"B"+i+"</a></div>");
		$('#seatareaC').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"C"+i+"</a></div>");
		$('#seatareaD').append("<div class='col-md-1 seat'><a href='javascript:;'>"+"D"+i+"</a></div>");		
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
	$('#ticketform').submit(function(){
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

	$('.seat_distribute').on( "click", function(){
			$('.seat_distribute').each(function() {
				$(this).css('background','white');
			});
			$(this).css('background','pink');
			choice_distribute = $(this).text();

	});

	$('#distributeform #savechange').on( "click", function(){
		$('#distributeform #inputPosition').val(choice_distribute);
	});
	$('#distributeform').submit(function(){
		var email = $("#distributeform input#inputEmail").val();
		var name = $("#distributeform input#inputName").val();
		var phone = $("#distributeform input#inputPhone").val();
		var seat = $("#distributeform input#inputPosition").val();
		var distributeinfor = {"email": email, "name": name, "phone": phone, "seat": seat};
    //document.getElementByID('distributeresult').innerHtml+=seat;
    result_distribution.push({"name":name, "seat":seat});
    $('#distributeresult').text(result_distribution);

	  seatlists_distribute.splice(seatlists_distribute.indexOf(seat),1);
	  console.log('distributeinfor',distributeinfor);
	  console.log('seatlists_distribute',seatlists_distribute);
	  
	  $.post("distributeticket.php", distributeinfor)
		.done(function( data ) {
			console.log( "Data Loaded: " , data );
		});
	
	});	




});
