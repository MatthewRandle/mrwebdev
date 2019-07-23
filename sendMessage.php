<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $subject = "New message from $name, $email";
    $to="contact@misterweb.dev";
    $headers="MIME_VERSION: 1.0 \r\n Content-type:text/html;charset=UTF-8 \r\n From: enquiry@misterweb.dev";
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            if(isset($_POST["submit"])) {
                if(mail($to, $subject, $message, $headers)) {
                    echo "sent";
                }
                else {
                    echo "not sent";
                }
            }
            else {
                echo "No submit";
            }
        ?>
    </body>
</html>