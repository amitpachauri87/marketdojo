jQuery(function($){
	// it is a copy of the inline edit function
	var wp_inline_edit_function = inlineEditPost.edit;

	// we overwrite the it with our own
	inlineEditPost.edit = function( post_id ) {

		// let's merge arguments of the original function
		wp_inline_edit_function.apply( this, arguments );

		// get the post ID from the argument
		var id = 0;
		if ( typeof( post_id ) == 'object' ) { // if it is object, get the ID number
			id = parseInt( this.getId( post_id ) );
		}

		//if post id exists
		if ( id > 0 ) {

			// add rows to variables
			var specific_post_edit_row = $( '#edit-' + id ),
			    specific_post_row = $( '#post-' + id ),
			    host_participant = false,
          host = false,
          participant = false; // let's say by default checkbox is unchecked
			// check if the Featured Product column says Yes
			if( $( '.column-resource_type .host_participant', specific_post_row ).text() == 'host_participant' ) host_participant = true;
      if( $( '.column-resource_type .host', specific_post_row ).text() == 'host' ) host = true;
      if( $( '.column-resource_type .participant', specific_post_row ).text() == 'participant' ) participant = true;

			// populate the inputs with column data
			$( ':input[value="host_participant"]', specific_post_edit_row ).prop('checked', host_participant );
      $( ':input[value="host"]', specific_post_edit_row ).prop('checked', host );
      $( ':input[value="participant"]', specific_post_edit_row ).prop('checked', participant );
		}
	}
});
jQuery(function($){
	$( 'body' ).on( 'click', 'input[name="bulk_edit"]', function() {

		// let's add the WordPress default spinner just before the button
		$( this ).after('<span class="spinner is-active"></span>');


		// define: prices, featured products and the bulk edit table row
		var bulk_edit_row = $( 'tr#bulk-edit' ),
		    post_ids = new Array()
		    /*host_participant = bulk_edit_row.find( 'input[value="host_participant"]' ).attr('checked') ? 1 : 0,
        host = bulk_edit_row.find( 'input[value="host"]' ).attr('checked') ? 1 : 0,
        participant = bulk_edit_row.find( 'input[value="participant"]' ).attr('checked') ? 1 : 0;
        alert();*/

		// now we have to obtain the post IDs selected for bulk edit
		bulk_edit_row.find( '#bulk-titles' ).children().each( function() {
			post_ids.push( $( this ).attr( 'id' ).replace( /^(ttle)/i, '' ) );
		});
    var val = [];
    bulk_edit_row.find( 'input[name="resource_detail_val[]"]:checked' ).each(function(i){
      val[i] = $(this).val();
    });

		// save the data with AJAX
		$.ajax({
			url: ajaxurl, // WordPress has already defined the AJAX url for us (at least in admin area)
			type: 'POST',
			async: false,
			cache: false,
			data: {
				action: 'misha_save_bulk', // wp_ajax action hook
				post_ids: post_ids, // array of post IDs
				resource_detail_val: val, // new value for product featured
				nonce: $('#misha_nonce').val() // I take the nonce from hidden #misha_nonce field
			}
		});
	});
});

