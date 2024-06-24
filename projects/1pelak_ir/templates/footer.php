    <div class="footer ">

		<div class="container">
			<div class=" row">

				<div class="col-lg-6 col-xl-3 pt-3">
					<h6>درباره ما</h6>
					<p class="text-secondary m-0 text-left">
						مراسم تشییع جنازه محسن حججی، در تاریخ 5 مهر 1396 در پایتخت ایران برگزار گردید. بسیاری از مقام‌های ارشد جمهوری اسلامی، نظیر علی و صادق لاریجانی، روسای مجلس شورای اسلامی و قوه قضاییه، در این مراسم حضور پیدا کردند. علی خامنه‌ای رهبر جمهوری اسلامی نیز قبل از مراسم تشییع جنازه در جمع اعضای خانوادهٔ محسن حججی و در کنار تابوت او حضور پیدا کرد.
					</p>
					<a href="#" class="btn py-2 details">اطلاعات بیشتر...<i class="fa fa-arrow-left mx-2"></i></a>
				</div> <!-- col 1 -->


				<div class="col-lg-6 col-xl-3 pt-3">
					<h6>دسته بندی</h6>

					<?php $profile = array('درباره ی ما ','پنل کاربران','اطلاعات تحویل','خاطرات شهید','یادها مانده','نوحه ها','درباره ی ما ','پنل کاربران','اطلاعات تحویل','خاطرات شهید','یادها مانده'); ?>
					<ul class="nav p-0 row">
						<?php foreach($profile as $val) {?>
						<li class="py-1 col-6">
							-<a href="" class="btn py-0"><?= $val; ?></a>
						</li>
						<?php }?>
					</ul>
				</div> <!-- col 2 -->


				<div class="col-lg-6 col-xl-3 pt-3">
					<h6>دسترسی سریع</h6>
					<?php $profile = array('درباره ی ما ','پنل کاربران','اطلاعات تحویل','خاطرات شهید','یادها مانده','نوحه ها','درباره ی ما ','پنل کاربران','اطلاعات تحویل','خاطرات شهید','یادها مانده','نوحه ها'); ?>
					<ul class="nav p-0 row">
						<?php foreach($profile as $val) {?>
						<li class="py-1 col-6">
							-<a href="" class="btn py-0"><?= $val; ?></a>
						</li>
						<?php }?>
					</ul>
				</div> <!-- col 3 -->


				<div class="col-lg-6 col-xl-3 pt-3">
					<h6>ارتباط با ما</h6>
          <div class="row p-0 m-0">
              <div class="col-sm-6 col-lg-6 col-xl-12 px-0">
                <ul class="nav p-0">
                  <li class="py-1 w-100"><a href="" class="btn p-0"><i class="fa fa-envelope mx-2"></i> info@1pelak.com</a></li>
                  <li class="py-1 w-100"><a href="" class="btn p-0"><i class="fa fa-phone mx-2"></i>09100000000 - 09100000000</a></li>
                  <li class="py-1 w-100"><a href="" class="btn p-0"><i class="fa fa-globe mx-2"></i>info@1pelak.com</a></li>
                </ul>                
              </div>
              <div class="col-sm-6 col-lg-6 col-xl-12 px-0">
                <ul class="nav row p-0 mx-auto mt-3" style="max-width: 300px;">
                  <li class="p-1 col"><a href="" class="btn btn-light btn-lg p-0 pt-1"><i class="fa fa-instagram mx-2"></i></a></li>
                  <li class="p-1 col"><a href="" class="btn btn-light btn-lg p-0 pt-1"><i class="fa fa-phone mx-2"></i></a></li>
                  <li class="p-1 col"><a href="" class="btn btn-light btn-lg p-0 pt-1"><i class="fa fa-telegram mx-2"></i></a></li>
                  <li class="p-1 col"><a href="" class="btn btn-light btn-lg p-0 pt-1"><i class="fa fa-twitter mx-2"></i></a></li>
                  <li class="p-1 col"><a href="" class="btn btn-light btn-lg p-0 pt-1"><i class="fa fa-linkedin mx-2"></i></a></li>
                </ul>
              </div>
          </div>
				</div> <!-- col 4 -->

			</div> <!-- row -->

			<div class="iconfoot d-flex justify-content-between px-1 py-4">
				<a href="index.php" class="text-secondary text-decoration-none m-0">سامانه اطلاعات جامع شهدای ایران اسلامی</a>
				<a href="index.php" class="iconSite"></a>
			</div>

		</div>
    </div> <!-- footer -->

    <!-- Swiper JS -->
    <script src="bootstrap-swiper-font-awsome/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper1", {
        speed: 600,
        parallax: true,
        autoplay: {
          delay: 10000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 2,
        spaceBetween: 0,
        freeMode: true,
        watchSlidesProgress: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          0: {slidesPerView: 1,spaceBetween: -7,},
          370: {slidesPerView: 2,spaceBetween: -7,},
          // 575: {slidesPerView: 2,spaceBetween: 10,},
          640: {slidesPerView: 2,spaceBetween: 10,},
          767: {slidesPerView: 3,spaceBetween: 10,},
          1024: {slidesPerView: 4,spaceBetween: 10,},
          1199: {slidesPerView: 5,spaceBetween: 10,},
        },
      });


      var swiper = new Swiper(".mySwiper3", {
        slidesPerView: 3,
        grid: {
          rows: 2,
        },
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

    </script>
</body>
</html>