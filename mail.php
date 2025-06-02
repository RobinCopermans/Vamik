<?php
// Ontvanger
$to = "robincopermans@gmail.com";

// Gegevens uit formulier
$naam = htmlspecialchars($_POST['naam']);
$bedrijf = htmlspecialchars($_POST['bedrijf']);
$email = htmlspecialchars($_POST['email']);
$telefoon = htmlspecialchars($_POST['telefoon']);
$bericht = htmlspecialchars($_POST['bericht']);

// Onderwerp en berichtinhoud
$subject = "Nieuw bericht via contactformulier";
$message = "Je hebt een nieuw bericht ontvangen:\n\n";
$message .= "Naam: $naam\n";
$message .= "Bedrijf: $bedrijf\n";
$message .= "E-mail: $email\n";
$message .= "Telefoon: $telefoon\n\n";
$message .= "Bericht:\n$bericht";

// Headers
$headers = "From: $email" . "\r\n" .
           "Reply-To: $email" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Verzend de mail
$mailSuccess = mail($to, $subject, $message, $headers);

// Optioneel: redirect of bevestiging
if ($mailSuccess) {
    echo "Bedankt! Je bericht is verzonden.";
    // header("Location: bedankt.html"); // eventueel doorsturen
} else {
    echo "Er is iets misgelopen. Probeer later opnieuw.";
}
?>
