<?php

    // Načtění z formuláře, trim - odstraňuje bílé znaky, oddělává HTML - škodlivé JS
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Kontrola dat kdyžtak chybná adresa
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.autofine.eu/mailer-wrong.html?success=-1#form");
        exit;
    }

    // Můj email na který se to posílá 
    $recipient = "jakplu@seznam.cz";

    // Předmět emailu 
    $subject = "Zpráva od: $name";

    // Obsah emailu, který se posílá mně
    $email_content = "Jméno: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Zpráva:\n$message\n";

    // Emailová hlavička
    $email_headers = "From: $name <$email>";

    // Odeslání emailu 
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Přesměrování na stránku, pokud vše proběhlo v pořádku
    header("Location:http://www.autofine.eu/mailer.html?success=1#form");
?>
