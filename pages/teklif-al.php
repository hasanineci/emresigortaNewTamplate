<?php
$page_slug = 'teklif-al';
$active_page = 'teklif-al';
$page_description = 'Emre Sigorta ile sıfır araç, ikinci el araç veya mevcut aracınız için en uygun sigorta tekliflerini alın. Trafik sigortası ve kasko için uzman danışmanlık. 20+ sigorta şirketinden anında teklif.';
$page_keywords = 'sıfır araç sigortası, ikinci el araç sigortası, trafik sigortası teklifi, kasko teklifi, araç sigortası, sıfır araç kasko, ikinci el araç trafik sigortası, sigorta yenileme, araç sigorta teklifi, Emre Sigorta';

include __DIR__ . '/../child/breadcrumb.php';
?>

<!-- Hero Section -->
<section class="section section-height-4 bg-gradient-primary border-0 m-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="font-weight-bold text-color-light text-9 mb-3">ARAÇ SİGORTA TEKLİFİ ALIN</h1>
                <p class="text-5 text-color-light line-height-8 mb-5">
                    <strong>Emre Sigorta</strong> güvencesiyle, aracınız için <strong>en uygun sigorta çözümlerini</strong> keşfedin.
                    20'den fazla sigorta şirketinden saniyeler içinde teklif alın, <strong>%30'a varan tasarruf</strong> edin!
                </p>

                <!-- Hızlı İstatistikler -->
                <div class="row justify-content-center mb-5">
                    <div class="col-md-3 col-6 mb-4">
                        <div class="counter counter-lg">
                            <strong class="font-weight-bold text-color-light text-10">20+</strong>
                            <label class="text-color-light opacity-8">Sigorta Şirketi</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="counter counter-lg">
                            <strong class="font-weight-bold text-color-light text-10">10dk</strong>
                            <label class="text-color-light opacity-8">Hızlı Teklif</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="counter counter-lg">
                            <strong class="font-weight-bold text-color-light text-10">%30</strong>
                            <label class="text-color-light opacity-8">Tasarruf</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="counter counter-lg">
                            <strong class="font-weight-bold text-color-light text-10">7/24</strong>
                            <label class="text-color-light opacity-8">Uzman Destek</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sigorta Türü Seçim Section -->
<section class="section bg-light border-0 m-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center mb-5">
                <h2 class="font-weight-bold text-color-dark text-7 mb-3">SİGORTA TÜRÜNÜZÜ SEÇİN</h2>
                <p class="text-4 text-color-dark line-height-7 mb-0">
                    Aracınızın durumuna göre en uygun seçeneği belirleyin, size özel teklif formuna yönlendirileceksiniz.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Seçenek 1: Sıfır Araç -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-border card-border-top border-radius-0 h-100 card-hover-1">
                    <div class="card-body text-center p-5">
                        <i class="fas fa-car text-primary fa-4x mb-4"></i>
                        <h3 class="font-weight-bold text-color-dark text-5 mb-3">SIFIR ARAÇ ALIYORUM</h3>
                        <p class="text-3-5 text-color-dark line-height-7 mb-4">
                            Yeni aracınız için trafik sigortası ve kasko teklifi alın. En uygun fiyat garantisi!
                        </p>
                        <button type="button" class="btn btn-primary btn-modern btn-lg border-radius-0" onclick="showForm('sifirArac')">
                            TEKLİF AL <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Seçenek 2: Sigorta Yenileme -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-border card-border-top border-radius-0 h-100 card-hover-1">
                    <div class="card-body text-center p-5">
                        <i class="fas fa-sync-alt text-success fa-4x mb-4"></i>
                        <h3 class="font-weight-bold text-color-dark text-5 mb-3">SİGORTAM BİTİYOR</h3>
                        <p class="text-3-5 text-color-dark line-height-7 mb-4">
                            Mevcut aracınızın sigortasını yenileyin. 20+ şirketten anında karşılaştırın.
                        </p>
                        <button type="button" class="btn btn-success btn-modern btn-lg border-radius-0" onclick="showForm('sigortaYenileme')">
                            TEKLİF AL <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Seçenek 3: İkinci El Araç -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-border card-border-top border-radius-0 h-100 card-hover-1">
                    <div class="card-body text-center p-5">
                        <i class="fas fa-exchange-alt text-warning fa-4x mb-4"></i>
                        <h3 class="font-weight-bold text-color-dark text-5 mb-3">İKİNCİ EL ARAÇ ALIYORUM</h3>
                        <p class="text-3-5 text-color-dark line-height-7 mb-4">
                            İkinci el aracınızın sigorta devir işlemleri için teklif alın.
                        </p>
                        <button type="button" class="btn btn-warning btn-modern btn-lg border-radius-0" onclick="showForm('ikinciElArac')">
                            TEKLİF AL <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Section (Başlangıçta Gizli) -->
