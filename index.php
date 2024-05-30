<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/khadamat.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <style>
    .list-group a h5 {
        color: maroon;
        font-weight: bold;
    }

    .list-group a span {
        color: #4a4a4a;
        font-size: 13px;
    }
    </style>
    <title>Component List</title>
</head>

<body>
<?php require "./fun/helper.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h3>Component List</h3>
            </div>
            <div class="col-6 mx-auto">
                <div class="list-group">
                    <a href="./components/khadamat.php" class="list-group-item list-group-item-action">
                        <h5>لیست خدمات</h5>
                        <span>لیست خدمات با عنوان و اصلی و عنوان خدمات با آیکون</span>
                    </a>
                    <a href="./components/post-list-thumbnail.php" class="list-group-item list-group-item-action">
                        <h5>لیست پست ها</h5>
                        <span>لیست پستها بصورت کشیده و با عکس بند انگشتی</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->

</html>