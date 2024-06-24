<?php include_once('templates/header.php'); ?>

	<?php include_once('templates/menuTop.php'); ?>


	<div id="topPage">	
		<div id="buttonGradiant">
			<div class="container">

				<div class="row">
					<div class="col-sm-4 cityImage d-flex">
						<div class="imgContent p-lg-3 p-xl-5 m-auto py-4" >
							<img src="images/city.jpg" class="w-100 border20" alt="city">
							<div class="imageShakhes overflow-hidden">
								<img src="images/shahid-img.jpg" class="w-100" alt="imgaeShakhes">
							</div>
						</div>
					</div> <!--city Image -->

					<div class="col-sm-8 d-flex ">
						<div class="w-100 my-auto pt-4 px-3">
							<div class="subtitle">چهارمحال و بختیاری</div>
							<div class="title">
								شهرستان 
								<span class="titleSpan">کیار</span>
								<span class="line"></span>
							</div>
							<div class="text">
								<p class="">
									شهادت «محسن حججی» کربلایی در دل‌های اهل دل برپا کرده است تا آنجا که وقتی سری به صفحات اینستاگرام و یا شبکه‌های ارتباطی می‌زنیم بیشتر از هر اسم دیگری نام شهید حججی و تصویر او را می‌بینیم. شهید محسن حججی که پس از دو روز اسارت به‌دست نیروهای تکفیری داعش به شهادت رسید، حرف‌های ناگفته خود را در وصیت‌نامه‌اش نوشته و این وصیت‌نامه هم‌اکنون به دست تمام ملت ایران رسیده است. در ادامه، متن این وصیت‌نامه را می‌خوانید: ...
								</p>
							</div>
						</div>
					</div>
				</div>							
					
			</div>
		</div> <!-- buttonGradiant -->
	</div> <!-- topPage - city -->


	<div class="cardShahids mb-3 p-3 pt-0 border10 container" style="--swiper-navigation-color: #000; --swiper-pagination-color: #cf830b">				

		<div class="cstmTitle1 d-flex justify-content-between mt-5 mb-4 pb-2">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				آخرین <span class="text-dark">شهدای</span> وارد شده... 
			</h5>
		</div> <!-- title card list-->
	
		<div class="row">

			<?php for($i = 0; $i < 24; $i++): ?>
			<div class="cardShahid col-6 col-md-4 col-lg-3 col-xl-2 mb-4">

					<div class="card ctmPost border-0 border20" >
						<a href="shahid.php" class="border20 text-dark text-decoration-none">
							<div class="card-body px-0 mx-3 overflow-hidden text-center" >
								<img src="images/shahid-img.jpg" class="rounded-circle shahidImg" alt="">
								<h6 class="card-text text-nowrap" style="text-align: center;">شهید مصطفی صدرزاده</h6>
								<ul class="ulCstm1 p-0">
									<li>سن 28</li>
									<li>شهادت 1394</li>
								</ul>
								<span class="zendLink">زندگی نامه شهید<i class="fa fa-arrow-left mx-2"></i></span>
							</div> <!-- cardBody -->
						</a>
					</div> <!-- card ctmPost -->

			</div> <!-- swiper-card-post -->
			<?php endfor;?>
			
		</div>
	</div> <!--cards shahid  swiper mySwiper2 -->


	<?php include_once('templates/pagination.php'); ?>

<?php include_once('templates/footer.php'); ?>