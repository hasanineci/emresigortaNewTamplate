<div class="container py-2">
    <div class="row mt-3 pt-2">
        <div class="col-lg-2 position-relative">
            <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                <h5 class="font-weight-semi-bold">Bilgi Bankası</h5>
                <ul class="nav nav-list flex-column sort-source mb-5" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item" data-option-value=".logos">
                        <a class="nav-link <?php echo ($page_active == 'rehberlik-klavuzlar') ? 'active' : ''; ?>" 
                           href="<?php echo safeUrl('rehberlik-klavuzlar'); ?>"
                           title="<?php echo safeHtml('Rehberlik ve Klavuzlar'); ?>">
                            Rehberlik & Klavuzlar
                        </a>
                    </li>
                    <li class="nav-item" data-option-value=".websites">
                        <a class="nav-link <?php echo ($page_active == 'sik-sorulan-sorular') ? 'active' : ''; ?>" 
                           href="<?php echo safeUrl('sik-sorulan-sorular'); ?>"
                           title="<?php echo safeHtml('Sıkça Sorulan Sorular'); ?>">
                            Sıkça Sorulan Sorular(SSS)
                        </a>
                    </li>
                    <li class="nav-item" data-option-value=".brands">
                        <a class="nav-link <?php echo ($page_active == 'sigorta-terimler-sozlugu') ? 'active' : ''; ?>" 
                           href="<?php echo safeUrl('sigorta-terimler-sozlugu'); ?>"
                           title="<?php echo safeHtml('Sigorta Terimler Sözlüğü'); ?>">
                            Sigorta Terimler Sözlüğü
                        </a>
                    </li>
                    <li class="nav-item" data-option-value=".medias">
                        <a class="nav-link <?php echo ($page_active == 'hasar-bildirimi-ve-surecleri') ? 'active' : ''; ?>" 
                           href="<?php echo safeUrl('hasar-bildirimi-ve-surecleri'); ?>"
                           title="<?php echo safeHtml('Hasar Bildirimi ve Süreçleri'); ?>">
                            Hasar Bildirimi ve Süreçleri
                        </a>
                    </li>
                    <li class="nav-item" data-option-value="*">
                        <a class="nav-link <?php echo ($page_active == 'blog-makaleler') ? 'active' : ''; ?>" 
                           href="<?php echo safeUrl('blog-makaleler'); ?>"
                           title="<?php echo safeHtml('Blog ve Makaleler'); ?>">
                            Blog / Makaleler
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
        <div class="col-lg-10">
            <!-- İçerik buraya gelecek -->