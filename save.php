<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'] . "\n";
    file_put_contents('home.csv', $text, FILE_APPEND);
    echo "تم حفظ النص بنجاح!";
}
?>
