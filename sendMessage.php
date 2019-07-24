<?php
    require("vendor/autoload.php");
    $dotenv = Dotenv\Dotenv::create("/var/www");
    $dotenv->load();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $subject = "New message from $name, $email";
    $to="contact@misterweb.dev";
    $headers="MIME_VERSION: 1.0 \r\n Content-type:text/html;charset=UTF-8 \r\n From: enquiry@misterweb.dev";

    $mail = new \SendGrid\Mail\Mail();
    $mail->setFrom("enquiry@misterweb.dev", "New Enquiry");
    $mail->setSubject($subject);
    $mail->addTo($to);
    $mail->addContent("text/plain", $message);

    $sendgrid = new \SendGrid(getenv("SENDGRID_KEY"));

    try {
        $response = $sendgrid->send($mail);
        echo $response;
        if($response == 202) {
            header("Location: https://misterweb.dev");
        }
    }
    catch(Exception $e) {
        echo $e->getMessage();
    }
?>