<?php include_once('templates/header.php'); ?>
	<div class="container containerWidth mt-4">

        <div class="profile d-flex justify-content-between align-items-center">
            <span>اطلاعات پروفایل شما ناقص میباشد</span>
            <a class="btn btn-warning" href="#">تکمیل</a>
        </div> <!-- profile -->

        <div class="khadamat row">
            <div class="kh-progress col">
                <svg width="20px" aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="circle-check" class="svg-inline--fa fa-circle-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M335 175L224 286.1L176.1 239c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l64 64C211.7 341.7 217.8 344 224 344s12.28-2.344 16.97-7.031l128-128c9.375-9.375 9.375-24.56 0-33.94S344.4 165.7 335 175zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z" fill="currentColor"/></svg>
                <p class="mt-2 pt-1">خدمات در حال انجام</p>
                <span>15</span>
            </div><!-- kh-progress -->

            <div class="kh-progress done col">
                <svg width="20px" aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="circle-check" class="svg-inline--fa fa-circle-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M335 175L224 286.1L176.1 239c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l64 64C211.7 341.7 217.8 344 224 344s12.28-2.344 16.97-7.031l128-128c9.375-9.375 9.375-24.56 0-33.94S344.4 165.7 335 175zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z" fill="currentColor"/></svg>
                <p class="mt-2 pt-1">خدمات انجام شده</p>
                <span>15</span>
            </div><!-- kh-progressing -->
        </div> <!-- khadamat -->

        <div class="card-price d-flex justify-content-between align-items-center">
            <div>
                <svg width="25px" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="credit-card" class="svg-inline--fa fa-credit-card fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M512 32h-448c-35.35 0-64 28.66-64 64L0 128h576V96C576 60.66 547.3 32 512 32zM0 416c0 35.34 28.65 64 64 64h448c35.35 0 64-28.66 64-64V224H0L0 416zM191.1 360c0-4.422 3.582-8 8-8h143.1c4.418 0 8 3.578 8 8L352 376c0 4.418-3.582 8-8 8h-144C195.6 384 192 380.4 192 376L191.1 360zM63.1 360c0-4.422 3.582-8 8-8h80c4.418 0 8 3.578 8 8L160 376C160 380.4 156.4 384 152 384h-80C67.58 384 64 380.4 64 376L63.1 360z" fill="currentColor"/></svg>
                <span class="mx-3">موجودی کیف پول شما</span>
            </div>
            <span class="price">350,000</span>
        </div> <!-- profile -->

        <a class="ziyarat d-flex align-items-center p-4" href="#">
            <span>زیارت نیابتی عتبات مقدسه</span>
        </a> <!-- ziyarat -->


        <div class="row khadamat-links">
            <div class="col khadamat-link link1 text-center">
                <a href="#" class="d-inline-block w-100">
                    <span class="icon-link"></span>
                    <span class="txt">وجوهات شرعیه</span>
                </a>
            </div>
            <div class="col khadamat-link link2 text-center">
                <a href="#" class="d-inline-block w-100">
                    <span class="icon-link"></span>
                    <span class="txt">عبادات استیجاره</span>
                </a>
            </div>
            <div class="col khadamat-link link3 text-center">
                <a href="#" class="d-inline-block w-100">
                    <span class="icon-link"></span>
                    <span class="txt">عقیقه و قربانی</span>
                </a>
            </div>
            <div class="col khadamat-link link4 text-center">
                <a href="#" class="d-inline-block w-100">
                    <span class="icon-link"></span>
                    <span class="txt">وصیت نامه نویسی</span>
                </a>
            </div>
        </div>



<!--		<div class="swiper mySwiper khadamat-links">-->
<!--			<div class="swiper-wrapper">-->
<!--				-->
<!--				--><?php ////for($i = 0; $i < 6; $i++): ?>
<!--				<div class="swiper-slide khadamat-link">-->
<!--                    <div class="card">s</div>-->
<!--				</div>-->
<!--				--><?php ////endfor;?>
<!---->
<!--			</div>-->
<!--			<div class="swiper-button-next rounded-circle"></div>-->
<!--			<div class="swiper-button-prev rounded-circle"></div>-->
<!--			<div class="swiper-pagination"></div>-->
<!--		</div> -->



	</div> <!-- container -->
<?php include_once('templates/footer.php'); ?>