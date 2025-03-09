<?php include_once('templates/header.php'); ?>
	<div class="container containerWidth mt-4">

        <div class="tasks row row-cols-1">

            <div class="col my-2">
                <div class="task card card-cstm">
                    <div class="d-flex justify-content-between align-items-center overflow-hidden">
                        <h6 class="m-0 text-nowrap">لورم ایپسوم متن ساختگی</h6>
                        <span class="badge rounded-pill badge-warning">در حال انجام</span>
                    </div>

                    <div class="details text-nowrap overflow-hidden">
                        <span>اکبر مرادی</span>
                        <span class="price">&nbsp; 500,000 ت&nbsp;</span>
                        <span>30 روز</span>
                    </div>

                    <div class="badge-progress d-flex justify-content-between">
                        <span>انجام شده</span>
                        <span>مانده</span>
                    </div>
                    <progress class="progress-t mt-2 w-100" id="file" value="30" max="100"></progress>
                </div>
            </div>

        </div> <!-- tasks -->

        <div class="card card-cstm mt-2">
            <form action="" class="form-cstm form-cstm2">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <div class="col mx-0 mt-4">
                        <label for="gozaresh" class="form-label">گزارش خدمات</label>
                        <input class="form-control" type="file" id="gozaresh">
                    </div>
                </div>

                <div class="mx-0 mt-4">
                    <label for="address" class="form-label">توضیحات</label>
                    <textarea class="form-control" id="address" type="text" rows="2" placeholder="..."></textarea>
                </div>


                <button class="btn btn-cstm-blue w-100 mt-4">
                    ثبت
                </button>
            </form>
        </div>


	</div> <!-- container -->
<?php include_once('templates/footer.php'); ?>