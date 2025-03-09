<?php include_once('templates/header.php'); ?>
    <div class="container containerWidth mt-4">

        <div class="percent row mb-5">
            <div class="col d-inline-block active">
                <span class="txt">تکمیل اطلاعات</span>
                <span class="circle"></span>
                <span class="line"></span>
            </div>
            <div class="col d-inline-block">
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
            تکمیل اطلاعات عاملین(طلبه ها)
        </h5>

        <div class="card card-cstm">

            <form action="" class="form-cstm form-cstm2">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <div class="col mx-0 mt-4">
                        <label for="name" class="form-label">نام</label>
                        <input class="form-control" id="name" type="text" >
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="family" class="form-label">نام خانوادگی</label>
                        <input class="form-control" id="family" type="text" >
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="fother" class="form-label">نام پدر</label>
                        <input class="form-control" id="fother" type="text" >
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="code" class="form-label">کد ملی</label>
                        <input class="form-control" id="code" type="number" >
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="birthday" class="form-label">تاریخ تولد</label>
                        <input class="form-control" id="birthday" type="text" >
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="number" class="form-label">شماره همراه</label>
                        <input class="form-control" id="number" type="number" >
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="number-s" class="form-label">شماره ثابت</label>
                        <input class="form-control" id="number-s" type="number" >
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="code-p" class="form-label">کد پستی</label>
                        <input class="form-control" id="code-p" type="number" >
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="education" class="form-label">تحصیلات کلاسیک</label>
                        <select class="col form-select" id="education">
                            <option selected></option>
                            <option value="1">دیپلم</option>
                            <option value="2">لیسانس</option>
                            <option value="3">دکترا</option>
                        </select>
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="code-pt" class="form-label">کد پرونده تحصیلی</label>
                        <input class="form-control" id="code-pt" type="number" >
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="code-mkh" class="form-label">کد مرکز خدمات</label>
                        <input class="form-control" id="code-mkh" type="number" >
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="school" class="form-label">مدارس محل تحصیل</label>
                        <select class="col form-select" id="school">
                            <option selected></option>
                            <option value="1">آسیه</option>
                            <option value="2">سمیه</option>
                            <option value="3">هجرت</option>
                        </select>
                    </div>
                    <div class="col mx-0 mt-4">
                        <label for="cooperation" class="form-label">زمینه های همکاری </label>
                        <select class="col form-select" id="cooperation">
                            <option selected></option>
                            <option value="1">تدریس</option>
                            <option value="2">همکاری</option>
                        </select>
                    </div>
                </div>


                <div class="col mx-0 mt-4">
                    <label for="address" class="form-label">آدرس</label>
                    <textarea class="form-control" id="address" type="text" rows="2" placeholder="آدرس"></textarea>
                </div>

                <button class="btn btn-cstm-blue w-100 mt-4">
                    ادامه
                    <svg width="8px" aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="angle-left" class="mx-2 svg-inline--fa fa-angle-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M166.5 424.5l-143.1-152c-4.375-4.625-6.562-10.56-6.562-16.5c0-5.938 2.188-11.88 6.562-16.5l143.1-152c9.125-9.625 24.31-10.03 33.93-.9375c9.688 9.125 10.03 24.38 .9375 33.94l-128.4 135.5l128.4 135.5c9.094 9.562 8.75 24.75-.9375 33.94C190.9 434.5 175.7 434.1 166.5 424.5z" fill="currentColor"/></svg>
                </button>
            </form>

        </div>


    </div> <!-- container -->
<?php include_once('templates/footer.php'); ?>