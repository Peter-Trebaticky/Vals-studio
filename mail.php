<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subjectFn = $_POST['subjectFn'];
    $subjectLn = $_POST['subjectLn'];
    $email = $_POST['email'];
    $phoneN = $_POST['phoneN'];
    $message = $_POST['message'];

    $to = 'lenkasprochova@gmail.com';

    $subject = 'VALS Objednávka';
    $emailMessage = "Meno: $subjectFn $subjectLn\n";
    $emailMessage .= "E-mail: $email\n";
    $emailMessage .= "Telefón: $phoneN\n";
    $emailMessage .= "Správa: $message\n";

    $result = mail($to, $subject, $emailMessage);

     if ($result) {
        $_SESSION["mailStatus"] = "success";
    } else {
        $_SESSION["mailStatus"] = "error";
    }
    
    header("Location: ../index.html?mailStatus=" . $_SESSION["mailStatus"]);
    exit();
}
?>
