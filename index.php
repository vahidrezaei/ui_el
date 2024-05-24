<?php include_once("includes/header.php");?>
<?php
    $vector = [
        'v-1-start'=>'استارت و دینام',
        'v-2-pomp-benzin'=>'پمپ بنزین',
        'v-3-dama-cooler'=>'بخاری و کولر',
        'v-4-dashboard'=>'سیم کشی و داشبورد',
        'v-5-t-wire'=>'تقویت سیم کشی',
        'v-6-snow'=>'شیشه بالابر و برف پاکن',
        'v-7-etesal'=>'رفع اتصالی سیم کشی',
        'v-8-change'=>'تعویض سیم کشی',
        'v-9-change-light'=>'تعویض  کلیه لامپ ها',
        'v-10-ecu'=>'تعمیر ایسیو',
        'v-11-sensor'=>'تعمیر و تعویض کلیه سنسور ها',
        'v-12-fuse-box'=>'تعمیر کلیه جعبه فیوز ها و دسته راهنما',
        'v-13-t-km'=>'تعمیر کیلومتر',
        'v-14-chair'=>'تعمیر صندلی برقی',
        'v-15-sensor-back'=>'تعمیر سنسور دنده عقب و گرمکن شیشه عقب',
        'v-16-dashboard-new'=>'تعویض رودری و داشبورد قدیمی به جدید',
        'v-17-meh'=>'نصب مه شکن',
        'v-18-engin'=>'تنظیم موتور',
        'v-19-battery'=>'باطری',
        'v-20-car-alive'=>'احیای خودرو های فرسوده و نوستالژیک',
    ];
?>
<div class="container maxWidth450 p-0">

    <div class="khadamat-img d-flex justify-content-center">
        <span class="khadamat-txt align-self-end">
            <span class="khadamat-color">خدمات خودرو در محل شما</span>
        </span>
    </div> <!-- image-khadamat -->
    
    <div class="khadamat-items">
        <div class="row row-cols-3 m-cstm">
            <?php foreach($vector as $key => $val) {?>
                
				<div class="col p-2">
                    <a class="k-item overflow-hidden" href="#">
                        <div class="m-1"><img src="images/img/<?= $key ?>.svg" class="img-v w-50" alt=""></div>
                        <span class="txt text-nowrap"><?= $val ?></span>
					</a>
				</div>
                
			<?php }?>
        </div>
    </div> <!-- khadamat-items -->

</div> <!-- container -->

<?php include_once("includes/footer.php");?>

