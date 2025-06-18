<?php
$botToken = "123456789:7459290432:AAGwvnfEF25INBNrOKbT-dOiiaYmlQRvcWw";
$chatId = "7230121237";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['message']; 

    $text = urlencode("نظر جدید: " . $message);

    $url = "https://api.telegram.org/bot$7459290432:AAGwvnfEF25INBNrOKbT-dOiiaYmlQRvcWw/sendMessage?chat_id=$chatId&text=$text";

    file_get_contents($url);

    echo "نظر شما ارسال شد.";
}
?>
