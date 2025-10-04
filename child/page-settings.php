<?php

// Geçerli sayfalar
$allowed_pages = [
    'anasayfa'                => ['file' => 'pages/home.php',           'title' => 'Anasayfa'],
    'hakkimizda'              => ['file' => 'pages/about.php',          'title' => 'Hakkımızda'],
    'blog-makaleler'          => ['file' => 'pages/blog-makaleler.php', 'title' => 'Blog/Makaleler'],
    'sik-sorulan-sorular'     => ['file' => 'pages/sss.php',            'title' => 'Sıkça Sorulan Sorular'],
    'iletisim'                => ['file' => 'pages/contact.php',        'title' => 'İletişim'],
    'error'                   => ['file' => 'pages/error.php',          'title' => '404 Sayfa Bulunamadı'],
];

function sanitize_slug($slug) {
    // Türkçe karakterleri ASCII'ye dönüştür
    $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $slug);
    // Küçük harfe çevir
    $slug = strtolower($slug);
    // Geçersiz karakterleri temizle (sadece a-z, 0-9 ve tire izinli)
    $slug = preg_replace('/[^a-z0-9\-]/', '', $slug);
    return $slug;
}

function get_page_info($slug, $allowed_pages) {
    if (array_key_exists($slug, $allowed_pages)) {
        return [
            'file' => $allowed_pages[$slug]['file'],
            'title' => $allowed_pages[$slug]['title'] . ' | Emre Sigorta Aracılık Hizmetleri',
            'found' => true
        ];
    }

    // 404 sayfası
    http_response_code(404);
    return [
        'file' => $allowed_pages['error']['file'],
        'title' => $allowed_pages['error']['title'] . ' | Emre Sigorta Aracılık Hizmetleri',
        'found' => false
    ];
}

// GET ile gelen sayfa slug'ı
$raw_page = $_GET['page'] ?? 'anasayfa';
$slug = sanitize_slug($raw_page);

// Sayfa bilgilerini al
$pageInfo = get_page_info($slug, $allowed_pages);

// Sayfa başlığını ve dosyasını ayarla
$pageTitle = $pageInfo['title'];
$pageFile = $pageInfo['file'];




// breadcrumb ve header için aktif sayfa tanımı
$page_slug = isset($_GET['page']) ? $_GET['page'] : 'anasayfa';

switch ($page_slug) {
    case 'anasayfa':
        $page_title = 'Anasayfa';
        break;
    case 'hakkimizda':
        $page_title = 'Hakkımızda';
        break;
    case 'blog-makaleler':
        $page_title = 'Blog/Makaleler';
        break;
    case 'sik-sorulan-sorular':
        $page_title = 'Sıkça Sorulan Sorular';
        break;
    case 'iletisim':
        $page_title = 'İletişim';
        break;
    default:
        $page_title = 'Sayfa';
}



// 1. Menü tanımı ve gelen sayfayı header navbar da actif etme
$page_active = isset($_GET['page']) ? $_GET['page'] : 'anasayfa';

// 2. Menü tanımı ve gelen sayfayı header navbar da actif etme (dropdown için)
$header_active = isset($_GET['page']) ? $_GET['page'] : '';

function isActive($pages, $header_active) {
    if (is_array($pages)) {
        return in_array($header_active, $pages) ? 'active current-page-active' : '';
    }
    return $header_active === $pages ? 'active current-page-active' : '';
}


?>