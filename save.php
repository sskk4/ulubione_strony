<?php
$adres = $_POST['adres'];

// Sprawdzenie poprawności adresu URL
if (preg_match('/^(https?:\/\/)?([a-z0-9-]+\.)+[a-z]{2,6}$/', $adres)) {
    // Jeśli nie ma protokołu, dodaj "http://"
    if (!preg_match('/^https?:\/\//', $adres)) {
        $adres = 'http://' . $adres;
    }

    // Adres jest poprawny, można go przetwarzać dalej
    $plik = 'adresy_stron.txt';

    if (is_writable($plik)) {
        $fp = fopen($plik, 'a');
        if ($fp) {
            flock($fp, LOCK_EX);
            fwrite($fp, $adres . "\n");
            flock($fp, LOCK_UN);
            fclose($fp);
            header('Location: index.php?');
            exit();
        } else {
            header('Location: index.php?error=1');
        }
    } else {
        header('Location: index.php?error=4');
    }
} else {
    header('Location: index.php?error=2');
}
?>