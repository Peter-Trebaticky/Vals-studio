<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true); 
try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.hostcreators.sk'; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'objednavky@permanentny-makeup-piestany.sk'; 
    $mail->Password = 'RRza924U.-e-5.Ym'; 
    $mail->SMTPSecure = 'ssl'; 
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('objednavky@permanentny-makeup-piestany.sk');
    $mail->addReplyTo($_POST['email']);
    $mail->addAddress('vals.piestany@gmail.com'); //Prijmatel

    //Content
    $mail->isHTML(true);               
    $mail->Subject = 'VALS Objednávka';
    $emailMessage = "<p>VALS Studio - Lenka Šprochová</p>";
    $emailMessage .= "<p>Návštevník tvojej stránky ti posiela správu.</p>";
    $emailMessage .= "<p>Meno: " . $_POST['subjectFn'] . " " . $_POST['subjectLn'] . "</p>";
    $emailMessage .= "<p>E-mail: " . $_POST['email'] . "</p>";
    $emailMessage .= "<p>Telefón: " . $_POST['phoneN'] . "</p>";
    $emailMessage .= "<p>Správa: " . $_POST['message'] . "</p>";
    
    $mail->Body = $emailMessage;

    $mail->send();
    header("Location: ../index?mailStatus=success");
    exit();
} catch (Exception $e) {
    header("Location: ../index?mailStatus=error");
    exit();
    }

?>

