(function($){

	$(document).ready(function() {

		/* ---------------------------------------------- /*
		 * Contact form ajax
		/* ---------------------------------------------- */

		$('#contact-form').find('input,textarea').jqBootstrapValidation({
			preventSubmit: true,
			submitError: function($form, event, errors) {
				// additional error messages or events
			},
			submitSuccess: function($form, event) {
				event.preventDefault();

				var submit          = $('#contact-form submit');
				var ajaxResponse    = $('#contact-response');

				var name            = $("input#cname").val();
				var email           = $("input#cemail").val();
				var message         = $("textarea#cmessage").val();
				var _token          = $("input#_token").val();

				$.ajax({
					type: 'POST',
					url: '/email-sending',
					dataType: 'json',
					data: {
						name: name,
						email: email,
						message: message,
						_token:_token
					},
					cache: false,
					beforeSend: function(result) {
						submit.empty();
						submit.append('<i class="fa fa-cog fa-spin"></i> Wait...');
					},
					success: function(result) {
						if(result.sendstatus == 1) {
							$form.fadeOut(500, function(){
								ajaxResponse.hide();
								ajaxResponse.html(result.message);
								ajaxResponse.fadeIn(500);
							});
						} else {
							ajaxResponse.html(result.message);
						}
					}
				});
			}
		});

	});

})(jQuery);