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