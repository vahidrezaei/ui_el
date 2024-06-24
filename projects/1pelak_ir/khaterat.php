<?php include_once('templates/header.php'); ?>

	<?php include_once('templates/menuTop.php'); ?>


	<div id="topPage">	
		<div id="buttonGradiant">
			<div class="container">

				<div class="row">
					<div class="col-sm-4 d-flex">
						<div class="imgContent p-lg-3 p-xl-5 m-auto py-4">
							<img src="images/galery/slider 01.jpg" class="w-100 border20" alt="city">
						</div>
					</div> <!--city Image -->

					<div class="col-sm-8 d-flex ">
						<div class="w-100 my-auto pt-4 px-3">
							<div class="title t2">
								خاطره 
								<span class="titleSpan">بیت المقدس شهید علی محمد زاده</span>
							</div>

							<?php $profile = array('خاطره شهید:' => 'شهید علی محمد زاده','متولد:' => '21 فروردین 1350','محل زندگی:' => 'ماکو','محل شهادت:' => 'خرمشهر ','راوی:' => 'مادر شهید'); ?>
							<ul class="profile nav mb-3">
								<?php foreach($profile as $key=>$val) {?>

								<li class="py-1">
									<i class="fa fa-circle"></i>
									<span class="blackText"><?= $key; ?></span>
									<?= $val; ?>
								</li>

								<?php }?>
							</ul>
							
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
	</div> <!-- topPage - Moarefi Shahid -->


	<div class="paragraf container px-3 py-0 ">				
		
		<div class="cstmTitle1 d-flex justify-content-between mt-5 mb-4 pb-2">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				شروع <span class="text-dark">خاطره</span> 
			</h5>
		</div> <!-- title card list-->
		
		<?php for($i = 0; $i < 3; $i++): ?>
		<p class="p-0 m-0 mb-5">
			مراسم تشییع جنازه محسن حججی، در تاریخ 5 مهر 1396 در پایتخت ایران برگزار گردید. بسیاری از مقام‌های ارشد جمهوری اسلامی، نظیر علی و صادق لاریجانی، روسای مجلس شورای اسلامی و قوه قضاییه، در این مراسم حضور پیدا کردند. علی خامنه‌ای رهبر جمهوری اسلامی نیز قبل از مراسم تشییع جنازه در جمع اعضای خانوادهٔ محسن حججی و در کنار تابوت او حضور پیدا کرد.[29][30][31][32] همچنین پیکر حججی در تاریخ 4 مهر در مشهد[33] و حرم علی بن موسی الرضا و در تاریخ 6 مهر در اصفهان و نجف آباد تشییع و خاکسپاری شد.[27] 
		</p>
		<?php endfor; ?>

	</div> <!-- Paragraf -->


	<div class="cardShahids container mb-4">
		<div class="cstmTitle1 d-flex justify-content-between mt-5 mb-3">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				گالری تصاویر <span class="text-dark">شهید</span>
			</h5>
		</div> <!-- title card Shahids -->

		<div class="swiper mySwiper2 mb-3 p-3 border10" style="--swiper-navigation-color: #000; --swiper-pagination-color: #cf830b">
			<div class="swiper-wrapper pb-4">
				
				<?php for($i = 0; $i < 6; $i++): ?>
				<div class="swiper-slide ">

					<div class="card border-0 border20 overflow-hidden" >
						<img class="card-img-top" src="images/img/post-size.svg" alt="Card image">
						<a href="#" class="card-img-overlay p-0">
							<img src="images/galery/slider 01.jpg" class="w-100" alt="slider01">
						</a>
					</div> <!-- posts khaterat -->

				</div> <!-- swiper-card-post -->
				<?php endfor;?>

			</div> <!--  swiper-wrapper -->
			<div class="swiper-button-next rounded-circle"></div>
			<div class="swiper-button-prev rounded-circle"></div>
			<div class="swiper-pagination"></div>
		</div> <!-- swiper mySwiper2 -->

	</div> <!--cards shahids -->


	<div class="paragraf container px-3 py-0 ">				
				
		<?php for($i = 0; $i < 3; $i++): ?>
		<p class="p-0 m-0 mb-5">
			مراسم تشییع جنازه محسن حججی، در تاریخ 5 مهر 1396 در پایتخت ایران برگزار گردید. بسیاری از مقام‌های ارشد جمهوری اسلامی، نظیر علی و صادق لاریجانی، روسای مجلس شورای اسلامی و قوه قضاییه، در این مراسم حضور پیدا کردند. علی خامنه‌ای رهبر جمهوری اسلامی نیز قبل از مراسم تشییع جنازه در جمع اعضای خانوادهٔ محسن حججی و در کنار تابوت او حضور پیدا کرد.[29][30][31][32] همچنین پیکر حججی در تاریخ 4 مهر در مشهد[33] و حرم علی بن موسی الرضا و در تاریخ 6 مهر در اصفهان و نجف آباد تشییع و خاکسپاری شد.[27] 
		</p>
		<?php endfor; ?>

	</div> <!-- Paragraf -->


	<div class="labels container px-3 py-0 mb-5">				
		
		<ul class="nav">
			<li class="nav-items">
				<i class="fa fa-bookmark text-dark"></i>
				<span class="text-dark t2">برچسب ها : </span>
			</li>
			<?php for($i = 0; $i < 7; $i++){ ?>
			<li class="nav-items t1">
				<a href="" class="nav-link">#شهید</a>
			</li>
			<?php }?>
		</ul>

	</div> <!-- Paragraf -->



<?php include_once('templates/footer.php'); ?>