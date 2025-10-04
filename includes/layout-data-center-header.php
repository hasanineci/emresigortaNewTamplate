<div class="container py-2">

    <div class="row mt-3 pt-2">
        <div class="col-lg-2 position-relative">

            <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                <h5 class="font-weight-semi-bold">Bilgi Bankası</h5>
                <ul class="nav nav-list flex-column sort-source mb-5" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item" data-option-value="*">
                        <a class="nav-link <?php echo ($page_active == 'blog-makaleler') ? 'active' : ''; ?>" href="?page=blog-makaleler">Blog / Makaleler</a>
                    </li>
                    <li class="nav-item" data-option-value=".websites">
                        <a class="nav-link <?php echo ($page_active == 'sik-sorulan-sorular') ? 'active' : ''; ?>" href="?page=sik-sorulan-sorular">Sıkça Sorulan Sorular(SSS)</a>
                    </li>
                    <li class="nav-item" data-option-value=".logos">
                        <a class="nav-link <?php echo ($page_active == 'rehberlik-klavuzlar') ? 'active' : ''; ?>" href="?page=rehberlik-klavuzlar">Rehberlik & Klavuzlar</a>
                    </li>
                    <li class="nav-item" data-option-value=".brands">
                        <a class="nav-link <?php echo ($page_active == 'sigorta-sozlugu') ? 'active' : ''; ?>" href="?page=sigorta-sozlugu">Sigorta Sözlüğü</a>
                    </li>
                    <li class="nav-item" data-option-value=".medias">
                        <a class="nav-link <?php echo ($page_active == 'haberler-duyurular') ? 'active' : ''; ?>" href="?page=haberler-duyurular">Haberler & Duyurular</a>
                    </li>
                </ul>

            </aside>

        </div>

        <div class="col-lg-10">