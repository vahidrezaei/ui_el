<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <title>website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-swiper-font-awsome/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-swiper-font-awsome/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"href="bootstrap-swiper-font-awsome/swiper-bundle.min.css"/>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light sticky-top">
    <div class="container containerWidth topMenu d-flex justify-content-between align-items-center my-2">
        <div>

            <div class="dropdown d-inline">
                <button type="button" class="navbar-brand btn btnCstm1 py-2 mx-0" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    <svg width="20" aria-hidden="true" focusable="false" data-prefix="fa-thin" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 104h432c4.406 0 8-3.594 8-7.1S444.4 88 440 88H8C3.594 88 0 91.59 0 95.1S3.594 104 8 104zM440 248H8C3.594 248 0 251.6 0 256s3.594 8 8 8h432C444.4 264 448 260.4 448 256S444.4 248 440 248zM440 408H8C3.594 408 0 411.6 0 415.1S3.594 424 8 424h432c4.406 0 8-3.594 8-7.1S444.4 408 440 408z" fill="currentColor"/></svg>
                </button> <!-- open sidebar -->
                <div class="dropdown-menu dropdown-menu-end modalSide">
                    <div class="content-menu">

                        <div class="head-menu d-flex">
                            <a class="m-auto icon ic2" href="#"></a>
                        </div>
                        <div class="text-center">سامانه خدمات دینی</div>

                        <ul class="list-group list-group px-3 mt-2">
                            <a href="index.php" class="list-group-item border-0 mt-3">
                                <svg width="30px" height="17px" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="home-blank" class="svg-inline--fa fa-home-blank fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M575.1 256c-.0006 17.6-14.27 31.1-32.01 31.1L511.1 288l.0031 160c0 35.35-28.65 64-63.1 64H128c-35.35 0-63.1-28.65-63.1-64L64.02 288h-32.02c-17.78 0-32-14.44-32-31.1c-.0004-9.052 3.842-17.9 10.92-24.1l255.1-223.1c6.963-6.098 14.93-7.918 21.08-7.918c7.523 0 15.05 2.637 21.08 7.918l255.1 223.1C572.2 238.1 575.1 246.1 575.1 256z" fill="currentColor"/></svg>
                                صفحه اصلی
                            </a>
                            <a href="index.php" class="list-group-item border-0 mt-3">
                                <svg width="30px" height="17px" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="folder-gear" class="svg-inline--fa fa-folder-gear fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 248C233.9 248 216 265.9 216 288s17.91 40 40 40S296 310.1 296 288S278.1 248 256 248zM464 96h-192l-64-64h-160C21.5 32 0 53.5 0 80v352C0 458.5 21.5 480 48 480h416c26.5 0 48-21.5 48-48v-288C512 117.5 490.5 96 464 96zM366.9 352c-4.457 7.719-9.781 14.55-15.56 20.86c-2.506 2.738-6.633 3.281-9.846 1.422l-23.46-13.54C309.2 368.3 299.1 374.2 288 378.1v27.02c0 3.711-2.531 7.016-6.154 7.812C273.5 414.8 264.9 416 256 416c-8.912 0-17.49-1.195-25.84-3.047C226.5 412.2 224 408.9 224 405.1v-27.02c-11.12-3.957-21.19-9.867-29.99-17.38L170.6 374.3c-3.215 1.859-7.34 1.316-9.848-1.422C154.9 366.6 149.6 359.7 145.1 352c-4.455-7.719-7.709-15.75-10.29-23.91C133.7 324.6 135.3 320.7 138.6 318.9l23.21-13.4C160.7 299.8 160 293.1 160 288s.7129-11.78 1.76-17.46L138.6 257.1C135.3 255.3 133.7 251.4 134.9 247.9C137.4 239.7 140.7 231.7 145.1 224c4.457-7.719 9.783-14.55 15.56-20.86C163.2 200.4 167.3 199.9 170.6 201.7l23.45 13.54C202.8 207.7 212.9 201.8 224 197.9V170.9c0-3.711 2.531-7.016 6.156-7.816C238.5 161.2 247.1 160 256 160c8.914 0 17.49 1.195 25.85 3.043C285.5 163.8 288 167.1 288 170.9v27.02c11.12 3.957 21.19 9.867 29.99 17.38l23.46-13.54c3.213-1.859 7.34-1.316 9.846 1.422C357.1 209.4 362.4 216.3 366.9 224s7.711 15.75 10.29 23.91c1.119 3.539-.4766 7.383-3.689 9.234l-23.21 13.4C351.3 276.2 352 282 352 288s-.7129 11.78-1.76 17.46l23.21 13.4c3.213 1.852 4.809 5.695 3.691 9.234C374.6 336.3 371.3 344.3 366.9 352z" fill="currentColor"/></svg>
                                خدمات
                            </a>
                            <a href="index.php" class="list-group-item border-0 mt-3">
                                <svg width="30px" height="17px" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="memo" class="svg-inline--fa fa-memo fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M320 0H64C28.65 0 0 28.65 0 64v384c0 35.35 28.65 64 64 64h256c35.35 0 64-28.65 64-64V64C384 28.65 355.3 0 320 0zM208 352h-128C71.16 352 64 344.8 64 336S71.16 320 80 320h128c8.838 0 16 7.164 16 16S216.8 352 208 352zM304 256h-224C71.16 256 64 248.8 64 240S71.16 224 80 224h224C312.8 224 320 231.2 320 240S312.8 256 304 256zM304 160h-224C71.16 160 64 152.8 64 144S71.16 128 80 128h224C312.8 128 320 135.2 320 144S312.8 160 304 160z" fill="currentColor"/></svg>
                                مقالات
                            </a>
                            <a href="index.php" class="list-group-item border-0 mt-3">
                                <svg width="30px" height="17px" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="memo-circle-check" class="svg-inline--fa fa-memo-circle-check fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M256 368c0-80.39 54.24-148.2 128-169.2V64c0-35.35-28.65-64-64-64H64C28.65 0 0 28.65 0 64v384c0 35.35 28.65 64 64 64h256c3.357 0 6.548-.487 9.766-.985C285.2 479.1 256 426.9 256 368zM80 128h224C312.8 128 320 135.2 320 144S312.8 160 304 160h-224C71.16 160 64 152.8 64 144S71.16 128 80 128zM176 352h-96C71.16 352 64 344.8 64 336S71.16 320 80 320h96C184.8 320 192 327.2 192 336S184.8 352 176 352zM240 256h-160C71.16 256 64 248.8 64 240S71.16 224 80 224h160C248.8 224 256 231.2 256 240S248.8 256 240 256zM432 224C352.5 224 288 288.5 288 368s64.46 144 144 144C511.5 512 576 447.5 576 368S511.5 224 432 224zM499.3 341.1l-74.66 74.66c-3.125 3.125-7.219 4.688-11.31 4.688s-8.188-1.562-11.31-4.688l-37.34-37.33c-6.25-6.25-6.25-16.38 0-22.62s16.38-6.25 22.62 0l26.03 26.02l63.34-63.34c6.25-6.25 16.38-6.25 22.62 0S505.6 335.7 499.3 341.1z" fill="currentColor"/></svg>
                                گزارشات
                            </a>
                            <a href="index.php" class="list-group-item border-0 mt-3">
                                <svg width="30px" height="17px" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="user-headset" class="svg-inline--fa fa-user-headset fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M48 224C56.88 224 64 216.9 64 208V192c0-88.25 71.75-160 160-160s160 71.75 160 160v16C384 252.1 348.1 288 304 288h-32c0-17.62-14.38-32-32-32h-32c-17.62 0-32 14.38-32 32s14.38 32 32 32h96c61.88-.125 111.9-50.13 112-112V192c0-105.9-86.13-192-192-192S32 86.13 32 192v16C32 216.9 39.13 224 48 224zM208 224h32c22.88 0 43.98 12.2 55.36 31.95L304 256c26.5 0 48-21.5 48-47.1V192c0-70.75-57.25-128-128-128s-128 57.25-128 128c0 40.38 19.12 75.99 48.37 99.49C144.2 290.2 144 289.3 144 288C144 252.6 172.6 224 208 224zM314.7 352H133.3C59.7 352 0 411.7 0 485.3C0 500.1 11.94 512 26.66 512H421.3C436.1 512 448 500.1 448 485.3C448 411.7 388.3 352 314.7 352z" fill="currentColor"/></svg>
                                درباره ما
                            </a>
                        </ul>

                    </div>
                </div> <!-- dropdown-menu -->
                <div class="bg-shadow"></div>
            </div> <!-- dropdown -->
        </div>

        <div class="d-flex icon-site">
            <a class="navbar-brand mx-1 my-auto text-secondary txt" href="#">سامانه خدمات دینی</a>
            <a class="navbar-brand mx-1 my-auto icon" href="#"></a>
        </div>
    </div>
