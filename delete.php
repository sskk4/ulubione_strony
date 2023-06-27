<?php
if (isset($_GET['delete']) && $_GET['delete'] != '') {
    $deleteUrl = $_GET['delete'];

    // Usuwanie adresu z pliku
    $plik = 'adresy_stron.txt';

    if (is_writable($plik)) {
        $lines = file($plik);
        $newLines = array();

        foreach ($lines as $line) {
            if (trim($line) !== $deleteUrl) {
                $newLines[] = $line;
            }
        }

        file_put_contents($plik, implode('', $newLines));
        header('Location: index.php');
        exit();
    } else {
        header('Location: index.php?error=4');
    }
}
?>