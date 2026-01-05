<?php include_once('templates/header.php'); ?>
    <div class="header d-flex flex-column">
        <div class="header-content mx-auto my-auto mxW767">

            <div class="logo-main logo-site mb-4 mt-5"></div>
            <form class="fm-srch" role="search">
                <input class="form-control fm-in rounded-pill" type="search" placeholder="جستجو" aria-label="search"/>
                <button class="fm-btn btn btn-outline-success px-3 rounded-pill" type="submit">
                    <svg width="15px" aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="magnifying-glass" class="svg-inline--fa fa-magnifying-glass fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504.1 471l-134-134C399.1 301.5 415.1 256.8 415.1 208c0-114.9-93.13-208-208-208S-.0002 93.13-.0002 208S93.12 416 207.1 416c48.79 0 93.55-16.91 129-45.04l134 134C475.7 509.7 481.9 512 488 512s12.28-2.344 16.97-7.031C514.3 495.6 514.3 480.4 504.1 471zM48 208c0-88.22 71.78-160 160-160s160 71.78 160 160s-71.78 160-160 160S48 296.2 48 208z" fill="currentColor"/></svg>
                </button>
            </form>
            <div class="d-flex align-items-center justify-content-center mt-5 pt-4">
                <span class="line-arrow-right"></span>
                <p class="px-2 mb-0 p-head text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت  چاپ</p>
                <span class="line-arrow-left"></span>
            </div>

        </div> <!-- header-content-->
        <div class="header-line"></div>
    </div> <!--header-->



	<div class="container main mxW1080">

        <div class="subject">
            <span class="i-category"></span>
            <h5 class="">دسته بندی</h5>
        </div> <!-- category-title-->
        <div class="category row mxW575 mx-auto">
            <?php for($i=1; $i < 5; $i++): ?>
                <div class="col">
                    <a class="card text-center" href="#">
                        <img src="images/img/category-1.png" class="card-img" alt="سیر و سلوک">
                        <span class="txt">اخلاق</span>
                    </a>
                </div>
            <?php endfor; ?>
        </div> <!-- category-->

        <div class="subject">
            <span class="i-category"></span>
            <h5 class="">لیست کتابهای مذهبی</h5>
        </div><!--listBook-title-->
        <div class="listBooks row row-cols-md-4 row-cols-sm-3 row-cols-2">
            <?php for($i = 0; $i < 8; $i++): ?>
            <div class="col mb-4">
                <a class=" card border-0" href="page.php">
                    <img src="images/book-1.png" class="p-4 p-sm-4 p-md-5 w-100 mx-auto" alt="">
                    <div class="txt mx-3 text-center overflow-hidden mb-3">
                        <h5 class="title-card text-nowrap">لورم ایپسوم متن ساختگی</h5>
                        <span class="txt-card text-nowrap d-block">تولید سادگی نامفهوم از صنعت </span>
                        <span class="visit-card">
                            مشاهده
                            <svg width="13px" aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z" fill="currentColor"/></svg>
                        </span>
                    </div>
                </a>
            </div>
            <?php endfor; ?>
        </div><!--listBooks-->

	</div> <!-- container main mxW1080 -->


<?php include_once('templates/prefer-books.php'); ?>

<?php include_once('templates/footer.php'); ?>