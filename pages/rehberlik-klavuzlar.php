<?php
$page_slug = 'rehberlik-klavuzlar';
$header_active = 'rehberlik-klavuzlar';
$active_page = 'rehberlik-klavuzlar';
$page_description = 'Sigorta rehberimiz ile trafik, kasko, sağlık, konut ve işyeri sigortaları hakkında temel bilgiler, poliçe seçimi ipuçları ve hasar süreçleri hakkında pratik, SEO uyumlu içeriklere ulaşabilirsiniz. Güvenilir sigorta tavsiyeleri ve karşılaştırmalar için rehberlik sayfamızı inceleyin.';
$page_keywords = 'sigorta rehberi, sigorta klavuzları, sigorta türleri, poliçe seçimi, hasar süreci, trafik sigortası, kasko sigortası, sağlık sigortası, konut sigortası, işyeri sigortası, DASK, seyahat sağlık sigortası, sigorta ipuçları, sigorta karşılaştırma, sigorta avantajları, sigorta bilgilendirme, sigorta tavsiyeleri, sigorta yenileme, sigorta eksper, sigorta başvuru, sigorta süreci, Emre Sigorta';

include __DIR__ . '/../child/breadcrumb-data-center.php';
?>


<?php include __DIR__ . '/../includes/layout-data-center-sidebar-header.php'; ?>



