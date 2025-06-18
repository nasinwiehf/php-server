<?php
$botToken = "7459290432:AAGwvnfEF25INBNrOKbT-dOiiaYmlQRvcWw";
$chatId = "7230121237";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['message'] ?? ''; // افزودن ?? '' برای جلوگیری از خطای undefined

    // کدگذاری صحیح متن
    $text = urlencode("نظر جدید: " . $message);
    
    // ساخت صحیح URL با استفاده از متغیرها
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatId}&text={$text}";
    
    // ارسال با cURL (روش مطمئن‌تر)
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // بررسی پاسخ
    if ($httpCode == 200) {
        echo "نظر شما ارسال شد.";
    } else {
        echo "خطا در ارسال! کد خطا: " . $httpCode;
    }
}
?>
