<?php include_once('templates/header.php'); ?>
	<div class="container containerWidth mt-4">

        <h5 class="my-4 mx-2">
            سبد خرید شما
        </h5>

        <div class="basket row row-cols-1 row-cols-md-2">
            <?php for($i = 0; $i < 6; $i++): ?>
            <div class="col mb-4">
                <div class="basket-item card card-cstm">
                    <div class="d-flex justify-content-between align-items-center overflow-hidden">
                        <h6 class="m-0 text-nowrap">لورم ایپسوم متن ساختگی</h6>
                        <button class="btn cstm-danger rounded-pill">
                            حذف
                             <svg width="15px" aria-hidden="true" focusable="false" data-prefix="fa-light" data-icon="circle-xmark" class="svg-inline--fa fa-circle-xmark fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M331.3 180.7c-6.25-6.25-16.38-6.25-22.62 0L256 233.4L203.3 180.7c-6.25-6.25-16.38-6.25-22.62 0s-6.25 16.38 0 22.62L233.4 256L180.7 308.7c-6.25 6.25-6.25 16.38 0 22.62c6.246 6.246 16.37 6.254 22.62 0L256 278.6l52.69 52.69c6.246 6.246 16.37 6.254 22.62 0c6.25-6.25 6.25-16.38 0-22.62L278.6 256l52.69-52.69C337.6 197.1 337.6 186.9 331.3 180.7zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256S512 397.4 512 256S397.4 0 256 0zM256 480c-123.5 0-224-100.5-224-224s100.5-224 224-224s224 100.5 224 224S379.5 480 256 480z" fill="currentColor"/></svg>
                        </button>
                    </div>

                    <div class="details text-nowrap overflow-hidden mb-1">
                        <span>اکبر مرادی</span>
                        <span class="price">&nbsp; 500,000 ت&nbsp;</span>
                        <span>30 روز</span>
                    </div>

                </div>
            </div>
            <?php endfor; ?>

        </div> <!-- tasks -->

        <button type="button" class="btn cstm-sucsess py-2 w-100">پرداخت</button>


	</div> <!-- container -->
<?php include_once('templates/footer.php'); ?>