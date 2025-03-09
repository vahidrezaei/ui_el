<?php include_once('templates/header.php'); ?>
    <div class="container containerWidth mt-4">


        <h5 class="my-4 mx-2">
            ثبت درخواست جدید
        </h5>


        <ul class="tab-request nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">وجوهات</button>
            </li>
            <li class="nav-item mx-2" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">عبادات</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">عقیقه</button>
            </li>
        </ul> <!-- tab-links -1-->

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="card card-cstm mt-4">
                    <form action="" class="form-cstm form-cstm2 my-1">
                        <div class="row row-cols-1 row-cols-sm-2">
                            <div class="col mx-0 mb-3">
                                <label for="request-name" class="form-label">عنوان درخواست</label>
                                <input class="form-control" id="request-name" type="text" >
                            </div>
                            <div class="col mx-0 mb-3">
                                <label for="type-price" class="form-label">نوع وجه</label>
                                <select class="col form-select" id="type-price">
                                    <option selected></option>
                                    <option value="1">دیپلم</option>
                                    <option value="2">لیسانس</option>
                                    <option value="3">دکترا</option>
                                </select>
                            </div>
                            <div class="col mx-0 mb-3">
                                <label for="type-s" class="form-label">نوع سهم</label>
                                <select class="col form-select" id="type-s">
                                    <option selected></option>
                                    <option value="1">دیپلم</option>
                                    <option value="2">لیسانس</option>
                                    <option value="3">دکترا</option>
                                </select>
                            </div>
                            <div class="col mx-0 mb-3">
                                <label for="request-n" class="form-label">اسم صاحب سهم</label>
                                <input class="form-control" id="request-n" type="text" >
                            </div>
                            <div class="col mx-0 mb-3">
                                <label for="price" class="form-label">هزینه</label>
                                <input class="form-control" id="price" type="number" >
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <button type="button" class="btn cstm-primary w-100">اضافه کردن به سبد</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn cstm-sucsess w-100">درخواست انجام</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- tab-content-1 -->
            </div> <!-- tab-pane -1-->

            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="card card-cstm mt-4">محتوای عبادات</div>
            </div> <!-- tab-pane-2 -->

            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="card card-cstm mt-4">محتوای عقیقه</div>
            </div><!-- tab-pane-3 -->
        </div> <!-- tab-contents -->


    </div> <!-- container -->
<?php include_once('templates/footer.php'); ?>