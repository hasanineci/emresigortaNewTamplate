<?php
$page_slug = 'iletisim';
$active_page = 'iletisim';
$page_description = 'Emre Sigorta ile iletişime geçin, uzmanlarımızdan ücretsiz danışmanlık ve size özel sigorta teklifleri alın. Hızlı iletişim ve güvenilir sigorta çözümleri için formu doldurun veya bizi arayın.';
$page_keywords = 'Emre Sigorta, İletişim, Sigorta Teklifi, Uzman Danışmanlık, Sigorta Formu, Şanlıurfa Sigorta, Telefon, E-posta, WhatsApp, Sigorta İletişim, Sigorta Destek, Sigorta Bilgi, Sigorta Hizmetleri';

include __DIR__ . '/../child/breadcrumb.php';
?>

<div class="py-5">
    <div class="container custom-padding-top-1 custom-padding-bottom-1 px-lg-5 bg-light">
        <div class="row px-lg-3">
            <div class="col">
                <p class="text-4-5 line-height-7 text-dark pb-1 mb-4 mb-lg-2 mb-xl-4">

                    Emre Sigorta Aracılık Hizmetleri olarak, hayatınızı ve sevdiklerinizi güvence altına alacak en doğru
                    <strong>sigorta çözümlerini</strong> sunmak için yanınızdayız. <strong> Oto trafik sigortası, kasko
                        sigortası, konut sigortası, sağlık ve hayat sigortası</strong> gibi tüm talepleriniz için bizimle kolayca
                    iletişime geçebilirsiniz. Hemen arayın, size en uygun poliçeyi birlikte oluşturalım.

                </p>
                <p class="text-4-5 line-height-7 text-dark pb-1 mb-4 mb-lg-2 mb-xl-4">
                    <strong>Emre Sigorta'ya Ulaşın: Hızlı Teklif, Uzman Destek.</strong> Kasko, trafik, sağlık, konut ve diğer tüm sigorta ihtiyaçlarınız için Emre Sigorta
                    uzmanlarından ücretsiz danışmanlık alın, size özel en uygun teklifleri öğrenin veya merak
                    ettiklerinizi sorun. Formu doldurun, güvenilir sigorta çözümlerimizle tanışın!
                </p>
            </div>
        </div>
        <div class="row px-lg-3 pb-2 mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="0">
                <div class="row">
                    <div class="col-auto">
                        <h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">BİZİ ARAYIN</h3>
                        <a href="tel:+905415148515" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5">
                            +90 541 514 85 15
                        </a>
                    </div>
                    <div class="col-auto">
                        <h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">E-POSTA GÖNDER</h3>
                        <a href="mailto:hasanineci@gmail.com" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5">
                            hasanineci@gmail.com
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1600">
                <h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">ADRES</h3>
                <span class="d-flex align-items-center text-color-dark font-weight-bold text-3-5">
                    Bamyasuyu Mah. Göbeklitepe Ticaret Merkezi B Blok No:2/38, Haliliye - Şanlıurfa
                </span>
            </div>
        </div>
        <div class="row px-lg-3">
            <div class="col-lg-6 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300">
                <h2 class="font-weight-bold text-color-dark text-6 mb-3">Bize Mesaj Gönderin</h2>
                <form class="contact-form form-style-3" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Başarılı!</strong> Mesajınız bize iletildi.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Hata!</strong> Mesajınız gönderilirken bir sorun oluştu.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="row">
                        <div class="form-group col mb-3-5">
                            <input type="text" value="" data-msg-required="Lütfen adınızı giriniz." maxlength="100" class="form-control text-3 h-auto py-3-5" name="name" placeholder="Adınız" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3-5">
                            <input type="email" value="" data-msg-required="Lütfen e-posta adresinizi giriniz." data-msg-email="Lütfen geçerli bir e-posta adresi giriniz." maxlength="100" class="form-control text-3 h-auto py-3-5" name="email" placeholder="E-posta Adresiniz" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3-5">
                            <input type="text" value="" data-msg-required="Lütfen konuyu giriniz." maxlength="100" class="form-control text-3 h-auto py-3-5" name="subject" placeholder="Konu" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3-5">
                            <textarea maxlength="5000" data-msg-required="Lütfen mesajınızı giriniz." rows="8" class="form-control text-3 h-auto py-3-5" name="message" placeholder="Mesajınız" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6 col">
                            <button type="submit" class="btn btn-modern btn-dark w-100 font-weight-semibold text-capitalize text-3 py-3 anim-hover-translate-top-5px transition-2ms mb-5 mb-lg-0"><span class="px-4 d-block ws-nowrap">Gönder <i class="fas fa-paper-plane ms-2"></i></span></button>
                        </div>
                        <div class="col-lg-6 col">
                            <!-- WhatsApp Butonu -->
                            <a href="https://wa.me/905415148515" target="_blank" class="btn btn-modern btn-dark w-100 font-weight-semibold text-capitalize text-3 py-3 anim-hover-translate-top-5px transition-2ms mb-5 mb-lg-0">
                                <span class="px-4 d-block ws-nowrap"> WhatsApp'tan Hızlıca Ulaşın <i class="fa-brands fa-whatsapp fa-lg"></i></span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1800">
                <h2 class="font-weight-bold text-color-dark text-6 mb-3">Neredeyiz</h2>
                <div id="googlemaps" class="google-map m-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1589.8389845184618!2d38.79591595520298!3d37.160356076747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153471cf33392c7f%3A0xcc83a3a671f41924!2sEmre%20Sigorta%20Arac%C4%B1l%C4%B1k%20Hizmetleri!5e0!3m2!1str!2str!4v1748771551275!5m2!1str!2str"
                        frameborder="0" style="border:0;" height="100%" width="100%" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>