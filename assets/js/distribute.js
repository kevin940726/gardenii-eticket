$( document ).ready(function() {
	$('#addemail').on( "click", function(){
		$('#distributeform').append("<div class='form-group' id='disbritueinput'><select class='form-control select' id='select' title='選擇區域'><option>A1</option><option>A2</option></select><div id='email'><input type='text' class='form-control floating-label' id='inputEmail' placeholder='請輸收票人Email'></div></div>");
	});
});