</nav> <!-- navigation -->


<nav class="navbar navbar-expand-sm navbar-light fixed-bottom menu-bottom">
    <div class="container maxWidth400 topMenu d-flex justify-content-between align-items-center">


        <div class="modalSide2">
            <button type="button" class="btn navbar-brand" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg height="20" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="grid-2" class="svg-inline--fa fa-grid-2 fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M176 0h-128C21.49 0 0 21.49 0 48v128C0 202.5 21.49 224 48 224h128C202.5 224 224 202.5 224 176v-128C224 21.49 202.5 0 176 0zM464 288h-128C309.5 288 288 309.5 288 336v128c0 26.51 21.49 48 48 48h128c26.51 0 48-21.49 48-48v-128C512 309.5 490.5 288 464 288zM464 0h-128C309.5 0 288 21.49 288 48v128C288 202.5 309.5 224 336 224h128C490.5 224 512 202.5 512 176v-128C512 21.49 490.5 0 464 0zM176 288h-128C21.49 288 0 309.5 0 336v128C0 490.5 21.49 512 48 512h128C202.5 512 224 490.5 224 464v-128C224 309.5 202.5 288 176 288z" fill="currentColor"/></svg>
                <span class="txt-menu">خدمات</span>
            </button>
        </div>

        <a class="navbar-brand text-center" href="#">
            <svg height="20" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="memo" class="svg-inline--fa fa-memo fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M320 0H64C28.65 0 0 28.65 0 64v384c0 35.35 28.65 64 64 64h256c35.35 0 64-28.65 64-64V64C384 28.65 355.3 0 320 0zM208 352h-128C71.16 352 64 344.8 64 336S71.16 320 80 320h128c8.838 0 16 7.164 16 16S216.8 352 208 352zM304 256h-224C71.16 256 64 248.8 64 240S71.16 224 80 224h224C312.8 224 320 231.2 320 240S312.8 256 304 256zM304 160h-224C71.16 160 64 152.8 64 144S71.16 128 80 128h224C312.8 128 320 135.2 320 144S312.8 160 304 160z" fill="currentColor"/></svg>
            <span class="txt-menu">تراکنش ها</span>
        </a>
        <a class="home active navbar-brand text-center rounded-circle" href="#">
            <span class="home-icon w-100 h-100"></span>
        </a>
        <a class="navbar-brand text-center" href="#">
            <svg height="20" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="cart-shopping" class="svg-inline--fa fa-cart-shopping fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.1 416c-26.51 0-47.1 21.49-47.1 48s21.49 48 47.1 48s47.1-21.49 47.1-48S490.5 416 463.1 416zM175.1 416c-26.51 0-47.1 21.49-47.1 48S149.5 512 175.1 512s47.1-21.49 47.1-48S202.5 416 175.1 416zM569.5 44.73c-6.109-8.094-15.42-12.73-25.56-12.73H121.1L119.6 19.51C117.4 8.19 107.5 0 96 0H23.1C10.75 0 0 10.75 0 23.1S10.75 48 23.1 48h52.14l60.28 316.5C138.6 375.8 148.5 384 160 384H488c13.25 0 24-10.75 24-23.1C512 346.7 501.3 336 488 336H179.9L170.7 288h318.4c14.29 0 26.84-9.47 30.77-23.21l54.86-191.1C577.5 63.05 575.6 52.83 569.5 44.73z" fill="currentColor"/></svg>
            <span class="txt-menu">سفارشات</span>
        </a>
        <a class="navbar-brand text-center" href="#">
            <svg height="20" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" fill="currentColor"/></svg>
            <span class="txt-menu">حساب کاربری</span>
        </a>

    </div>
