<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jehovasalez123@gmail.com';
        $mail->Password = 'axcqmfdlmuupxkjg';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('jehovasalez123@gmail.com', 'BoluxCode');
        $mail->addAddress($to);

        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        echo 'Message sent!';
    } catch (Exception $e) {
    echo 'Message could not be sent. Try again later: ' . $mail->ErrorInfo;
    echo 'Error message: ' . $e->getMessage();
}

}

?>
