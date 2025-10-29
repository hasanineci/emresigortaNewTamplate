<?php
// Güvenlik fonksiyonlarını yükle - sadece bir kez yüklendiğinden emin ol
if (!function_exists('validatePage')) {
    require_once 'app/functions.php';
}

// page-settings.php ekleniyor
if (!defined('PAGE_SETTINGS_LOADED')) {
    require_once __DIR__ . './app/page-settings.php';
}

// HTTP güvenlik header'larını ayarla
setSecurityHeaders();

// Mevcut sayfayı güvenli şekilde al
$current_page = validatePage($_GET['page'] ?? 'anasayfa');

// Mevcut değişkenlerinizi koruyun
$page_active = $current_page;
$header_active = $current_page;
?>

<header id="header" class="header-transparent"
    data-plugin-options='{
        "stickyScrollUp": false,
        "stickyEnabled": true,
        "stickyEnableOnBoxed": true,
        "stickyEnableOnMobile": true,
        "stickyChangeLogo": true,
        "stickyStartAt": 1,
        "stickyHeaderContainerHeight": 72
    }'>

    <div class="header-body border-top-0 bg-quaternary box-shadow-none h-auto">
        <div class="header-container container p-static">
            <div class="header-row py-3 align-items-center">

                <!-- Logo -->
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="<?php echo safeUrl('anasayfa'); ?>"
                                title="<?php echo safeHtml('Emre Sigorta - Ana Sayfa'); ?>"
                                aria-label="<?php echo safeHtml('Emre Sigorta Logo'); ?>">
                                <img src="assets/img/logo/emre_sigorta_logo_beyaz.png"
                                    width="180" height="auto"
                                    alt="<?php echo safeHtml('Emre Sigorta Logo - Güvenilir Sigorta Hizmetleri'); ?>" />
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Navigation -->
                <div class="header-column justify-content-end">
                    <div class="header-row">

                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-text-capitalize header-nav-main-arrows">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link <?php echo ($current_page == 'anasayfa') ? 'active' : ''; ?>"
                                                href="<?php echo safeUrl('anasayfa'); ?>"
                                                title="<?php echo safeHtml('Anasayfa'); ?>">
                                                Anasayfa
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link <?php echo ($page_active == 'hakkimizda') ? 'active' : ''; ?>"
                                                href="<?php echo safeUrl('hakkimizda'); ?>"
                                                title="<?php echo safeHtml('Hakkımızda'); ?>">
                                                Hakkımızda
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle"
                                                href="#"
                                                title="<?php echo safeHtml('Sigorta Hizmetleri'); ?>">
                                                Sigorta Çözümleri
                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                $insurance_services = [
                                                    'trafik-sigortasi' => 'Trafik Sigortası',
                                                    'kasko' => 'Kasko Sigortası',
                                                    'ozel-saglik-sigortasi' => 'Özel Sağlık Sigortası',
                                                    'tamamlayici-saglik-sigortasi' => 'Tamamlayıcı Sağlık Sigortası',
                                                    'konut-dask-sigortasi' => 'Konut ve DASK Sigortası',
                                                    'isyeri-sigortasi' => 'İşyeri Sigortası',
                                                    'seyahat-saglik-sigortasi' => 'Seyahat Sağlık Sigortası',
                                                    'nakliyat-sigortasi' => 'Nakliyat Sigortası',
                                                    'ihtiyari-mali-mesuliyet-imm' => 'İhtiyari Mali Mesuliyet (İMM)'
                                                ];

                                                foreach ($insurance_services as $page => $title) {
                                                    echo '<li><a class="dropdown-item ' . (($current_page == $page) ? 'active' : '') . '"  href="' . safeUrl($page) . '" title="' . safeHtml($title) . '">' . safeHtml($title) . '</a></li>';
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link <?php echo ($page_active == 'cozum-ortaklarimiz') ? 'active' : ''; ?>"
                                                href="<?php echo safeUrl('cozum-ortaklarimiz'); ?>"
                                                title="<?php echo safeHtml('Çözüm Ortaklarımız'); ?>">
                                                Çözüm Ortaklarımız
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle <?php echo isActive(['blog-makaleleri', 'sik-sorulan-sorular', 'rehberlik-klavuzlar', 'sigorta-terimler-sozlugu', 'hasar-bildirimi-ve-surecleri'], $header_active); ?>"
                                                href="#"
                                                title="<?php echo safeHtml('Sigorta Bilgi Merkezi'); ?>">
                                                Bilgi Merkezi
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item <?php echo isActive('rehberlik-klavuzlar', $header_active); ?>" href="<?php echo safeUrl('rehberlik-klavuzlar'); ?>"
                                                        title="<?php echo safeHtml('Rehberlik ve Klavuzlar'); ?>"> Rehberlik & Klavuzlar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item <?php echo isActive('sik-sorulan-sorular', $header_active); ?>" href="<?php echo safeUrl('sik-sorulan-sorular'); ?>"
                                                        title="<?php echo safeHtml('Sıkça Sorulan Sorular'); ?>"> Sıkça Sorulan Sorular
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item <?php echo isActive('sigorta-terimler-sozlugu', $header_active); ?>" href="<?php echo safeUrl('sigorta-terimler-sozlugu'); ?>"
                                                        title="<?php echo safeHtml('Sigorta Terimler Sözlüğü'); ?>"> Sigorta Terimler Sözlüğü
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item <?php echo isActive('hasar-bildirimi-ve-surecleri', $header_active); ?>" href="<?php echo safeUrl('hasar-bildirimi-ve-surecleri'); ?>"
                                                        title="<?php echo safeHtml('Hasar Bildirimi ve Süreçleri'); ?>"> Hasar Bildirimi ve Süreçleri
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item <?php echo isActive('blog-makaleleri', $header_active); ?>" href="<?php echo safeUrl('blog-makaleler'); ?>"
                                                        title="<?php echo safeHtml('Blog Makaleleri'); ?>"> Blog Makaleleri
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link <?php echo ($page_active == 'iletisim') ? 'active' : ''; ?>" href="<?php echo safeUrl('iletisim'); ?>"
                                                title="<?php echo safeHtml('İletişim'); ?>"> İletişim
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- Teklif Al Button -->
                            <a class="btn btn-primary font-weight-semibold text-3 py-lg-3 px-lg-4 btn-gradient text-quaternary anim-hover-translate-top-5px transition-2ms ms-4"
                                href="<?php echo safeUrl('teklif-al'); ?>"
                                title="<?php echo safeHtml('Sigorta Teklifi Al'); ?>">
                                Teklif Al
                            </a>

                            <!-- Mobile Menu Button -->
                            <button class="btn header-btn-collapse-nav text-dark"
                                data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav"
                                aria-label="<?php echo safeHtml('Menüyü Aç'); ?>">
                                <i class="fas fa-bars"></i>
                            </button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>