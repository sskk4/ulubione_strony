<?php



if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo '<div class="red alert"> Błąd podczas otwierania pliku. </div>';
}

if (isset($_GET['error']) && $_GET['error'] == 2) {
    echo '<div class="red alert"> Wprowadź poprawny adres URL. </div>';
}

if (isset($_GET['error']) && $_GET['error'] == 3) {
    echo '<div class="red alert"> Wprowadź pełny adres strony!  </div>';
}

if (isset($_GET['error']) && $_GET['error'] == 4) {
    echo '<div class="red alert"> Plik adresy_stron.txt jest niezapisywalny. </div>';
}

$filename = 'adresy_stron.txt';
if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $lines = array_reverse($lines);
    foreach ($lines as $line) {
        $parsedUrl = parse_url($line);
        $mainUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
        $showUrl = $parsedUrl['host'];
        echo '<div class="adresy">
                  <a href="' . $line . '" target="_blank" class="adresy_link">' . $showUrl . '</a>
                  <a href="index.php?delete=' . urlencode($line) . '" class="adresy_delete"> ---- </a>
              </div>';
    }
} else {
    echo '<div class="red alert"> Plik adresy_stron.txt nie istnieje. </div>';
}

?>