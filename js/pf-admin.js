// ===========Portfolio Images =============

$(document).ready(function() {



	$( '#add-image-btn-1' ).click( function(e){
		e.preventDefault();

		var file_frame = wp.media.frames.file_frame = wp.media( {
	 		title: 'Select or Upload an Image',
	 		library: {
	 			type: 'image' //mime type
	 		},
	 		button: {
	 			text:'Select Image'
	 		},
	 		multiple: false
	 	} );

	 	file_frame.on('select', function(){
	 		var attachment = file_frame.state().get('selection').first().toJSON(); 
	 		$('#img_text_1').val(attachment.url);
	 		$('#img_1').attr( 'src', attachment.url );
	 	} );

	 	file_frame.open();

	} );


	$( '#add-image-btn-2' ).click( function(e){
		e.preventDefault();

		var file_frame = wp.media.frames.file_frame = wp.media( {
	 		title: 'Select or Upload an Image',
	 		library: {
	 			type: 'image' //mime type
	 		},
	 		button: {
	 			text:'Select Image'
	 		},
	 		multiple: false
	 	} );

	 	file_frame.on('select', function(){
	 		var attachment = file_frame.state().get('selection').first().toJSON(); 
	 		$('#img_text_2').val(attachment.url);
	 		$('#img_2').attr( 'src', attachment.url );
	 	} );

	 	file_frame.open();

	} );

	$( '#add-image-btn-3' ).click( function(e){
		e.preventDefault();

		var file_frame = wp.media.frames.file_frame = wp.media( {
	 		title: 'Select or Upload an Image',
	 		library: {
	 			type: 'image' //mime type
	 		},
	 		button: {
	 			text:'Select Image'
	 		},
	 		multiple: false
	 	} );

	 	file_frame.on('select', function(){
	 		var attachment = file_frame.state().get('selection').first().toJSON(); 
	 		$('#img_text_3').val(attachment.url);
	 		$('#img_3').attr( 'src', attachment.url );
	 	} );

	 	file_frame.open();

	} );

	$( '#add-image-btn-4' ).click( function(e){
		e.preventDefault();

		var file_frame = wp.media.frames.file_frame = wp.media( {
	 		title: 'Select or Upload an Image',
	 		library: {
	 			type: 'image' //mime type
	 		},
	 		button: {
	 			text:'Select Image'
	 		},
	 		multiple: false
	 	} );

	 	file_frame.on('select', function(){
	 		var attachment = file_frame.state().get('selection').first().toJSON(); 
	 		$('#img_text_4').val(attachment.url);
	 		$('#img_4').attr( 'src', attachment.url );
	 	} );

	 	file_frame.open();

	} );



});


// ===========Portfolio Images =============


jQuery(document).ready(function($){

	 var mediaUploader;
	 $('#upload-button').on('click',function(e){

	 	e.preventDefault();
	 	if(mediaUploader){
	 		mediaUploader.open();
	 		return;
	 	}

	 	mediaUploader = wp.media.frames.file_frame = wp.media({
	 		title :'Choose a Profile Picture', 
	 		button : {
	 			text : 'Choose Picture'
	 		},
	 		multiple : false
	 	});

	 	mediaUploader.on('select',function(){
	 		attachment = mediaUploader.state().get('selection').first().toJSON();
	 		$('#profile-picture').val(attachment.url);
	 		$('#profile-picture-preview').css('background-image','url('+attachment.url +')');
	 	});

	 	mediaUploader.open();
	 });

	 $( "#remove-picture").on('click',function(e){
	 	e.preventDefault();
	 	var answer = confirm("Are you sure you want to remove your profile picture?");
	 	
	 	if( answer==true){
	 		$('#profile-picture').val('');
	 		$('.tg-general-form').submit();
	 	}else{

	 	}
	 	return;
	 });
});