</nav> <!-- menu bottom -->


<!-- Modal -->
<div class="modal modalSide2 bg-transparent" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog fixed-bottom ">
        <div class="modal-content border-0">
            <div class="gridHead d-flex">
                <span class="m-auto gridIcom rounded-circle"></span>
            </div>

            <ul class="list-group list-group px-3 my-5">
                <a href="index.php" class="list-group-item border-0 mt-3">
                    <svg width="30px" height="15px" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="mosque" class="svg-inline--fa fa-mosque fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M0 480c0 17.62 14.38 32 32 32h64c17.62 0 32-14.38 32-32V160H0V480zM579.1 288C597 270.6 608 250.6 608 229.1c0-52.88-41.75-93.88-87.88-122.9c-42-26.5-80.63-57.88-112-96.25L400 0l-8.125 10c-31.38 38.38-70 69.75-112 96.25C233.8 135.3 192 176.3 192 229.1C192 250.6 203 270.6 220.9 288H579.1zM64 0c0 0-64 32-64 96v32h128V96C128 32 64 0 64 0zM608 320H192c-17.6 0-32 14.4-32 32v160h64v-64c0-17.62 14.38-32 32-32s32 14.38 32 32v64h64v-72c0-48 48-72 48-72s48 24 48 72V512h64v-64c0-17.62 14.38-32 32-32s32 14.38 32 32v64h64v-160C640 334.4 625.6 320 608 320z" fill="currentColor"/></svg>
                    درخواست عبادات استیجاری
                </a>
                <a href="index.php" class="list-group-item border-0 mt-3">
                    <svg width="30px" height="17px" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="hand-holding-seedling" class="svg-inline--fa fa-hand-holding-seedling fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M479.1 0h-64c-40.75 0-77.52 15.75-105.8 40.75c25.38 32 40.88 72.25 41.5 116C424.8 142 479.1 77.5 479.1 0zM255.1 160v96C255.1 273.6 270.4 288 287.1 288s32-14.4 32-31.1L319.1 160c0-88.37-71.63-160-160-160H95.97C95.97 88.38 167.6 160 255.1 160zM568.2 336.3c-13.12-17.81-38.14-21.66-55.93-8.469l-119.7 88.17h-120.6c-8.748 0-15.1-7.25-15.1-15.99c0-8.75 7.25-16 15.1-16h78.25c15.1 0 30.75-10.88 33.37-26.62c3.25-20-12.12-37.38-31.62-37.38H191.1c-26.1 0-53.12 9.25-74.12 26.25l-46.5 37.74L15.1 383.1c-8.748 0-15.1 7.274-15.1 16.02L.0001 496C.0001 504.8 7.251 512 15.1 512h346.1c22.03 0 43.92-7.188 61.7-20.27l135.1-99.52C577.5 379.1 581.3 354.1 568.2 336.3z" fill="currentColor"/></svg>
                    پرداخت وجوهات شرعی
                </a>
                <a href="index.php" class="list-group-item border-0 mt-3">
                    <svg width="30px" height="17px" aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="hand-holding-heart" class="svg-inline--fa fa-hand-holding-heart fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M275.2 250.5c7 7.375 18.5 7.375 25.5 0l108.1-114.2c31.5-33.12 29.72-88.1-5.65-118.7c-30.88-26.75-76.75-21.9-104.9 7.724L287.1 36.91L276.8 25.28C248.7-4.345 202.7-9.194 171.1 17.56C136.7 48.18 134.7 103.2 166.4 136.3L275.2 250.5zM568.2 336.3c-13.12-17.81-38.14-21.66-55.93-8.469l-119.7 88.17h-120.6c-8.748 0-15.1-7.25-15.1-15.1c0-8.746 7.25-15.1 15.1-15.1h78.25c15.1 0 30.75-10.87 33.37-26.62c3.25-19.1-12.12-37.37-31.62-37.37H191.1c-26.1 0-53.12 9.25-74.12 26.25l-46.5 37.74l-55.37-.0253c-8.748 0-15.1 7.275-15.1 16.02L.0001 496C.0001 504.8 7.251 512 15.1 512h346.1c22.03 0 43.92-7.187 61.7-20.28l135.1-99.51C577.5 379.1 581.3 354.1 568.2 336.3z" fill="currentColor"/></svg>
                    خیریه
                </a>
            </ul>

<!--            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
        </div>
    </div>
</div>