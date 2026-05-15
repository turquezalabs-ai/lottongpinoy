<?php
// public/send_email.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize Inputs
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // 2. Validate Inputs
    if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete the form correctly.";
        exit;
    }

    // 3. Set Recipient (Your Email)
    $recipient = "support@lottong-pinoy.com";

    // 4. Set Email Subject
    $subject = "New Contact from Lottong Pinoy: $name";

    // 5. Build Email Content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // 6. Set Email Headers (FIXED)
    // IMPORTANT: The From address MUST be on your own domain
    $email_headers = "From: Lottong Pinoy <noreply@lottong-pinoy.com>\r\n";
    $email_headers .= "Reply-To: $name <$email>\r\n";
    // Optional: Set Content-Type for plain text
    $email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 7. Send Email
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong on the server.";
    }

} else {
    http_response_code(403);
    echo "There was a problem with your submission.";
}
?>