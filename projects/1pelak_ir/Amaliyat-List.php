<?php include_once('templates/header.php'); ?>

	<?php include_once('templates/menuTop.php'); ?>


	<div class="toltip-Amaliyatha container p-0 mt-5">
		<div class="cstmTitle1 d-flex justify-content-between mb-3 px-3">
			<h5 class="my-auto">
				<i class="fa fa-circle"></i>
				لیست <span class="text-dark">عملیات ها</span>
			</h5>
		</div>
		<p class=" px-3">
			لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد.
		</p>
	</div> <!-- toltip-Amaliyatha -->
	
	<div class="AmaliyatList container px-3 py-4">
		<div class="row">
			<?php for($i = 0; $i < 20; $i++): ?>
			<div class="postAmaliyat col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4">
				<a href="amaliyat.php" class="card border-0">
					<div class="card border-0 border20">
						<img class="card-img-top" src="images/img/size-amaliyat-post.svg" alt="Card image">
						<div class="card-img-overlay border20 p-0 overflow-hidden">
							<img class="img card-img-top w-100 h-100" src="images/galery/amaliyat-slider01.jpg" alt="Card image">
						</div>
					</div>
					<p class="text-nowrap overflow-hidden mx-2 my-2">
						لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد.
					</p>
					<div class="footerPost d-flex justify-content-between mx-2 px-0 py-2 bg-transparent">
						<span>مشاهده اطلاعات بیشتر</span>
						<span class=""><i class="fa fa-arrow-left"></i></span>
					</div>
				</a>

			</div> <!-- postAmaliyat -->
			<?php endfor; ?>
		</div>
	</div> <!-- AmaliyatList -->


	<?php include_once('templates/pagination.php'); ?>

<?php include_once('templates/footer.php'); ?>