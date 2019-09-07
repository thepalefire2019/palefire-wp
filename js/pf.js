
// Cookie Consent
$(document).ready(function() {

  	var ca = document.cookie.split(';');
  	var l = ca.length;
  	var x = "";

  	for (var i = 0; i < l; i++){
  		if (ca[i] == " pf_cookie_consent=") {
              ca[i] = "pf_cookie_consent=";
         }
  		if( ca[i] == 'pf_cookie_consent=' ){
  			x = ca[i];
  		}
  	}


  	if( x == "" ){
  		setTimeout(function() {
                  $('.cookie').show(1000);
              }, 5000);

  		$('#cookie-okay').click( function(){
  			$('.cookie').hide(1000);


  			var d = new Date();
		  	d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));
		  	var expires = d.toUTCString();
		  	document.cookie = "pf_cookie_consent=; expires=" + expires + "; path=/";
              
  		} );
  	}


});  //End of cookie consent