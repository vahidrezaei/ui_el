<?php include_once('templates/header.php'); ?>

	<div id="topSlider">	
		<div id="buttonGradiant">
			<div style="--swiper-navigation-color: #000; --swiper-pagination-color: #cf830b" class="swiper mySwiper1 container">
				<!-- <div class="parallax-bg" style="background-image: url('images/img/index-top.jpg');"data-swiper-parallax="-23%"></div> -->
				<div class="swiper-wrapper">
					<?php for($i = 0; $i < 4; $i++):?>
					<div class="swiper-slide">
						<div class="row">
							<div class="col-sm-4 d-flex">
								<div class="imgContent p-lg-5 m-auto py-4" >
									<img src="images/post-1.png" data-swiper-parallax="-200" class="w-100" alt="">
								</div>
							</div>

							<div class="col-sm-8 d-flex ">
								<div class="w-100 my-auto pt-4 px-3">
									<div class="subtitle" data-swiper-parallax="-400">زندگی نامه زنده یاد ...</div>
									<div class="title" data-swiper-parallax="-300">
										شهید 
										<span class="titleSpan">محسن حججی</span>
										<span class="line"></span>
									</div>
									<div class="text" data-swiper-parallax="-200" style="min-width: 100%; margin:none;">
										<p class="">
											شهادت «محسن حججی» کربلایی در دل‌های اهل دل برپا کرده است تا آنجا که وقتی سری به صفحات اینستاگرام و یا شبکه‌های ارتباطی می‌زنیم بیشتر از هر اسم دیگری نام شهید حججی و تصویر او را می‌بینیم. شهید محسن حججی که پس از دو روز اسارت به‌دست نیروهای تکفیری داعش به شهادت رسید، حرف‌های ناگفته خود را در وصیت‌نامه‌اش نوشته و این وصیت‌نامه هم‌اکنون به دست تمام ملت ایران رسیده است. در ادامه، متن این وصیت‌نامه را می‌خوانید: ...
										</p>
									</div>
									<div class="text" data-swiper-parallax="-100"><a class="btn btn-light btn-cstm1" href="index.php">مطالعه بیشتر...</a></div>
								</div>
							</div>
						</div>							
					</div>
					<?php endfor; ?>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-pagination"></div>
			</div>
		</div> <!-- buttonGradiant -->
	</div> <!-- topSlider -->


	<div class="cardShahids container mb-4">
		<div class="cstmTitle1 d-flex justify-content-between mt-5 mb-3">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				آخرین <span class="text-dark">شهدای</span> وارد شده... 
			</h5>
			<a href="#" class="btn btn-sm btn-cstm1">مشاهده همه شهدا<i class="fa fa-arrow-left"></i></a>
		</div> <!-- title card-Shahids -->

		<div class="swiper mySwiper2 mb-3 p-3 border10" style="--swiper-navigation-color: #000; --swiper-pagination-color: #cf830b">
			<div class="swiper-wrapper pb-4">
				
				<?php for($i = 0; $i < 6; $i++): ?>
				<div class="swiper-slide cardShahid">
					<div class=" mb-2  w-100">
						
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

					</div> <!-- post -->
				</div> <!-- swiper-card-post -->
				<?php endfor;?>

			</div> <!--  swiper-wrapper -->
			<div class="swiper-button-next rounded-circle"></div>
			<div class="swiper-button-prev rounded-circle"></div>
			<div class="swiper-pagination"></div>
		</div> <!-- swiper mySwiper2 -->
	</div> <!--cards shahids -->


	<div class="cities">
		<div class="container p-0">

			<div class="cstmTitle1 d-flex justify-content-between mb-3 px-3">
				<h5 class="my-auto text-white">
					<i class="fa fa-circle text-white"></i>
					آخرین شهرهای وارد شده... 
				</h5>
				<a href="#" class="btn btn-sm btn-cstm1">مشاهده همه شهدا<i class="fa fa-arrow-left"></i></a>
			</div>
			
			<div class="px-3 scrollCstm1 pb-5">
				<div class="row minWidth">
					<?php for($i = 0; $i < 12; $i++): ?>
					<div class="col-4 my-2">
						<a href="#" class="card border-0 border10 text-decoration-none overflow-hidden">
							<div class="card-body d-flex justify-content-between runfx p-0">
								<div class="row w-100">
									<div class="col-4 m-0 p-0">
										<div class="card imgCardCity border-0 overflow-hidden rounded-0" style="height: 65px;">
											<img class="card-img-top img1" src="images/shahid-img-2.jpg" alt="Card image">
											<div class="card-img-overlay imgOver p-0 rounded-0">
												<img src="images/img/bg-list-size.svg"style="height: 65px;" alt="">
											</div>	
										</div>
									</div> <!-- image Cite Shahid -->

									<div class="col-8 m-0 px-2 cstmList1 my-auto overflow-hidden">
										<h6 class="mb-1 runleft runLfx text-nowrap subTitle">
											<i class="fa fa-caret-left text-dark"></i>
											شهید مدافع حرم مصطفی صدرزاده 
										</h6>
										<h6 class="m-0 runleft text-nowrap">
											<i class="fa fa-map-marker text-dark"></i>
											آذربایجان غربی/شهرستان <span class="text-dark">ماکو</span>
										</h6>
									</div> <!-- tozihat shahr-->
								</div>
								<i class="fa fa-angle-left d-block mx-3 runLfx arrowCstm my-auto"></i>
							</div>
						</a>
					</div>
					<?php endfor; ?>
				</div>
			</div>
			
		</div>
	</div> <!-- cities Lists-->


	<div class="khaterat container px-0 pt-3">
		<div class="cstmTitle1 px-3 d-flex justify-content-between mt-5 mb-3">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				خاطرات <span class="text-dark">شهدا...</span> 
			</h5>
			<a href="#" class="btn btn-sm btn-cstm1">مشاهده همه خاطرات<i class="fa fa-arrow-left"></i></a>				
		</div> <!--title khaterat -->

		<div class="scrollCstm1 px-3 py-4">
			<div class="row minWidth">
				<?php for($i = 0; $i < 3; $i++): ?>
				<div class="col-4 mb-4 ctmPosts">		
					<div class="card border20 ctmPost" >
						<img class="card-img-top" src="images/img/post-size.svg" alt="Card image">
						<a href="#" class="card border-0 card-img-overlay p-0 border20 overflow-hidden text-dark text-decoration-none">
							<div class="card-header bg-white mx-4 px-0 d-flex justify-content-bettween">
								<div class="img my-auto">
									<img src="images/shahid-img.jpg" class="" alt="">
								</div> 
								<div class="text my-auto overflow-hidden pt-1">
									<span class="subTitle text-nowrap border20">شهید مدافع حرم مصطفی صدرزاده</span>
									<h6 class="mt-1 text-nowrap">خاطره عملیات ولفجر 19 منطقه عراق و ایران</h6>
								</div>
							</div>
							
							<div class="card-body px-0 mx-4 overflow-hidden" >
								<p class="m-0">
								نویدشاهـد- مراسم تشییـع پیکر شهید«حاج رضا فرزانه» روز جـمعه بیسـت و دوم مرداد ماه، با حضور مردم و همرزمان آن شهید گرانقدر در شـهرک شهید محـلاتی تهران بـرگزار شـد. شهید «رضـا فرزانه» از شهدای مـدافع حرم بود کـه سال 1394 در سوریه شهید و مفقودالجسد شد. پـیکر این شهید والامقام از طریق آزمـایش شـناسایی و بـه وطن بـازگشت. تـصاویری از آئین تشییع پیکر این شهید عزیز را می بینید ...
								نویدشاهـد- مراسم تشییـع پیکر شهید«حاج رضا فرزانه» روز جـمعه بیسـت و دوم مرداد ماه، با حضور مردم و همرزمان آن شهید گرانقدر در شـهرک شهید محـلاتی تهران بـرگزار شـد. شهید «رضـا فرزانه» از شهدای مـدافع حرم بود کـه سال 1394 در سوریه شهید و مفقودالجسد شد. پـیکر این شهید والامقام از طریق آزمـایش شـناسایی و بـه وطن بـازگشت. تـصاویری از آئین تشییع پیکر این شهید عزیز را می بینید ...
								</p>
							</div> <!-- cardBody -->

							<div class="card-footer mx-4 px-0 bg-white dateTime d-flex justify-content-between">
								<span>
									<i class="fa fa-calendar mx-1"></i>
									تاریخ:
									<span class="timeCstm">1401/05/06</span>
								</span>
								<i class="fa fa-arrow-left my-auto mx-1 next"></i>
							</div> <!-- footer date -->
						</a>
					</div> <!-- posts khaterat -->
				</div>
				<?php endfor; ?>
			</div>
		</div>
	</div> <!--khaterat -->
	

	<div class="weblag cities">
		<div class="container p-0">

			<div class="cstmTitle1 d-flex justify-content-between mb-3 px-3">
				<h5 class="my-auto">
					<i class="fa fa-circle"></i>
					مطالب <span class="text-dark">وبلاگ...</span>
				</h5>
				<a href="#" class="btn btn-sm btn-cstm1">مشاهده همه مطالب<i class="fa fa-arrow-left"></i></a>
			</div>
			
			<div class="scrollCstm1 pb-5">
				<div class="row minWidth blag">
					<?php for($i = 0; $i < 9; $i++): ?>
					<div class="col-4 my-2">
						<a href="#" class="card bg-transparent border-0 border10 text-decoration-none overflow-hidden">
							<div class="card-body d-flex justify-content-between runfx p-0">
								<div class="d-flex justify-content-between w-100">
									<div class=" m-0 p-0">
										<img src="images/shahid-img.jpg" class="border20" style="width:80px;height:80px;" alt="">
									</div> <!-- image Cite Shahid -->

									<div class=" m-0 px-2 cstmList1 my-auto overflow-hidden">
										<h6 class="m-0 runLfx text-nowrap text-dark">
											<i class="fa fa-caret-left"></i>
											عنوان آزمایشی
										</h6>
										<div class="m-0 text-nowrap my-1 text-dark">
											شهید «حاج رضا فرزانه» در خانه ابدی آرمید/گزارش تصویری در شبکه 5 آذربایجان
										</div>
										<div class="mb-1 text-nowrap subTitle text-secondary">
											<i class="fa fa-clock-o"></i> 2 آبان 1401
											<i class="fa fa-eye"></i> 356 بازدید
											<i class="fa fa-heart-o"></i> 64 لایک
										</div>
									</div> <!-- tozihat shahr-->
								</div>
							</div>
						</a>
					</div>
					<?php endfor; ?>
				</div>
			</div>
			
		</div>
	</div> <!-- weblags -->


	<div class="fal container p-0 mt-5">
		<div class="cstmTitle1 d-flex justify-content-between mb-3 px-3">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				فال <span class="text-dark">شهدا...</span>
			</h5>
		</div>
		<p class=" px-3">
			لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد.
		</p>

		<form action="" class="form-group m-3">
			<div class="input-group">
				<input type="search" class="form-control inptCstm inptLight" placeholder="نام و نام خانوادگی خود را وارد کنید...">
				<button type="submit" class="btn inptCstm inptBrown mx-2 px-5">گرفتن فال</button>
			</div>
		</form>
	</div> <!-- fal -->
			
<?php include_once('templates/footer.php'); ?>