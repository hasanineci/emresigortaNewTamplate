<?php
// app/functions.php - BASİT VE GÜVENLİ

if (!function_exists('validatePage')) {
    function validatePage($page) {
        $allowed_pages = [
            'anasayfa', 'hakkimizda', 'trafik-sigortasi', 'kasko', 
            'ozel-saglik-sigortasi', 'tamamlayici-saglik-sigortasi', 
            'konut-dask-sigortasi', 'isyeri-sigortasi', 'seyahat-saglik-sigortasi',
            'nakliyat-sigortasi', '-ihtiyari-mali-mesuliyet-imm', 'cozum-ortaklarimiz',
            'blog-makaleler', 'sik-sorulan-sorular', 'rehberlik-klavuzlar', 
            'sigorta-terimler-sozlugu', 'hasar-bildirimi-ve-surecleri', 'iletisim', 'teklif-al'
        ];
        
        $page = trim($page);
        
        if (!in_array($page, $allowed_pages)) {
            return 'anasayfa';
        }
        
        return $page;
    }
}

if (!function_exists('safeHtml')) {
    function safeHtml($data) {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('safeUrl')) {
    /**
     * Güvenli URL oluşturma fonksiyonu
     */
    function safeUrl($page) {
        $allowed_pages = [
            'anasayfa', 'hakkimizda', 'trafik-sigortasi', 'kasko', 
            'ozel-saglik-sigortasi', 'tamamlayici-saglik-sigortasi', 
            'konut-dask-sigortasi', 'isyeri-sigortasi', 'seyahat-saglik-sigortasi',
            'nakliyat-sigortasi', '-ihtiyari-mali-mesuliyet-imm', 'cozum-ortaklarimiz',
            'blog-makaleler', 'sik-sorulan-sorular', 'rehberlik-klavuzlar', 
            'sigorta-terimler-sozlugu', 'hasar-bildirimi-ve-surecleri', 'iletisim', 'teklif-al'
        ];
        
        // Sayfayı doğrula
        if (!in_array($page, $allowed_pages)) {
            $page = 'anasayfa';
        }
        
        // URL encode uygula ve güvenli URL döndür
        return '?page=' . urlencode($page);
    }
}




if (!function_exists('generateCsrfToken')) {
    function generateCsrfToken() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = 'temp_token_' . time();
        }
        return $_SESSION['csrf_token'];
    }
}

if (!function_exists('setSecurityHeaders')) {
    function setSecurityHeaders() {
        if (!headers_sent()) {
            header("X-Frame-Options: SAMEORIGIN");
            header("X-Content-Type-Options: nosniff");
        }
    }
}

// ... Diğer fonksiyonlar (validateTeklifForm, sendTeklifEmail) aynı kalacak


// 404 sayfasına yönlendirme fonksiyonu
function redirectTo404() {
    if (!headers_sent()) {
        header('HTTP/1.0 404 Not Found');
    }
    include(__DIR__ . '/pages/error.php');
    exit();
}

// E-posta gönderme fonksiyonu
function sendTeklifEmail($formData) {
    $to = "info@emresigorta.com";
    $subject = "Yeni Sigorta Teklif Talebi - Emre Sigorta";
    
    $message = "
    <html>
    <head>
        <title>Yeni Sigorta Teklif Talebi</title>
    </head>
    <body>
        <h2>Yeni Sigorta Teklif Talebi</h2>
        <table border='1' cellpadding='10' cellspacing='0'>
            <tr><td><strong>Ad Soyad:</strong></td><td>{$formData['ad']} {$formData['soyad']}</td></tr>
            <tr><td><strong>Telefon:</strong></td><td>{$formData['telefon']}</td></tr>
            <tr><td><strong>E-posta:</strong></td><td>{$formData['email']}</td></tr>
            <tr><td><strong>Sigorta Türü:</strong></td><td>{$formData['sigorta_turu']}</td></tr>
            <tr><td><strong>Değer:</strong></td><td>{$formData['deger']}</td></tr>
            <tr><td><strong>Marka/Model:</strong></td><td>{$formData['marka_model']}</td></tr>
            <tr><td><strong>Model Yılı:</strong></td><td>{$formData['model_yili']}</td></tr>
            <tr><td><strong>Ek Bilgiler:</strong></td><td>{$formData['ek_bilgiler']}</td></tr>
            <tr><td><strong>İletişim Zamanı:</strong></td><td>" . date('d.m.Y H:i:s') . "</td></tr>
        </table>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Emre Sigorta <info@emresigorta.com>" . "\r\n";
    
    return mail($to, $subject, $message, $headers);
}

// Form doğrulama
function validateTeklifForm($data) {
    $errors = [];
    
    if (empty($data['ad']) || strlen($data['ad']) < 2) {
        $errors[] = "Ad en az 2 karakter olmalıdır.";
    }
    
    if (empty($data['soyad']) || strlen($data['soyad']) < 2) {
        $errors[] = "Soyad en az 2 karakter olmalıdır.";
    }
    
    if (empty($data['telefon']) || !preg_match('/^[0-9+\-\s()]{10,15}$/', $data['telefon'])) {
        $errors[] = "Geçerli bir telefon numarası giriniz.";
    }
    
    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Geçerli bir e-posta adresi giriniz.";
    }
    
    if (empty($data['sigorta_turu'])) {
        $errors[] = "Sigorta türü seçiniz.";
    }
    
    if (empty($data['kvkk'])) {
        $errors[] = "KVKK aydınlatma metnini kabul etmelisiniz.";
    }
    
    return $errors;
}
?>