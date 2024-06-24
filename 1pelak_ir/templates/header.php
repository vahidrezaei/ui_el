<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <title>1pelak.ir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-swiper-font-awsome/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-swiper-font-awsome/bootstrap.bundle.min.js"></script>

    <!-- <link rel="stylesheet" href="bootstrap-swiper-font-awsome/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"href="bootstrap-swiper-font-awsome/swiper-bundle.min.css"/>
</head>

<body class="">	
    
  <nav class="navbar navbar-expand-sm navbar-light sticky-top">
    <div class="container-fluid px-0">
      
      <div class="menuMob justify-content-between align-items-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#TopMeno">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="yekPelak py-3 my-2" href="index.php"></a>              
        <button type="button" class="btn openSearch btn-dark border10" data-bs-toggle="collapse" data-bs-target="#demo"><i class="fa fa-search"></i></button>   <!-- ..... -->
      </div>
          
      <!-- Offcanvas Sidebar -->
      <div class="offcanvas offcanvas-end" id="TopMeno">
        <div class="offcanvas-header">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        
        <div class="offcanvas-body d-flex justify-content-between container">
          <ul class="navbar-nav">
            <li class="nav-item linkHover">
              <a class="nav-link active" href="index.php">خانه<span class="mx-auto lines"></span></a>
            </li>
            <li class="nav-item linkHover">
              <a class="nav-link" href="shohada-list.php">شهدا<span class="mx-auto lines"></span></a>
            </li>
            <li class="nav-item linkHover">
              <a class="nav-link" href="khaterat-list.php">خاطرات<span class="mx-auto lines"></span></a>
            </li>
            <li class="nav-item linkHover">
              <a class="nav-link" href="Amaliyat-list.php">عملیات ها<span class="mx-auto lines"></span></a>
            </li>
            <li class="nav-item d-flex">
                <div class="my-auto inputCstm">
                    <button type="submit" class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#demo"><i class="fa fa-search"></i></button>
                </div>
            </li>
          </ul>

          <div class="navbar-brand display-mob-none mx-1 d-flex">
              <a class="yekPelak" href="index.php"></a>
          </div>
          
        </div>
        
      </div>
      
    </div>


  </nav> <!-- navigation -->

<div id="demo" class="collapse dropSearch px-0 bg-white w-100" style="position: fixed; z-index: 2;">
  <form action="" class="form-group px-2 mb-3 pt-1 container">
      <!-- <input type="search" class="form-control w-100 inptCstm inptLight" id="searchMob" placeholder="جستجو..."> -->
      <div class="input-group">
          <input type="search" id="searchInput" class="form-control inputCstm" placeholder="جستجو...">
          <button type="submit" class="btn btn-light"><i class="fa fa-search"></i></button>
      </div>
  </form>
</div>