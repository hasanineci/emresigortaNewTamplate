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

<!DOCTYPE html>
<html lang="tr">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <meta name="description" content="Emre Sigorta Aracılık Hizmetleri - Güvenilir sigorta çözümleri. Trafik, kasko, konut, hayat ve sağlık sigortası hizmetleri.">
    <meta name="keywords" content="sigorta, trafik sigortası, konut sigortası, hayat sigortası, Emre Sigorta">
    <meta name="author" content="Emre Sigorta">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/theme-elements.css">
    <link rel="stylesheet" href="assets/css/theme-blog.css">
    <link rel="stylesheet" href="assets/css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="assets/css/demos/demo-creative-agency-2.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="assets/css/skins/skin-creative-agency-2.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
    <div class="body">



        <div role="main" class="main">


            <!-- Menü -->
            <?php include "includes/header.php"; ?>

            <!-- İçerik -->
            <?php include $pageFile; ?>

        </div>

        <!-- Footer -->
        <?php include "includes/footer.php"; ?>

    </div>

    <!-- Vendor -->
    <script src="assets/vendor/plugins/js/plugins.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="assets/js/theme.js"></script>

    <!-- Demo -->
    <script src="assets/js/demos/demo-creative-agency-2.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="assets/js/views/view.contact.js"></script>

    <!-- Theme Custom -->
    <script src="assets/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="assets/js/theme.init.js"></script>

</body>

</html>