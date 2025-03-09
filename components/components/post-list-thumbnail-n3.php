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

<?php require "../fun/helper.php"; ?>
<?php $list = JsonToObject(file_get_contents(__DIR__."/../api-faker-fa.txt")); ?>


<div class="container maxWidth450 p-0">

    <div class="header-golestan mb-3">
        <!-- <img src="../images/golestanShohada-2.jpg" class="h-100"/>-->
    </div>

    <h4 class="title-golestan rounded-4 mb-3">گلستان شهدای شهرکیان</h4>

    <div class="input-group">
        <input type="text" class="form-control rounded-4 border-0 mb-3 py-2" placeholder="جستجو" aria-describedby="button-addon1" id="shahidSearch">
        <span class="search-icon d-inline-block">
            <!-- <i class="bi bi-search"></i>-->
            <i class="icon-search"></i>
        </span>
    </div>

    <?php foreach($list->data as $item){ ?>
    <a href="#" class="thumbnail-list n3 list-group-item d-flex align-items-center rounded-4 p-1 mb-3">
        <div class="thumbnail overflow-hidden rounded-circle">
            <div class="arrowLink rounded-circle">
                <svg aria-hidden="true" focusable="false" data-prefix="fa-solid" data-icon="angle-left" class="svg-inline--fa fa-angle-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z" fill="currentColor"/></svg>
            </div>
            <?php if($item->id !== 1) { ?>
            <img src="<?=$item->avatar;?>" class="w-100 h-100 rounded-circle" alt="">
            <?php }?>
        </div>
        <div class="txt-content overflow-hidden">
            <h6 class="txt-head text-nowrap"><span> شهید </span><?=$item->title;?></h6>
            <p class="txt-detail text-nowrap mb-2"><?=$item->subject;?></p>
            <div class="text-span d-inline text-nowrap border rounded px-1">
                <span> متولد <?=$item->star;?></span>
                <span> شهادت <?=$item->like;?></span>
                <span><?= $list->logo[4]->svg; ?> <?=$item->price;?></span>
            </div>
        </div>
    </a> <!--thumbnail-list-N2-->
    <?php } ?>

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