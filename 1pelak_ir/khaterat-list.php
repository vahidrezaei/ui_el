<?php include_once('templates/header.php'); ?>

	<?php include_once('templates/menuTop.php'); ?>


	<div class="toltip-khaterat container p-0 mt-5">
		<div class="cstmTitle1 d-flex justify-content-between mb-3 px-3">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				خاطرات <span class="text-dark">شهدا...</span>
			</h5>
		</div>
		<p class=" px-3">
			لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد.
		</p>

		<div class="scrollCstm1">
			<ul class="nav px-1 py-3 py-sm-4" style="min-width: 500px">
				<li class="nav-item"><a href="#" class="btn inptCstm inptLight mx-1 px-sm-2 px-md-4 px-lg-5">همه خاطرات</a></li>
				<li class="nav-item"><a href="#" class="btn inptCstm inptBrown mx-1 px-sm-2 px-md-4 px-lg-5">خاطرات دفاع مقدس</a></li>
				<li class="nav-item"><a href="#" class="btn inptCstm inptLight mx-1 px-sm-2 px-md-4 px-lg-5">خاطرات پربازدید</a></li>
				<li class="nav-item"><a href="#" class="btn inptCstm inptLight mx-1 px-sm-2 px-md-4 px-lg-5">جدید ترین خاطرات</a></li>
			</ul>
		</div>
	</div> <!-- toltip-khaterat -->
	
	<div class="khaterat kh-list container px-3 py-4">
		<div class="row">
			<?php for($i = 0; $i < 10; $i++): ?>
			<div class="col-sm-6 col-md-6 col-lg-4 mb-4 ctmPosts">		
				<div class="card border20 ctmPost" >
					<img class="card-img-top" src="images/img/post-size.svg" alt="Card image">
					<a href="khaterat.php" class="card border-0 card-img-overlay p-0 border20 overflow-hidden text-dark text-decoration-none">
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
	</div> <!--khaterat -->


	<?php include_once('templates/pagination.php'); ?>

<?php include_once('templates/footer.php'); ?>