import "./ap-survey-for-gravityforms-public.scss"

(function( $ ) {
	'use strict';

	$( document ).ready(function() {
		$( ".ap-survey-for-gf_wrapper" ).each(function( index ) {
			var thisElHTML = $(this).find(".ap-survey-conditional");
			var thisElSubmit = $(this).find(".gform_footer");
			$( thisElHTML ).appendTo( thisElSubmit );
		});

		$( ".ap-survey-conditional" ).on( "change", function( element ) {

			var thisElChecker = $(this).find(".gfield-choice-input");
			if (thisElChecker.prop('checked')) {
				$(this).addClass("opened");
				$(this).parent().find(".gform_button").val("submit");
			} else {
				$(this).removeClass("opened")
			}

		});

		$( document ).bind( 'gform_post_render', function() {
			var $surveyHasError = $( 'fieldset.gfield_error' );
			if( $surveyHasError.length > 0 ) {
				$( ".ap-survey-for-gf_wrapper" ).each(function( index ) {
					var thisElHTML = $(this).find(".ap-survey-conditional");
					var thisElSubmit = $(this).find(".gform_footer");
					$( thisElHTML ).appendTo( thisElSubmit );
				});
			}
		} );

	});


})( jQuery );