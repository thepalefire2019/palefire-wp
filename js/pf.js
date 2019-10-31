
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

//palefire books menu

$(document).ready(function() {
  $('.bk-btn-menu').click(function(){

    $(this).addClass('bk-menu-active');
    if( $('.bk-btn-menu').hasClass('bk-menu-active') ){
      $('.bk-full-screen-menu').show("slide",{direction: "left"}, 1000);
    }
  });

  $('.bk-btn-menu-close').click(function(){

    if( $('.bk-btn-menu').hasClass('bk-menu-active') ){
      $('.bk-btn-menu').removeClass('bk-menu-active');
      $('.bk-full-screen-menu').hide("slide",{direcion:"right"},1000);
    }

    
  });

  
  
  // $('.bk-mobile-menu-btn').click( function(){
  //  $('.bk-mobile-menu').toggle( "slide",{direcion:"left"},800 );
  // } );
});
//palefire books menu


$(document).ready(function() {
  $('#product-search').click( function(){
    $('.bk-search').show("slide",{direction: "left"}, 1000);
    $('.bk-all-body').hide("slide",{direction: "left"}, 1000);

  } );
  $('#close-search').click( function(){
    $('.bk-search').hide("slide",{direcion:"right"},1000);
    $('.bk-all-body').show("slide",{direction: "left"}, 1000);
  } );
});