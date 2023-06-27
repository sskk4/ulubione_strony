<!DOCTYPE html>
<html>
<head>
    <title>::zapisywanie ulubionych stron internetowych</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="title">
        <a href="index.php" class="logo">zapisywanie ulubionych stron</a>
    </div>

    <div class="form_label">

        <div class="form">
            <form method="POST" action="save.php">
                <label class="text_title" for="adres">podaj adres strony</label><br>
                <input class="addres" type="url" id="adres" name="adres" required placeholder="wprowadź pełny adres strony (np. http://www.example.com)"><br><br>
                <input class="button_add" type="submit" value="+">
            </form>
        </div>

        <?php
  include 'show.php'; 
        ?>

<?php
include 'delete.php'; 
?>

    </div>

    <div class="footer">
        <p>Sebastian Kolański</p>
    </div>

</div>

</body>
</html>