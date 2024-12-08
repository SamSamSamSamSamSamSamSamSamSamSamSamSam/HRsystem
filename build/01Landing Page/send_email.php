<?php
// Include the Mailgun SDK
require '../../vendor/autoload.php'; // Assuming you have installed Mailgun via Composer

use Mailgun\Mailgun;

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    // Initialize Mailgun
    $mailgun = Mailgun::create('77b9fe1224397d0bf643233cf8daefc1-c02fd0ba-ceee6c80'); // Replace with your Mailgun API key

    $domain = 'sandboxf55495e702e74893a34790ca1129b1a3.mailgun.org'; // Replace with your Mailgun domain

    try {
        // Send the email
        $result = $mailgun->messages()->send($domain, [
            'from'    => 'HR System <mailgun@sandboxf55495e702e74893a34790ca1129b1a3.mailgun.org>', // Replace with your email
            'to'      => $to,
            'subject' => $subject,
            'text'    => $body
        ]);

        // Success
        echo "Email sent successfully!";
    } catch (\Mailgun\Exception\InvalidArgumentException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
