<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <title>Component List</title>
</head>

<body>

<?php require "fun/helper.php"; ?>
<?php $list = JsonToObject(file_get_contents("./database/api-faker-fa.txt")); ?>

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
                <i class="arrow-animate"></i>
            </div>
            <?php if($item->id !== 1) { ?>
            <img src="<?=$item->avatar;?>" class="w-100 h-100 rounded-circle" alt="">
            <?php }?>
        </div>
        <div class="txt-content overflow-hidden">
            <h6 class="txt-head text-nowrap"><span> شهید </span><?=$item->title;?></h6>
            <p class="txt-detail text-nowrap mb-2"><?=$item->subject;?></p>
            <div class="text-span d-inline text-nowrap border rounded px-1">
                <span> متولد <?=$item->birthday;?></span>
                <span> شهادت <?=$item->date;?></span>
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