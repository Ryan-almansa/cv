<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Destinataire de l'email
    $to = "ryan.almansa@mail.com";

    // Sujet de l'email
    $subject = "Message depuis le formulaire de contact";

    // Corps du message
    $body = "Nom : $name\n";
    $body .= "Email : $email\n";
    $body .= "Message : \n$message\n";

    // En-têtes
    $headers = "From: $email";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Message envoyé avec succès !</p>";
    } else {
        echo "<p>Une erreur est survenue. Veuillez réessayer plus tard.</p>";
    }
}
?>