<section id="formSection" class="section bg-light border-0 m-0" style="display: none;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-radius-0 shadow-lg">
                    <div class="card-header bg-dark border-radius-0 py-4">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="font-weight-bold text-color-light text-6 mb-0" id="formTitle">
                                    SİGORTA TEKLİF FORMU
                                </h2>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-light btn-sm border-radius-0" onclick="hideForm()">
                                    <i class="fas fa-times me-2"></i> İptal
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-5">
                        <!-- Başarılı/Hata Mesajları -->
                        <?php if (!empty($form_success)): ?>
                            <div class="alert alert-success alert-dismissible fade show border-radius-0 mb-5" role="alert">
                                <i class="fas fa-check-circle me-2"></i>
                                <strong>Başarılı!</strong> <?php echo $form_success; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($form_error)): ?>
                            <div class="alert alert-danger alert-dismissible fade show border-radius-0 mb-5" role="alert">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <strong>Hata!</strong> <?php echo $form_error; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <!-- Ana Form -->
                        <form id="mainForm" class="contact-form" action="<?php echo safeUrl('teklif-al'); ?>" method="POST">
                            <input type="hidden" name="form_type" value="teklif_form">
                            <input type="hidden" name="sigorta_turu" id="hiddenSigortaTuru" value="">
                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">

                            <!-- Tüm Formlar için Ortak Kişisel Bilgiler -->
                            <div class="row mb-5">
                                <div class="col-12">
                                    <h4 class="font-weight-bold text-color-dark text-5 mb-4 border-bottom pb-3">
                                        <i class="fas fa-user-circle me-3 text-primary"></i>KİŞİSEL BİLGİLER
                                    </h4>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label text-color-dark font-weight-semibold">Adınız *</label>
                                    <input type="text" class="form-control border-radius-0 text-3 h-auto py-3" name="ad" placeholder="Adınız" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label text-color-dark font-weight-semibold">Soyadınız *</label>
                                    <input type="text" class="form-control border-radius-0 text-3 h-auto py-3" name="soyad" placeholder="Soyadınız" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label text-color-dark font-weight-semibold">TC Kimlik No *</label>
                                    <input type="text" class="form-control border-radius-0 text-3 h-auto py-3" name="tc_no" placeholder="TC Kimlik Numaranız" pattern="[0-9]{11}" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label text-color-dark font-weight-semibold">Doğum Tarihi *</label>
                                    <input type="date" class="form-control border-radius-0 text-3 h-auto py-3" name="dogum_tarihi" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label text-color-dark font-weight-semibold">Telefon *</label>
                                    <input type="tel" class="form-control border-radius-0 text-3 h-auto py-3" name="telefon" placeholder="5__ ___ __ __" pattern="[0-9]{10}" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label text-color-dark font-weight-semibold">E-posta *</label>
                                    <input type="email" class="form-control border-radius-0 text-3 h-auto py-3" name="email" placeholder="ornek@email.com" required>
                                </div>
                            </div>

                            <!-- Sıfır Araç Formu -->
                            <div id="sifirAracForm" class="form-section" style="display: none;">
                                <div class="row mb-5">
                                    <div class="col-12">
                                        <h4 class="font-weight-bold text-color-dark text-5 mb-4 border-bottom pb-3">
                                            <i class="fas fa-car me-3 text-primary"></i>YENİ ARAÇ BİLGİLERİ
                                        </h4>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Sigorta Türü *</label>
                                        <select class="form-control border-radius-0 text-3 h-auto py-3" name="sigorta_turu_sifir" required>
                                            <option value="">Seçiniz</option>
                                            <option value="trafik-sigortasi">Trafik Sigortası</option>
                                            <option value="kasko">Kasko Sigortası</option>
                                            <option value="trafik-ve-kasko">Trafik + Kasko Paketi</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">İkametgâh İli *</label>
                                        <select class="form-control border-radius-0 text-3 h-auto py-3" name="ikametgah_ili" id="ikametgah_ili" required>
                                            <option value="">İl Seçiniz</option>
                                            <!-- JavaScript ile doldurulacak -->
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Araç Markası *</label>
                                        <select class="form-control border-radius-0 text-3 h-auto py-3" name="arac_markasi" id="arac_markasi" required onchange="loadAracTipleri(this.value)">
                                            <option value="">Marka Seçiniz</option>
                                            <!-- JavaScript ile doldurulacak -->
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Araç Tipi *</label>
                                        <select class="form-control border-radius-0 text-3 h-auto py-3" name="arac_tipi" id="arac_tipi" required>
                                            <option value="">Önce marka seçiniz</option>
                                            <!-- JavaScript ile doldurulacak -->
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Model Yılı *</label>
                                        <select class="form-control border-radius-0 text-3 h-auto py-3" name="model_yili" required>
                                            <option value="">Yıl Seçiniz</option>
                                            <?php
                                            $current_year = date('Y');
                                            for ($year = $current_year + 1; $year >= 2020; $year--) {
                                                echo "<option value='{$year}'>{$year}</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Şasi No *</label>
                                        <input type="text" class="form-control border-radius-0 text-3 h-auto py-3" name="sasi_no" placeholder="17 haneli şasi numarası" pattern="[A-HJ-NPR-Z0-9]{17}" required>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Motor No *</label>
                                        <input type="text" class="form-control border-radius-0 text-3 h-auto py-3" name="motor_no" placeholder="Motor numarası" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Sigorta Yenileme Formu -->
                            <div id="sigortaYenilemeForm" class="form-section" style="display: none;">
                                <div class="row mb-5">
                                    <div class="col-12">
                                        <h4 class="font-weight-bold text-color-dark text-5 mb-4 border-bottom pb-3">
                                            <i class="fas fa-file-contract me-3 text-success"></i>ARAÇ BİLGİLERİ
                                        </h4>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Araç Plakası *</label>
                                        <input type="text" class="form-control border-radius-0 text-3 h-auto py-3" name="arac_plakasi" placeholder="34 ABC 123">
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Ruhsat Seri No *</label>
                                        <input type="text" class="form-control border-radius-0 text-3 h-auto py-3" name="ruhsat_no" placeholder="Ruhsat Seri Numarası">
                                    </div>
                                </div>
                            </div>

                            <!-- İkinci El Araç Formu -->
                            <div id="ikinciElAracForm" class="form-section" style="display: none;">
                                <div class="row mb-5">
                                    <div class="col-12">
                                        <h4 class="font-weight-bold text-color-dark text-5 mb-4 border-bottom pb-3">
                                            <i class="fas fa-users me-3 text-warning"></i>DEVRALACAK KİŞİ BİLGİLERİ
                                        </h4>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Devralacak Kişi TC No *</label>
                                        <input type="text" class="form-control border-radius-0 text-3 h-auto py-3" name="devir_tc_no" placeholder="TC Kimlik No">
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Devralacak Kişi Doğum Tarihi *</label>
                                        <input type="date" class="form-control border-radius-0 text-3 h-auto py-3" name="devir_dogum_tarihi">
                                    </div>

                                    <div class="col-12 mt-4">
                                        <h5 class="font-weight-bold text-color-dark text-4 mb-3 border-bottom pb-2">
                                            <i class="fas fa-car me-2 text-warning"></i>ARAÇ BİLGİLERİ
                                        </h5>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Araç Plakası *</label>
                                        <input type="text" class="form-control border-radius-0 text-3 h-auto py-3" name="devir_arac_plakasi" placeholder="34 ABC 123">
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label text-color-dark font-weight-semibold">Ruhsat Seri No *</label>
                                        <input type="text" class="form-control border-radius-0 text-3 h-auto py-3" name="devir_ruhsat_no" placeholder="Ruhsat Seri Numarası">
                                    </div>
                                </div>
                            </div>

                            <!-- Özel Notlar (Tüm Formlar için) -->
                            <div class="row mb-5">
                                <div class="col-12">
                                    <h4 class="font-weight-bold text-color-dark text-5 mb-4 border-bottom pb-3">
                                        <i class="fas fa-edit me-3 text-info"></i>ÖZEL NOTLAR
                                    </h4>
                                    <div class="form-group">
                                        <label class="form-label text-color-dark font-weight-semibold">Ek Bilgiler veya Özel İstekler</label>
                                        <textarea rows="4" class="form-control border-radius-0 text-3 h-auto py-3" name="ozel_notlar" placeholder="Sigorta ihtiyacınızla ilgili eklemek istediğiniz bilgiler, özel istekler veya sorularınız..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- KVKK -->
                            <div class="row mb-5">
                                <div class="col-12">
                                    <div class="form-check bg-light p-4 border-radius-0">
                                        <input class="form-check-input" type="checkbox" name="kvkk" id="kvkk" required>
                                        <label class="form-check-label text-color-dark font-weight-semibold" for="kvkk">
                                            <a href="<?php echo safeUrl('kvkk'); ?>" target="_blank" class="text-primary text-decoration-underline">KVKK Aydınlatma Metni</a>'ni okudum ve kabul ediyorum. Kişisel verilerimin işlenmesine onay veriyorum. *
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Gönder Butonu -->
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-modern btn-lg px-5 py-3 border-radius-0">
                                        <i class="fas fa-paper-plane me-3"></i>TEKLİFİ GÖNDER
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Güven Banner -->
<section class="section bg-dark border-0 m-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-center text-lg-start">
                <h3 class="font-weight-bold text-color-light text-5 mb-2">%100 GÜVENLİ İŞLEM</h3>
                <p class="text-color-light opacity-8 mb-0">Kişisel verileriniz 256-bit SSL sertifikası ile korunmaktadır.</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end mt-3 mt-lg-0">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto">
                        <i class="fas fa-shield-alt text-warning fa-3x me-3"></i>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-lock text-warning fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<<!-- JavaScript Dosyaları -->
<script src="assets/js/city.js"></script>
<script src="assets/js/car-model.js"></script>
<script src="assets/js/teklif-form.js"></script>

<script>
// Sayfa yüklendiğinde başlat
document.addEventListener('DOMContentLoaded', function() {
    // İlleri yükle
    cityManager.fillIller('ikametgah_ili');
    cityManager.setupIlArama('ikametgah_ili');
    
    // Markaları yükle
    carModelManager.fillMarkalar('arac_markasi');
    carModelManager.setupMarkaArama('arac_markasi');
    
    console.log('Teklif form sistemi başlatıldı');
});
</script>