<section class="container py-5">
    <!-- Başlık / Hero -->
    <header class="text-center mb-5">
        <h1 class="display-4 font-weight-bold text-black">Sigorta Rehberi</h1>
        <p class="lead mx-auto" style="max-width:900px;">
            Emre Sigorta rehberiyle sigorta türlerini, poliçe seçiminde dikkat edilmesi gerekenleri ve hasar süreçlerini adım adım öğrenin.
            Trafik, kasko, sağlık, konut ve işyeri sigortaları hakkında kısa, net ve güvenilir bilgiler.
        </p>
    </header>

    <!-- Hızlı İçindekiler -->
    <div class="row mb-4">
        <div class="col">
            <nav aria-label="İçindekiler">
                <ul class="list-inline text-center">
                    <li class="list-inline-item mx-3"><a href="#neden-sigorta" class="font-weight-bold lead text-danger">Neden Sigorta?</a></li>
                    <li class="list-inline-item mx-3"><a href="#sigorta-turleri" class="font-weight-bold lead text-danger">Sigorta Türleri</a></li>
                    <li class="list-inline-item mx-3"><a href="#secim-rehberi" class="font-weight-bold lead text-danger">Poliçe Seçimi</a></li>
                    <li class="list-inline-item mx-3"><a href="#hasar" class="font-weight-bold lead text-danger">Hasar Süreci</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Neden Sigorta? -->
    <section id="neden-sigorta" class="mb-5">
        <h2 class="h4 font-weight-bold mb-3">Neden sigorta yaptırmalısınız?</h2>
        <p class="text-muted">
            Sigorta, beklenmedik olayların ekonomik etkilerini azaltır ve hem bireylerin hem de işletmelerin finansal güvenliğini sağlar.
            Doğru poliçe, acil durumlarda maddi kayıpları en aza indirir ve uzun vadede istikrar sağlar.
        </p>
        <hr class="divider-danger">
        
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="media ">
                    <span class="fa fa-shield-alt fa-4x text-danger py-3 px-5"></span>
                    <div class="media-body">
                        <h5 class="mb-1">Risk Yönetimi</h5>
                        <p class="mb-0 text-muted">Beklenmedik masraflara karşı korunma sağlar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <span class="fa fa-hands-helping fa-4x text-danger py-3 px-5"></span>
                    <div class="media-body">
                        <h5 class="mb-1">Sosyal Güvence</h5>
                        <p class="mb-0 text-muted">Talep halinde hızlı destek ve tazminat imkânı.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <span class="fa fa-dollar-sign fa-4x text-danger py-3 px-5"></span>
                    <div class="media-body">
                        <h5 class="mb-1">Maliyet Kontrolü</h5>
                        <p class="mb-0 text-muted">Bütçenizi sarsmayacak ödeme seçenekleriyle koruma.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sigorta Türleri -->
    <section id="sigorta-turleri" class="mb-5">
        <h2 class="h4 font-weight-bold mb-3">Öne çıkan sigorta türleri</h2>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><span class="fa fa-car text-danger px-2" aria-hidden="true"></span> Trafik Sigortası</h5>
                        <p class="card-text text-muted">Zorunlu trafik sigortası, üçüncü şahıslara verebileceğiniz zararları teminat altına alır. Kendi aracınızın hasarını kapsamaz — bunun için kasko gerekir.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><span class="fa fa-car-crash text-danger px-2" aria-hidden="true"></span> Kasko Sigortası</h5>
                        <p class="card-text text-muted">Kasko; çarpışma, çalınma, yangın, doğal afetler ve istem dışı zararları kapsayan isteğe bağlı bir sigortadır. Poliçe kapsamı şirketten şirkete değişir.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><span class="fa fa-user-md text-danger px-2" aria-hidden="true"></span> Özel & Tamamlayıcı Sağlık</h5>
                        <p class="card-text text-muted">Özel sağlık sigortası, sağlık hizmetleri maliyetlerini azaltır; tamamlayıcı sigortalar ise mevcut devlet sigortalarını destekler.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><span class="fa fa-home text-danger px-2" aria-hidden="true"></span> Konut & DASK</h5>
                        <p class="card-text text-muted">Konut sigortası evinizi ve eşyalarınızı; DASK ise deprem kaynaklı zorunlu teminatları kapsar. Her iki teminat birlikte değerlendirilmelidir.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><span class="fa fa-briefcase text-danger px-2" aria-hidden="true"></span> İşyeri Sigortası</h5>
                        <p class="card-text text-muted">İşyeri sigortaları yangın, hırsızlık, üçüncü şahıs sorumluluğu gibi teminatlarla işletmenizi korur.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><span class="fa fa-plane text-danger px-2" aria-hidden="true"></span> Seyahat Sağlık Sigortası</h5>
                        <p class="card-text text-muted">Yurt içi ve yurt dışı seyahatlerde tıbbi destek ve acil durum maliyetlerini karşılayacak poliçelerdir.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Poliçe Seçim Rehberi -->
    <section id="secim-rehberi" class="mb-5">
        <h2 class="h4 font-weight-bold mb-3">Poliçe seçiminde dikkat edilecekler</h2>
        <ol class="pl-3 text-muted">
            <li class="mb-2"><strong>Teminatları karşılaştırın:</strong> Aynı isimli poliçeler farklı şartlar içerebilir — teminat ve istisnaları dikkatle okuyun.</li>
            <li class="mb-2"><strong>Muafiyet ve limitleri kontrol edin:</strong> Poliçenin hangi durumlarda ödeme yapmayacağını ve limitlerini bilin.</li>
            <li class="mb-2"><strong>Ek teminatlara bakın:</strong> Hırsızlık, doğal afetler gibi ek teminatlara ihtiyaç olup olmadığını değerlendirin.</li>
            <li class="mb-2"><strong>Prim ve ödeme koşulları:</strong> Uygun prim kadar ödeme planı ve taksit seçenekleri de önemlidir.</li>
            <li class="mb-2"><strong>Sağlayıcı ve acente güvenilirliği:</strong> Hizmet kalitesi ve hasar yönetimi geçmişini araştırın.</li>
        </ol>

        <div class="alert alert-warning rounded mt-3" role="alert">
            <strong>İpucu:</strong> Birden fazla teklif alarak teminatları, primleri ve istisnaları tablo halinde karşılaştırın.
        </div>
    </section>

    <!-- Hasar Süreci -->
    <section id="hasar" class="mb-5">
        <h2 class="h4 font-weight-bold mb-3">Hasar bildirimi ve süreçleri</h2>
        <p class="text-muted">Hasar anında hızlı hareket etmek tazminat sürecinin hızlanmasını sağlar. Temel adımlar:</p>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="p-3 border rounded h-100">
                    <h5 class="h6">1. İlk Bildirim</h5>
                    <p class="mb-0 text-muted">Hasarı sigorta şirketine veya acente hattına hemen bildirin; eksiksiz bilgi verin.</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="p-3 border rounded h-100">
                    <h5 class="h6">2. Eksper Değerlendirmesi</h5>
                    <p class="mb-0 text-muted">Hasarın boyutu eksper tarafından tespit edilir; gerekli belgeler iletilir.</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="p-3 border rounded h-100">
                    <h5 class="h6">3. Tazminat ve Onarım</h5>
                    <p class="mb-0 text-muted">Eksper raporu sonrası tazminat ödemesi ya da onarım süreci başlar.</p>
                </div>
            </div>
        </div>
    </section>

</section>

<!-- FAQ structured data (JSON-LD) -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
                "@type": "Question",
                "name": "Poliçemi nasıl yenileyebilirim?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Poliçenizi online, çağrı merkezi veya acentemiz aracılığıyla yenileyebilirsiniz. Yenileme tarihinden önce teklif karşılaştırması yapmanızı öneririz."
                }
            },
            {
                "@type": "Question",
                "name": "Hasar durumunda ilk ne yapmalıyım?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Öncelikle güvenli bir yere çekin ve yetkililere haber verin. Ardından sigorta şirketinizi veya acentenizi arayarak hasarı bildirin ve talimatları takip edin."
                }
            },
            {
                "@type": "Question",
                "name": "Kasko ile trafik sigortası arasındaki fark nedir?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Trafik sigortası üçüncü şahıslara verilen zararları karşılayan zorunlu sigortadır; kasko ise aracın kendi zararlarını da teminat altına alan isteğe bağlı bir sigortadır."
                }
            }
        ]
    }
</script>







<?php include __DIR__ . '/../includes/layout-data-center-sidebar-footer.php'; ?>