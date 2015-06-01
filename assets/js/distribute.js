$( document ).ready(function() {

	$('#distributeform').submit(function(event){
		event.preventDefault();
		
	  /*
	  $.post("bookticket.php", infor)
		.done(function( data ) {
			console.log( "Data Loaded: " , data );
			window.loaction.href='../main/index';
		});
		*/
		//window.location.href='../main/index';

	});
});