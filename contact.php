<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = htmlspecialchars($_POST['nom']);
    $entreprise = htmlspecialchars($_POST['entreprise']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);

    $to = "f.bode@icaros-consulting.com";

    $subject = "Nouvelle demande depuis le site ICAROS Consulting";

    $body = "
Nouvelle demande de contact :

Nom : $nom

Entreprise : $entreprise

Email : $email

Telephone : $telephone

Sujet : $sujet

Message :
$message
";

    $headers = "From: noreply@icaros-consulting.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $body, $headers);

    header("Location: merci.html");
    exit();
}

?>
