<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    ///sendemail/?seo=1
    //exit;





    // Get the email address from the form
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Define the recipient email address
        $recipient = "info@apartner.pro";

        // Set the subject of the email
        $subject = "New subscription from your website";

        // Compose the email message as HTML
        $message = '<html><body>';
        $message .= '<p><a href="https://teampresta.com"><img src="https://teampresta.com/img/logo-eye.png" alt="TEAM PRESTA"></a></p>';
        //$message .= '<p>You have a new subscriber with the email address: ' . $email . '</p>';
        $message .= '<p>You a subscriber with the email address: ' . $email . '</p>';
        $message .= '<a href="https://teampresta.com">TEAM PRESTA</a><br>';
        $message .= '<a href="https://apartner.pro">APARTNER.PRO</a><br>';
        $message .= '</body></html>';


        if($_GET['seo'] == 1) {
            $message = '<html><body>';
            $message .= '<p><a href="https://teampresta.com"><img src="https://teampresta.com/img/logo-eye.png" alt="TEAM PRESTA"></a></p>';
            $message .= '<p>You a subscriber with the email address: ' . $email . ' and send site to check seo</p>';
            $message .= '<a href="https://teampresta.com">TEAM PRESTA</a><br>';
            $message .= '<a href="https://apartner.pro">APARTNER.PRO</a><br>';
            $message .= '</body></html>';
        }


        // Set the headers for the email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: " . $recipient . "\r\n" .
                "Reply-To: " . $recipient . "\r\n" .
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
