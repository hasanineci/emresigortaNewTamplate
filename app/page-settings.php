<?php
// app/page-settings.php - FONKSİYON KONTROLLÜ VERSİYON

// Bu dosya zaten yüklendiyse çık
if (defined('PAGE_SETTINGS_LOADED')) {
    return;
}

define('PAGE_SETTINGS_LOADED', true);

// Hata gösterimi
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Güvenlik fonksiyonlarını yükle
if (!function_exists('validatePage')) {
    require_once __DIR__ . '/functions.php';
}

// Oturumu başlat
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Geçerli sayfalar
$allowed_pages = [
    'anasayfa'                      => ['file' => 'pages/home.php',                         'title' => 'Anasayfa'],
    'hakkimizda'                    => ['file' => 'pages/about.php',                        'title' => 'Hakkımızda'],
    'trafik-sigortasi'              => ['file' => 'pages/trafik-sigortasi.php',             'title' => 'Trafik Sigortası'],
    'kasko'                         => ['file' => 'pages/kasko.php',                        'title' => 'Kasko Sigortası'],
    'ozel-saglik-sigortasi'         => ['file' => 'pages/ozel-saglik-sigortasi.php',        'title' => 'Özel Sağlık Sigortası'],
    'tamamlayici-saglik-sigortasi'  => ['file' => 'pages/tamamlayici-saglik-sigortasi.php', 'title' => 'Tamamlayıcı Sağlık Sigortası'],
    'konut-dask-sigortasi'          => ['file' => 'pages/konut-dask-sigortasi.php',         'title' => 'Konut ve DASK Sigortası'],
    'isyeri-sigortasi'              => ['file' => 'pages/isyeri-sigortasi.php',             'title' => 'İşyeri Sigortası'],
    'seyahat-saglik-sigortasi'      => ['file' => 'pages/seyahat-saglik-sigortasi.php',     'title' => 'Seyahat Sağlık Sigortası'],
    'nakliyat-sigortasi'            => ['file' => 'pages/nakliyat-sigortasi.php',           'title' => 'Nakliyat Sigortası'],
    '-ihtiyari-mali-mesuliyet-imm'  => ['file' => 'pages/imm.php',                          'title' => 'İhtiyari Mali Mesuliyet (İMM)'],
    'cozum-ortaklarimiz'            => ['file' => 'pages/cozum-ortaklarimiz.php',           'title' => 'Çözüm Ortaklarımız'],
    'blog-makaleler'               => ['file' => 'pages/blog-makaleler.php',               'title' => 'Blog & Makaleler'],
    'sik-sorulan-sorular'           => ['file' => 'pages/sss.php',                          'title' => 'Sıkça Sorulan Sorular'],
    'rehberlik-klavuzlar'           => ['file' => 'pages/rehberlik-klavuzlar.php',          'title' => 'Rehberlik & Kılavuzlar'],
    'sigorta-terimler-sozlugu'      => ['file' => 'pages/sigorta-terimler-sozlugu.php',     'title' => 'Sigorta Terimler Sözlüğü'],
    'hasar-bildirimi-ve-surecleri'  => ['file' => 'pages/hasar-bildirimi-ve-surecleri.php', 'title' => 'Hasar Bildirimi ve Süreçleri'],
    'iletisim'                      => ['file' => 'pages/contact.php',                      'title' => 'İletişim'],
    'teklif-al'                     => ['file' => 'pages/teklif-al.php',                    'title' => 'Teklif Al']
];

// Fonksiyonlar sadece bir kez tanımlansın
if (!function_exists('getSecurePageInfo')) {
    /**
     * Sayfa bilgilerini güvenli şekilde getir
     */
    function getSecurePageInfo($slug, $allowed_pages) {
        // Slug doğrulama
        if (!preg_match('/^[a-z0-9\-]+$/', $slug)) {
            return getErrorPage();
        }
        
        if (array_key_exists($slug, $allowed_pages)) {
            // Dosya varlığını kontrol et
            $page_file = $allowed_pages[$slug]['file'];
            if (!file_exists($page_file) || !is_readable($page_file)) {
                error_log("Sayfa dosyası bulunamadı: " . $page_file);
                return getErrorPage();
            }
            
            return [
                'file' => $page_file,
                'title' => htmlspecialchars($allowed_pages[$slug]['title'] . ' | Emre Sigorta Aracılık Hizmetleri', ENT_QUOTES, 'UTF-8'),
                'found' => true,
                'slug' => $slug
            ];
        }

        return getErrorPage();
    }
}

if (!function_exists('getErrorPage')) {
    /**
     * 404 sayfası bilgilerini getir
     */
    function getErrorPage() {
        if (!headers_sent()) {
            header('HTTP/1.0 404 Not Found');
        }
        
        return [
            'file' => 'pages/error.php',
            'title' => htmlspecialchars('Sayfa Bulunamadı | Emre Sigorta Aracılık Hizmetleri', ENT_QUOTES, 'UTF-8'),
            'found' => false,
            'slug' => 'error'
        ];
    }
}

