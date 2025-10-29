<?php include "app/page-settings.php"; ?>

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

    <!-- Font Awesome CDN - HEAD etiketine ekleyin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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

    <!-- Demo CSS -->
    <link rel="stylesheet" href="assets/css/demos/demo.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="assets/css/skins/skin-color.css">

    <!-- Social Media CSS -->
    <link rel="stylesheet" href="assets/css/social-media.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">


</head>

<body>
    <div class="body">



        <!-- Menü -->
        <?php include "includes/header.php"; ?>


        <div role="main" class="main">

            <!-- İçerik -->
            <?php include $pageFile; ?>

        </div>

        <!-- WhatsApp Çubuk -->
        <?php include "includes/social-media.php"; ?>

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