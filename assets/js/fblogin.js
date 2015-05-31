window.fbAsyncInit = function() {
    FB.init({
      appId      : '1458009167830285',
      xfbml      : true,
      version    : 'v2.3'
    });

 };

(function(d, s, id){
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
    });
 }

function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } 
    else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.

      	FB.login(function(response) {
	   		console.log(response);

	 	});
    } 
    else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      	FB.login(function(response) {
	   		console.log(response);
	 	});
    }
}

$( document ).ready(function() {
	$('#memberinfo').hide();
 	$('#login').on( "click", function(){
		console.log('login');
		var state = $(this).text();
		if(state == '登入'){
			FB.getLoginStatus(function(response) {
		    	statusChangeCallback(response);    	
	  		});
	  		$(this).text('登出');
			$('#memberinfo').show();
		}
		else{		
			$(this).text('登入');
    		$('#memberinfo').hide();
			FB.logout(function(response) {
				
    		});
    		
    		
			
		}
	});


});
