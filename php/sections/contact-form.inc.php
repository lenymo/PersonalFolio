<?php
//
//---------------------------------
//	CONTACT FORM
//---------------------------------
//
function printContactForm($imagePath) {

?>
						<div class="col-1-2 col-offset-1-12 contact-form">
							<form id="ajax-contact" method="post" name="contact-form" action="php/core/mailer.php">
								<div class="form-group contact-names">
									<label for="firstname">
										Name
									</label>
									<input type="text" class="" id="firstname" name="firstname" placeholder="First Name" required />
									<input type="text" id="lastname" name="lastname" placeholder="Last Name" required />
									<!--
									<div class="alert">
										You must provide a first and last name.
									</div>
									-->
								</div>

								<div class="form-group contact-email">
									<label for="email">
										Your Email
									</label>
									<input type="email" id="email" name="email" placeholder="Email Address" />
								</div>

								<div class="form-group contact-topic">
									<label for="topic">
										I want to
									</label>
									<select id="topic" name="topic" required>
										<option value="Select your topic">Select your topic</option>
										<option value="Apply to the piano tuning school">Apply to the piano tuning school</option>
										<option value="Ask a question about the piano tuning school">Ask a question about the piano tuning school</option>
										<option value="Learn more about the piano tuning school">Learn more about the piano tuning school</option>
										<option value="Enquire about APT's piano tuning services">Enquire about APT's piano tuning services</option>
										<option value="Ask about something else...">Ask about something else...</option>
									</select>
								</div>

								<div class="form-group contact-message">
									<label for="message">
										Message
									</label>
									<textarea id="message" name="message" ></textarea>
								</div>

								<div id="form-messages" class="alert">
									<!-- Alert message goes here -->
								</div>

								<button type="submit" class="btn btn-large" onClick="return checkForm()">
									Send Message
								</button>
							</form>
						</div><!-- .contact-form -->
<?php
}		// End of printContactForm()
?>