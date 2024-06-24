<?php include_once('templates/header.php'); ?>

	<?php include_once('templates/menuTop.php'); ?>


	<div id="topPage">	
		<div id="buttonGradiant">
			<div class="container">

				<div class="row">
					<div class="col-sm-4 d-flex">
						<div class="imgContent p-lg-3 p-xl-5 m-auto py-4">
							<img src="images/post-1.png" class="w-100 border20" alt="city">
						</div>
					</div> <!--city Image -->

					<div class="col-sm-8 d-flex ">
						<div class="w-100 my-auto pt-4 px-3">
							<div class="subtitle">زندگی نامه زنده یاد...</div>
							<div class="title">
								شهید 
								<span class="titleSpan">محسن حججی</span>

								<?php $profile = array('نام شهید:' => ' علی محمد زاده','متولد:' => '21 فروردین 1350','محل زندگی:' => 'ماکو','محل شهادت:' => 'خرمشهر ','تاریخ شهادت:' => '1362 '); ?>
								<ul class="profile nav mb-3">
									<?php foreach($profile as $key=>$val) {?>

									<li class="py-1">
										<i class="fa fa-circle"></i>
										<span class="blackText"><?= $key; ?></span>
										<?= $val; ?>
									</li>

									<?php }?>
								</ul>

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
	</div> <!-- topPage - Moarefi Shahid -->



	<div class="paragraf container px-3 py-0 ">				

		<div class="cstmTitle1 d-flex justify-content-between mt-5 mb-4 pb-2">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				زندگی نامه <span class="text-dark">شهید</span> 
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

		<div class="cstmTitle1 d-flex justify-content-between mt-5 mb-4 pb-2">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				<span class="text-dark">وصیت‌نامه</span> 
			</h5>
		</div> <!-- title card list-->

		<?php for($i = 0; $i < 3; $i++): ?>
		<p class="p-0 m-0 mb-5">
			مراسم تشییع جنازه محسن حججی، در تاریخ 5 مهر 1396 در پایتخت ایران برگزار گردید. بسیاری از مقام‌های ارشد جمهوری اسلامی، نظیر علی و صادق لاریجانی، روسای مجلس شورای اسلامی و قوه قضاییه، در این مراسم حضور پیدا کردند. علی خامنه‌ای رهبر جمهوری اسلامی نیز قبل از مراسم تشییع جنازه در جمع اعضای خانوادهٔ محسن حججی و در کنار تابوت او حضور پیدا کرد.[29][30][31][32] همچنین پیکر حججی در تاریخ 4 مهر در مشهد[33] و حرم علی بن موسی الرضا و در تاریخ 6 مهر در اصفهان و نجف آباد تشییع و خاکسپاری شد.[27] 
		</p>
		<?php endfor; ?>

	</div> <!-- Paragraf -->


	<div class="sabtKhatere container px-0 py-0 ">				

		<div class="cstmTitle1 d-flex justify-content-between mt-5 mb-4 px-3 pb-2">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				<span class="text-dark">ثبت خاطره برای شهید</span> 
			</h5>
		</div> <!-- title card list-->

		<form action="" class="form-group m-3 p-0">
			<div class="input-group p-0">
				<input type="search" class="form-control inptCstm inptLight m-2" placeholder="نام و نام خانوادگی خود را وارد کنید...">
				<input type="search" class="form-control inptCstm inptLight m-2" placeholder="نسبت خود با شهید را وارد کنید ...">
			</div>
			<div class="input-group">
				<textarea name="" id="" rows="5" class="form-control inptCstm inptLight m-2" placeholder="خاطره شهید را بنویسید ..."></textarea>
			</div>
			<label class="form-label mx-3 my-2" for="customFile"><i class="fa fa-exclamation-triangle"></i> آپلود فایل با فرمت های MP4/MP3 و JPG/PNG با حجم 100 مگابایت</label>
			<div class="input-group">
				<input type="file" class="form-control inptCstm inptLight m-2" id="customFile" />
				<button type="submit" class="btn inptCstm inptBrown m-2 px-5">ثبت</button>
			</div>
		</form>

	</div> <!-- sabte khatere -->


	<div class="cities">
		<div class="container p-0 pb-1">

			<div class="cstmTitle1 d-flex justify-content-between mb-3 px-4">
				<h5 class="my-auto text-white">
					<i class="fa fa-circle text-white"></i>
					ختم قرآن و صلوات ..						</h5>
				<!-- <a href="#" class="btn btn-sm btn-cstm1">مشاهده همه شهدا<i class="fa fa-arrow-left"></i></a> -->
			</div>

			<div class="d-flex align-items-start mx-4 pb-4">
				<p class="text-white">
					لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله دابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد.
				</p>

				<a href="" class="btn btn-dark border20" style="min-width: 150px;margin-right: 15px;">شروع قرآن و صلوات</a>
			</div>
			
		</div>
	</div> <!-- cities Lists-->

<?php include_once('templates/footer.php'); ?>