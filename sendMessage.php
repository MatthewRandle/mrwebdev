<?php
    ini_set("session.save_path", "/var/lib/php/sessions");
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            require("vendor/autoload.php");
            $dotenv = Dotenv\Dotenv::create("/var/www");
            $dotenv->load();

            $name = $_POST["name"] ?? "No Name";
            $email = $_POST["email"] ?? "No Email";
            $message = $_POST["message"] ?? "No Message";
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
                print_r($response);
                if($response->statusCode() == 202) {
                    header("Location: /");
                    die();
                }
                else {
                    $_SESSION["contactError"] = true;
                    header("Location: /#form");
                    die();
                }
            }
            catch(Exception $e) {
                $_SESSION["contactError"] = true;
                header("Location: /#form");
                die();
            }
        ?>
    </body>
</html>