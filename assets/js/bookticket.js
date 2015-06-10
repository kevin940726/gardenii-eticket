
$( document ).ready(function() {
	
	$(".ticketseatstyle td[class!='stage']").on( "click", function(){
		if($(this).css('background-color') =='rgb(255, 255, 255)'){
			$(this).css('background-color','rgb(190, 190, 190)');
			$(this).find('div').css('background-color','rgb(190, 190, 190)');
		}
		else if ($(this).css('background-color') == 'rgb(190, 190, 190)'){
			$(this).css('background-color','rgb(255, 255, 255)');
			$(this).find('div').css('background-color','rgb(255, 255, 255)');

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

});
