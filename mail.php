<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = 'lenkasprochova@gmail.com';

    $subjectFn = $_POST['subjectFn'];
    $subjectLn = $_POST['subjectLn'];
    $email = $_POST['email'];
    $phoneN = $_POST['phoneN'];
    $message = $_POST['message'];


    $headers = "From: $email" . "\r\n"; 
    $headers .= "Reply-To: $email" . "\r\n"; 
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $subject = 'VALS Objednávka';
    
    $emailMessage = "<p>VALS Studio - Lenka Šprochová</p>";
    $emailMessage .= "<p>Návštevník tvojej stránky ti posiela správu.</p>";
    $emailMessage .= "<p>Meno: $subjectFn $subjectLn</p>";
    $emailMessage .= "<p>E-mail: $email</p>";
    $emailMessage .= "<p>Telefón: $phoneN</p>";
    $emailMessage .= "<p>Správa: $message</p>";

    if (mail($to, $subject, $emailMessage, $headers)) {
        $_SESSION["mailStatus"] = "success";
    } else {
        $_SESSION["mailStatus"] = "error";
    }

    header("Location: ../index?mailStatus=" . $_SESSION["mailStatus"]);
    exit();
}
?>
