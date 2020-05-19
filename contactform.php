<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "";
    $headers = "From : ".$mailFrom;
    $txt = "You have recieved a message from ".$name."\nPhone No. : ".$phone."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html/#contact");
}

?>