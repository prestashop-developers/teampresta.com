<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email address from the form
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Define the recipient email address
        $recipient = "info@apartner.pro";

        // Set the subject of the email
        $subject = "New subscription from your website";

        // Compose the email message
        $message = "You have a new subscriber with the email address: " . $email;
        $message .= '<a hreh="https://teampresta.com">TEAM PRESTA</a><br>';
        $message .= '<a hreh="https://apartner.pro">APARTNER.PRO</a><br>';

        // Set the headers for the email
        $headers = "From: " . $email . "\r\n" .
                "Reply-To: " . $email . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

        // Send the email
        if (mail($recipient, $subject, $message, $headers)) {
            // Email sent successfully
            echo "Thank you for subscribing!";
        } else {
            // Email sending failed
            echo "Oops! There was an error while subscribing. Please try again later.";
        }

        // Send the email
        if (mail($email, $subject, $message, $headers)) {
            // Email sent successfully
            //echo "Thank you for subscribing!";
        }

    } else {
        echo "Invalid email address.";
    }

} else {
    // Redirect users to the form page if they try to access this script directly
    header("Location: https://teampresta.com");
    exit();
}
?>
