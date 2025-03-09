<?php include_once('templates/header.php'); ?>
    <div class="container containerWidth mt-4">

        <h5 class="my-4 mx-2">
            ویرایش اطلاعات
        </h5>

        <div class="card card-cstm">

            <div class="avatar rounded-circle">
                <img src="images/img/avatar.png" class="w-100 h-100" alt="">
            </div>

            <form action="" class="form-cstm form-cstm2">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <div class="col mx-0 mt-2">
                        <label for="cart-m" class="form-label">تغییر پروفایل</label>
                        <input class="form-control" type="file" id="cart-m">
                    </div>
                </div>

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

                <button class="btn btn-cstm-blue w-100 mt-4">ثبت</button>
            </form>

        </div>


    </div> <!-- container -->
<?php include_once('templates/footer.php'); ?>