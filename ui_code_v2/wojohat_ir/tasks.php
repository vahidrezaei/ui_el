<?php include_once('templates/header.php'); ?>
	<div class="container containerWidth mt-4">

        <div class="tasks row row-cols-1 row-cols-md-2">
            <?php for($i = 0; $i < 3; $i++): ?>
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
            <?php endfor; ?>




            <?php for($i = 0; $i < 3; $i++): ?>
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

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn cstm-primary">پذیرش</button>
                            <button type="button" class="btn cstm-warning mx-3">ویرایش</button>
                            <button type="button" class="btn cstm-danger">حذف</button>
                        </div>

                    </div>
                </div>
            <?php endfor; ?>


        </div> <!-- tasks -->

	</div> <!-- container -->
<?php include_once('templates/footer.php'); ?>