<?php
// Sprawdzenie, czy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobieranie danych z formularza
    $imie = test_input($_POST["imie"]);
    $nazwisko = test_input($_POST["nazwisko"]);
    $email = test_input($_POST["email"]);
    $wiadomosc = test_input($_POST["wiadomosc"]);

    // Wysłanie maila z formularzem
    $to = "mat_lan777@interia.pl"; 
    $subject = "Nowe zgłoszenie z formularza na stronie";
    $message = "Imię: " . $imie . "\n" .
               "Nazwisko: " . $nazwisko . "\n" .
               "E-mail: " . $email . "\n\n" .
               "Wiadomość:\n" . $wiadomosc;
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "Dziękujemy za wysłanie formularza. Skontaktujemy się z Tobą wkrótce!";
    } else {
        echo "Wystąpił błąd podczas wysyłania formularza. Spróbuj ponownie później.";
    }
}

// Funkcja do weryfikacji danych wejściowych z formularza
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>