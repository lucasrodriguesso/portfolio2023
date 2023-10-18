<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Vous pouvez ajouter ici le code pour traiter les données, par exemple, envoyer un e-mail ou les enregistrer dans une base de données.

    // Exemple : envoi d'e-mail
    $to = "votre-email@example.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de contact de $firstname $lastname";
    $messageBody = "Nom: $firstname $lastname\n";
    $messageBody .= "Email: $email\n\n";
    $messageBody .= "Message:\n$message";

    mail($to, $subject, $messageBody);

    // Rediriger l'utilisateur vers une page de confirmation ou autre action souhaitée
    header("Location: confirmation.html"); // Remplacez par la page de confirmation que vous souhaitez utiliser
    exit();
}
?>