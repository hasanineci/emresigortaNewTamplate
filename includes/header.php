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
                            <a href="?page=anasayfa" title="Emre Sigorta - Ana Sayfa" aria-label="Emre Sigorta Logo">
                                <img src="assets/img/logo/emre_sigorta_logo_beyaz.png" width="180" height="auto"
                                    alt="Emre Sigorta Logo - Güvenilir Sigorta Hizmetleri" />
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
                                        <li><a class="nav-link <?php echo ($page_active == 'anasayfa') ? 'active' : ''; ?>" href="?page=anasayfa" title="Anasayfa">Anasayfa</a></li>
                                        <li><a class="nav-link <?php echo ($page_active == 'hakkimizda') ? 'active' : ''; ?>" href="?page=hakkimizda" title="Hakkımızda">Hakkımızda</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#" title="Sigorta Hizmetleri">
                                                Sigorta Çözümleri
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="?page=trafik-sigortasi">Trafik Sigortası</a></li>
                                                <li><a class="dropdown-item" href="?page=kasko">Kasko Sigortası</a></li>
                                                <li><a class="dropdown-item" href="?page=ozel-saglik-sigortasi">Özel Sağlık Sigortası</a></li>
                                                <li><a class="dropdown-item" href="?page=tamamlayici-saglik-sigortasi">Tamamlayıcı Sağlık Sigortası</a></li>
                                                <li><a class="dropdown-item" href="?page=konut-dask-sigortasi">Konut ve DASK Sigortası</a></li>
                                                <li><a class="dropdown-item" href="?page=isyeri-sigortasi">İşyeri Sigortası</a></li>
                                                <li><a class="dropdown-item" href="?page=seyahat-saglik-sigortasi">Seyahat Sağlık Sigortası</a></li>
                                                <li><a class="dropdown-item" href="?page=nakliyat-sigortasi">Nakliyat Sigortası</a></li>
                                                <li><a class="dropdown-item" href="?page=-ihtiyari-mali-mesuliyet-imm">İhtiyari Mali Mesuliyet (İMM)</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="nav-link" href="?page=cozum-ortaklarimiz">Çözüm Ortaklarımız</a></li>
                                        <li><a class="nav-link" href="?page=musteri-deneyimleri">Müşteri Deneyimleri</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle <?php echo isActive(['blog-makaleleri','sik-sorulan-sorular','rehberlik-klavuzlar','sigorta-sozlugu','haberler-duyurular'], $header_active); ?>" href="#" title="Sigorta Bilgi Merkezi">
                                                Bilgi Merkezi
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item <?php echo isActive('blog-makaleleri', $header_active); ?>" href="?page=blog-makaleler">Blog Makaleleri</a></li>
                                                <li><a class="dropdown-item <?php echo isActive('sik-sorulan-sorular', $header_active); ?>" href="?page=sik-sorulan-sorular">Sıkça Sorulan Sorular</a></li>
                                                <li><a class="dropdown-item <?php echo isActive('rehberlik-klavuzlar', $header_active); ?>" href="?page=rehberlik-klavuzlar">Rehberlik & Klavuzlar</a></li>
                                                <li><a class="dropdown-item <?php echo isActive('sigorta-sozlugu', $header_active); ?>" href="?page=sigorta-sozlugu">Sigorta Sözlüğü</a></li>
                                                <li><a class="dropdown-item <?php echo isActive('haberler-duyurular', $header_active); ?>" href="?page=haberler-duyurular">Haberler & Duyurular</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="nav-link <?php echo ($page_active == 'iletisim') ? 'active' : ''; ?>" href="?page=iletisim">İletişim</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- Teklif Al Button -->
                            <a class="btn btn-primary font-weight-semibold text-3 py-lg-3 px-lg-4 btn-gradient text-quaternary anim-hover-translate-top-5px transition-2ms ms-4"
                                href="?page=teklif-al" title="Sigorta Teklifi Al">
                                Teklif Al
                            </a>

                            <!-- Mobile Menu Button -->
                            <button class="btn header-btn-collapse-nav text-dark" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav" aria-label="Menüyü Aç">
                                <i class="fas fa-bars"></i>
                            </button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>