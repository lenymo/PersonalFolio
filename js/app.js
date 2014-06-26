$(function() {

	// Get the form.
	var form = $('#ajax-contact');

	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Trigger Google Analytics event.
		// ga('send', 'event', 'category', 'action', 'label');
		ga('send', 'event', 'contact', 'submit-form', 'contact-form');

		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})

		// If the message is successfully sent.
		.done(function(response) {
			// Make sure that the formMessages div has the 'alert-success' class.
			$(formMessages).removeClass('alert-error');
			$(formMessages).addClass('alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#firstname').val('');
			$('#lastname').val('');
			$('#email').val('');
			$('#message').val('');

			// Remove all alerts and errors from the form.
			$('.form-group .alert').removeClass('alert-error');
			$('.form-group .error').removeClass('error');

			// Trigger a Google Analytics even when the email is successfully send.
			ga('send', 'event', 'contact', 'send-successful', 'contact-form');
		})

		// If the message fails to send.
		.fail(function(data) {
			// Make sure that the formMessages div has the 'alert-error' class.
			$(formMessages).removeClass('alert-success');
			$(formMessages).addClass('alert-error');

			// Trigger a Google Analytics even when the email is fails send.
			ga('send', 'event', 'contact', 'send-fail', 'contact-form');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});
