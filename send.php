<?php

$email_to = "gianniballerini@gmail.com";
$email_subject = $_POST['mail'];
$email_message =  $_POST['datos'];


@mail($email_to, $email_subject, $email_message);

header("Location: ./enviado.php");
?>