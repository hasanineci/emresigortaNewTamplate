<?php
$page_slug = 'sigorta-terimler-sozlugu';
$header_active = 'sigorta-terimler-sozlugu';
$active_page = 'sigorta-terimler-sozlugu';
$page_description = 'Sigorta terimleri sözlüğü ile poliçe, prim, teminat, hasar, muafiyet ve riziko gibi sigorta dünyasında sıkça karşılaşılan kavramların sade ve anlaşılır açıklamalarına ulaşabilirsiniz. Sigorta süreçlerini daha iyi anlamak ve bilinçli kararlar almak için terimlerin anlamlarını keşfedin.';
$page_keywords = 'sigorta süreci, Emre Sigorta, poliçe, prim, teminat, hasar, muafiyet, riziko, sigorta terimleri, sigorta sözlüğü';

include __DIR__ . '/../child/breadcrumb-data-center.php';
?>


<?php include __DIR__ . '/../includes/layout-data-center-sidebar-header.php'; ?>


<!-- HEADER -->
<header class="text-center py-5 bg-white shadow-sm">
    <div class="container">
        <h1 class="font-weight-bold text-danger">Sigorta Terimleri Sözlüğü</h1>
        <p class="lead text-muted">
            Sigorta dünyasında sıkça kullanılan kavramların sade açıklamaları.
            Poliçe, Prim, Teminat, Hasar ve daha fazlasını kolayca öğrenin.
        </p>
    </div>
</header>

<!-- MAIN CONTENT -->
<main class="container my-5 py-5">
    <div class="row">

        <!-- Poliçe -->
        <div class="col-md-6 col-lg-4 mb-4">
            <article class="card h-100">
                <div class="card-body">
                    <h2 class="card-title h5 text-danger">Poliçe</h2>
                    <p class="card-text">
                        Sigorta sözleşmesini belgeleyen resmi dokümandır.
                        Sigortacı ile sigortalı arasındaki hak ve yükümlülükleri belirler.
                    </p>
                </div>
            </article>
        </div>

        <!-- Teminat -->
        <div class="col-md-6 col-lg-4 mb-4">
            <article class="card h-100">
                <div class="card-body">
                    <h2 class="card-title h5 text-danger">Teminat</h2>
                    <p class="card-text">
                        Sigortacının, poliçede belirtilen risklerin gerçekleşmesi durumunda tazminat ödeme güvencesini ifade eder.
                    </p>
                </div>
            </article>
        </div>

        <!-- Prim -->
        <div class="col-md-6 col-lg-4 mb-4">
            <article class="card h-100">
                <div class="card-body">
                    <h2 class="card-title h5 text-danger">Prim</h2>
                    <p class="card-text">
                        Sigorta koruması karşılığında sigortalı tarafından sigorta şirketine ödenen bedeldir.
                    </p>
                </div>
            </article>
        </div>

        <!-- Hasar -->
        <div class="col-md-6 col-lg-4 mb-4">
            <article class="card h-100">
                <div class="card-body">
                    <h2 class="card-title h5 text-danger">Hasar</h2>
                    <p class="card-text">
                        Sigorta kapsamında bulunan bir olay sonucunda meydana gelen maddi veya manevi zarardır.
                    </p>
                </div>
            </article>
        </div>

        <!-- Muafiyet -->
        <div class="col-md-6 col-lg-4 mb-4">
            <article class="card h-100">
                <div class="card-body">
                    <h2 class="card-title h5 text-danger">Muafiyet</h2>
                    <p class="card-text">
                        Hasarın belirli bir kısmının sigortalı tarafından karşılanacağı durumu ifade eder.
                        Sigortacı bu kısım için ödeme yapmaz.
                    </p>
                </div>
            </article>
        </div>

        <!-- Riziko -->
        <div class="col-md-6 col-lg-4 mb-4">
            <article class="card h-100">
                <div class="card-body">
                    <h2 class="card-title h5 text-danger">Riziko</h2>
                    <p class="card-text">
                        Sigorta konusu varlığa zarar verebilecek olay veya tehlikedir.
                        Riziko gerçekleştiğinde hasar meydana gelir.
                    </p>
                </div>
            </article>
        </div>

    </div>
</main>



<?php include __DIR__ . '/../includes/layout-data-center-sidebar-footer.php'; ?>