if (!function_exists('createSafeUrl')) {
    /**
     * Güvenli URL oluşturma
     */
    function createSafeUrl($page_slug) {
        global $allowed_pages;
        
        if (!array_key_exists($page_slug, $allowed_pages)) {
            $page_slug = 'anasayfa';
        }
        
        return '?page=' . urlencode($page_slug);
    }
}

if (!function_exists('getBreadcrumbTitle')) {
    /**
     * Breadcrumb başlık getirme
     */
    function getBreadcrumbTitle($slug) {
        $titles = [
            'anasayfa' => 'Anasayfa',
            'hakkimizda' => 'Hakkımızda',
            'trafik-sigortasi' => 'Trafik Sigortası',
            'kasko' => 'Kasko Sigortası',
            'ozel-saglik-sigortasi' => 'Özel Sağlık Sigortası',
            'tamamlayici-saglik-sigortasi' => 'Tamamlayıcı Sağlık Sigortası',
            'konut-dask-sigortasi' => 'Konut ve DASK Sigortası',
            'isyeri-sigortasi' => 'İşyeri Sigortası',
            'seyahat-saglik-sigortasi' => 'Seyahat Sağlık Sigortası',
            'nakliyat-sigortasi' => 'Nakliyat Sigortası',
            '-ihtiyari-mali-mesuliyet-imm' => 'İhtiyari Mali Mesuliyet (İMM)',
            'cozum-ortaklarimiz' => 'Çözüm Ortaklarımız',
            'blog-makaleler' => 'Blog & Makaleler',
            'sik-sorulan-sorular' => 'Sıkça Sorulan Sorular',
            'rehberlik-klavuzlar' => 'Rehberlik & Kılavuzlar',
            'sigorta-terimler-sozlugu' => 'Sigorta Terimler Sözlüğü',
            'hasar-bildirimi-ve-surecleri' => 'Hasar Bildirimi ve Süreçleri',
            'iletisim' => 'İletişim',
            'teklif-al' => 'Teklif Al'
        ];
        
        return $titles[$slug] ?? 'Sayfa';
    }
}

if (!function_exists('isActive')) {
    /**
     * Aktif sayfa kontrol fonksiyonu
     */
    function isActive($pages, $current_page) {
        if (is_array($pages)) {
            return in_array($current_page, $pages) ? 'active' : '';
        } else {
            return ($pages == $current_page) ? 'active' : '';
        }
    }
}

// === ANA İŞLEMLER ===

// GET parametresini güvenli şekilde al
$raw_page = $_GET['page'] ?? 'anasayfa';

// Sayfayı doğrula ve güvenli slug elde et
$secure_slug = validatePage($raw_page);

// Sayfa bilgilerini güvenli şekilde getir
$pageInfo = getSecurePageInfo($secure_slug, $allowed_pages);

// Global değişkenleri ayarla
$pageTitle = $pageInfo['title'];
$pageFile = $pageInfo['file'];
$page_slug = $pageInfo['slug'];

// Breadcrumb ve header için başlık
$page_title = getBreadcrumbTitle($page_slug);

// Menü aktif sayfa tanımları
$page_active = $page_slug;
$header_active = $page_slug;

// === FORM İŞLEMLERİ ===

// Teklif formu gönderildi mi kontrol et
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_type'])) {
    
    if ($_POST['form_type'] === 'teklif_form') {
        // CSRF kontrolü
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
            $_SESSION['form_error'] = 'Güvenlik hatası. Lütfen sayfayı yenileyin.';
        } else {
            // Form doğrulama
            $errors = validateTeklifForm($_POST);
            
            if (empty($errors)) {
                // E-posta gönder
                $emailSent = sendTeklifEmail($_POST);
                
                if ($emailSent) {
                    $_SESSION['form_success'] = 'Teşekkürler! Talebiniz alındı. En kısa sürede sizinle iletişime geçeceğiz.';
                } else {
                    $_SESSION['form_error'] = 'E-posta gönderilemedi. Lütfen telefonla iletişime geçin.';
                }
            } else {
                $_SESSION['form_error'] = implode('<br>', $errors);
            }
        }
        
        // Aynı sayfaya yönlendir (POST-REDIRECT-GET pattern)
        header('Location: ?page=' . urlencode($page_slug));
        exit;
    }
}

// Form mesajlarını session'dan al ve temizle
$form_success = $_SESSION['form_success'] ?? '';
$form_error = $_SESSION['form_error'] ?? '';
unset($_SESSION['form_success'], $_SESSION['form_error']);

// Yeni CSRF token oluştur (formlar için)
$csrf_token = generateCsrfToken();

?>