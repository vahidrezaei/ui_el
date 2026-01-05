    <div class="container mxW1080">
        <div class="subject">
            <span class="i-category"></span>
            <h5 class="">کتابهای پیشنهادی</h5>
        </div> <!-- category-title-->
    </div>
    <div class="prefer-books mb-5">
        <div class="swiper mySwiper py-3 container mxW1080">

            <div class="swiper-wrapper ">

                <?php for($i = 0; $i < 6; $i++): ?>
                    <div class="swiper-slide listBooks">
                        <a class=" card border-0" href="#">
                            <img src="images/book-1.png" class="p-3 p-sm-3 p-md-4 w-100 mx-auto" alt="">
                            <div class="txt mx-2 mx-sm-3 text-center overflow-hidden mb-3">
                                <h5 class="title-card text-nowrap">لورم ایپسوم متن ساختگی</h5>
                                <span class="txt-card text-nowrap d-block">تولید سادگی نامفهوم از صنعت </span>
                                <span class="visit-card">
                                        مشاهده
                                        <svg width="13px" aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="arrow-left" class="d-desktop svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z" fill="currentColor"/></svg>
                                    </span>
                            </div>
                        </a> <!-- card ctmPost -->
                    </div>
                <?php endfor;?>

            </div> <!--  swiper-wrapper -->
            <div class="swiper-button-next rounded-circle"></div>
            <div class="swiper-button-prev rounded-circle"></div>
            <!-- <div class="swiper-pagination"></div> -->
        </div> <!--  swiper mySwiper -->
    </div> <!--prefer-books-->