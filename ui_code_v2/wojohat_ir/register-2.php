<?php include_once('templates/header.php'); ?>
    <div class="container containerWidth mt-4">

        <div class="percent row mb-5">
            <div class="col d-inline-block">
                <span class="txt">تکمیل اطلاعات</span>
                <span class="circle"></span>
                <span class="line"></span>
            </div>
            <div class="col d-inline-block active">
                <span class="txt">ارسال مدارک</span>
                <span class="circle"></span>
                <span class="line"></span>
            </div>
            <div class="col d-inline-block">
                <span class="txt">معرف</span>
                <span class="circle"></span>
                <span class="line"></span>
            </div>
            <div class="col d-inline-block">
                <span class="txt">ثبت</span>
                <span class="circle"></span>
                <span class="line"></span>
            </div>
        </div> <!-- percent -->

        <h5 class="my-4 mx-2">
            بارگزاری مدارک
        </h5>

        <div class="card card-cstm">

            <form action="" class="form-cstm form-cstm2">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <div class="col mx-0 mt-4">
                        <label for="avatar" class="form-label">عکس پرسنلی</label>
                        <input class="form-control" type="file" id="avatar">
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="cart-m" class="form-label">کارت ملی</label>
                        <input class="form-control" type="file" id="cart-m">
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="shenasname" class="form-label">شناسنامه</label>
                        <input class="form-control" type="file" id="shenasname">
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="madrak" class="form-label">مدرک تحصیلی</label>
                        <input class="form-control" type="file" id="madrak">
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="moaref" class="form-label">معرفی نامه</label>
                        <input class="form-control" type="file" id="moaref">
                    </div>
                </div>


                <button class="btn btn-cstm-blue w-100 mt-4">
                    ادامه
                    <svg width="8px" aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="angle-left" class="mx-2 svg-inline--fa fa-angle-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M166.5 424.5l-143.1-152c-4.375-4.625-6.562-10.56-6.562-16.5c0-5.938 2.188-11.88 6.562-16.5l143.1-152c9.125-9.625 24.31-10.03 33.93-.9375c9.688 9.125 10.03 24.38 .9375 33.94l-128.4 135.5l128.4 135.5c9.094 9.562 8.75 24.75-.9375 33.94C190.9 434.5 175.7 434.1 166.5 424.5z" fill="currentColor"/></svg>
                </button>
            </form>

        </div>


    </div> <!-- container -->
<?php include_once('templates/footer.php'); ?>