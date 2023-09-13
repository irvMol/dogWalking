
<?php

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.phpenv');
// $dotenv->load();

chdir('vendor/phpmailer/phpmailer/src');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'SMTP.php';
require 'PHPMailer.php';
require 'Exception.php';





$nameSanitized = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$emailSanitized = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$messageSanitized = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);




// Validate $emailSanitized
if (!filter_var($emailSanitized, FILTER_VALIDATE_EMAIL) === false) {

      // Send a notification by email
      $submission = array(
        'message' => $messageSanitized,
        'name' => $nameSanitized,
        'email' => $emailSanitized
    );
      sendEmail($submission);
    }

else {
    echo ("$emailSanitized is not a valid email address");
  }


function sendEmail($submission) {

    //  $appEmail = "";
    $emailPassword = "";
    // $myPersonalEmail = "";
    $smtpHost = "smtppro.zoho.com";
    
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;

    $mail->isSMTP(true);
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $appEmail;
    $mail->Password = $emailPassword;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($appEmail, 'Front Range Dogs');
    $mail->addAddress($myPersonalEmail);
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'] .", loved by " . $_POST['name'];
    $mail->Body = '<html> '. $_POST['message'] . ' </html>';


     try {
         $mail->send();
         echo 0;
     } catch (Exception $e) {
        //  echo ("Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}");
         echo ("Your message could not be sent! This is an example template and our services are not real. we build websites :) );


      }
  }

?>

