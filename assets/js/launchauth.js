$( document ).ready(function() {
	var authority=false;
	$('#launchauth').on( "click", function(){
		if(authority){
			$(this).find('a').attr('href','../member/launch');
		}
		else{
			$(this).find('a').attr('href','../member/apply');
		}
	});

});
