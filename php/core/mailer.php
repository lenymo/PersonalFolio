<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $firstname = strip_tags(trim($_POST["firstname"]));
				$firstname = str_replace(array("\r","\n"),array(" "," "),$firstname);
        $lastname = strip_tags(trim($_POST["lastname"]));
                $lastname = str_replace(array("\r","\n"),array(" "," "),$lastname);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $topic = trim($_POST["topic"]);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($firstname) OR empty($lastname) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            header('X-PHP-Response-Code: 400', true, 400);
            echo "Oops! There was a problem with your submission. Please check the form and try again.";
            exit;
        }

        // Set the recipient email address.
        $recipient = "australasianpianotechnology@hotmail.com";

        // Set the email subject.
        $subject = "APT website enquiry from $firstname $lastname";

        // Build the email content.
        $email_content = "From: $firstname $lastname ($email)\n\n";
        $email_content .= "$firstname wants to: $topic\n\n";
        $email_content .= "$firstname says:\n--------------------\n\n";
        $email_content .= "$message\n\n";
        $email_content .= "--------------------\n\n";
        $email_content .= "This message was sent via the contact form at http://australasianpianotechnology.com.au/contact\n\n";


        // Build the email headers.
        $email_headers = "From: $firstname $lastname <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            //http_response_code(200);
            header('X-PHP-Response-Code: 200', true, 200);
            echo "Your message has been sent!";
        } else {
            // Set a 500 (internal server error) response code.
            //http_response_code(500);
            header('X-PHP-Response-Code: 500', true, 500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        //http_response_code(403);
        header('X-PHP-Response-Code: 403', true, 403);
        echo "There was a problem with your submission, please try again.";
    }

?>
