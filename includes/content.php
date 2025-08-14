<?php
// Sayfa başlığı için varsayılan değer
$pageTitle = "Emre Sigorta Aracılık Hizmetleri";

// Geçerli sayfalar
$allowed_pages = [
    'anasayfa'     => ['file' => 'pages/home.php',     'title' => 'Anasayfa'],
    'hakkimizda'   => ['file' => 'pages/about.php',   'title' => 'Hakkımızda'],
    'hizmetler'    => ['file' => 'pages/services.php',    'title' => 'Hizmetlerimiz'],
    'iletisim'     => ['file' => 'pages/contact.php',     'title' => 'İletişim'],
    'error'     => ['file' => 'pages/error.php',     'title' => '404 Sayfa Bulunamadı'],
];

// GET ile gelen sayfa bilgisi
$page = isset($_GET['page']) ? preg_replace('/[^a-z0-9]/', '', strtolower($_GET['page'])) : 'anasayfa';


// Başlık belirleme
if (array_key_exists($page, $allowed_pages)) {
    $pageFile = $allowed_pages[$page]['file'];
    $pageTitle = $allowed_pages[$page]['title'] . " | Emre Sigorta";
} else {
    // 404 dosyasını yükle
    $pageFile = $allowed_pages['error']['file']; // yani pages/error.php
    $pageTitle = $allowed_pages['error']['title'] . " | Emre Sigorta";
    http_response_code(404); // Tarayıcıya gerçekten 404 olduğunu bildir
}
?>
