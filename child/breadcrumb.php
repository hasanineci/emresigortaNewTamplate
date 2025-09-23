<section class="page-header p-relative border-0 bg-quaternary overflow-hidden m-0 p-0">
    <div class="custom-hero-bg">
        <svg viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
            <defs>
                <radialGradient id="Gradient1" cx="50%" cy="50%" fx="0.441602%" fy="50%" r=".5">
                    <animate attributeName="fx" dur="34s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                    <stop offset="0%" stop-color="rgba(251, 193, 5, 1)"></stop>
                    <stop offset="100%" stop-color="rgba(251, 193, 5, 0)"></stop>
                </radialGradient>
            </defs>
            <rect x="13.744%" y="1.18473%" width="100%" height="100%" fill="url(#Gradient1)" transform="rotate(334.41 50 50)">
                <animate attributeName="x" dur="20s" values="25%;0%;25%" repeatCount="indefinite"></animate>
                <animate attributeName="y" dur="21s" values="0%;25%;0%" repeatCount="indefinite"></animate>
                <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="7s" repeatCount="indefinite"></animateTransform>
            </rect>
        </svg>
    </div>
    <div class="container">
        <div class="row align-items-center my-5 pt-5">
            <div class="col text-center">
                <div class="py-4">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="?page=anasayfa" class="text-color-primary text-decoration-none"><small>ANASAYFA</small></a></li>
                        <li class="text-color-primary active"><small><?php echo $page_title; ?></small></li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10"><?php echo $page_title; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="p-absolute custom-el-1 custom-el-pos-5">
        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
            <img src="assets/img/svg/arrow-up-light.svg" width="140">
        </div>
        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
            <img src="assets/img/svg/arrow-up-light.svg" width="140">
        </div>
        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <img src="assets/img/svg/arrow-up-light.svg" width="140">
        </div>
    </div>
</section>