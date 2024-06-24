<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/khadamat.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <title>Component List</title>
</head>

<body>
    <?php
    $vector = [
        'v-1-start' => 'استارت و دینام',
        'v-2-pomp-benzin' => 'پمپ بنزین',
        'v-3-dama-cooler' => 'بخاری و کولر',
        'v-4-dashboard' => 'سیم کشی و داشبورد',
        'v-5-t-wire' => 'تقویت سیم کشی',
        'v-6-snow' => 'شیشه بالابر و برف پاکن',
        'v-7-etesal' => 'رفع اتصالی سیم کشی',
        'v-8-change' => 'تعویض سیم کشی',
        'v-9-change-light' => 'تعویض  کلیه لامپ ها',
        'v-10-ecu' => 'تعمیر ایسیو',
        'v-11-sensor' => 'تعمیر و تعویض کلیه سنسور ها',
        'v-12-fuse-box' => 'تعمیر کلیه جعبه فیوز ها و دسته راهنما',
        'v-13-t-km' => 'تعمیر کیلومتر',
        'v-14-chair' => 'تعمیر صندلی برقی',
        'v-15-sensor-back' => 'تعمیر سنسور دنده عقب و گرمکن شیشه عقب',
        'v-16-dashboard-new' => 'تعویض رودری و داشبورد قدیمی به جدید',
        'v-17-meh' => 'نصب مه شکن',
        'v-18-engin' => 'تنظیم موتور',
        'v-19-battery' => 'باطری',
        'v-20-car-alive' => 'احیای خودرو های فرسوده و نوستالژیک',
    ];
    ?>
    <div class="container maxWidth450 p-0">

        <div class="khadamat-img d-flex justify-content-center">
            <span class="khadamat-txt align-self-end">
                <span class="khadamat-color">خدمات خودرو در محل شما</span>
            </span>
        </div> <!-- image-khadamat -->

        <div class="khadamat-items">
            <div class="row row-cols-3 m-0">
                <?php foreach ($vector as $key => $val) { ?>

                <div class="col p-1 p-sm-2">
                    <a class="k-item overflow-hidden" href="#">
                        <div class="m-1"><img src="../images/img/<?= $key ?>.svg" class="img-v w-50" alt=""></div>
                        <span class="txt text-nowrap"><?= $val ?></span>
                    </a>
                </div>

                <?php } ?>
            </div>
        </div> <!-- khadamat-items -->

    </div> <!-- container -->
</body>
<!-- FOOTER----------------------- -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->


</html>