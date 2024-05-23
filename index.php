<?php include_once("includes/header.php");?>

<div class="container maxWidth450 p-0">

    <div class="khadamat-img d-flex justify-content-center">
        <span class="khadamat-txt align-self-end">
            <span class="khadamat-color">خدمات خودرو در محل شما</span>
        </span>
    </div> <!-- image-khadamat -->
    
    <div class="khadamat-items">
        <div class="row row-cols-3 m-cstm">
            <?php for($i = 1; $i <= 6; $i++) {?>
                
				<div class="col p-2">
                    <a class="k-item overflow-hidden" href="#">
                        <div class="m-1"><img src="images/img/v-<?=$i?>.svg" class="img-v w-50" alt=""></div>
                        <span class="txt text-nowrap">استارت و دینام</span>
					</a>
				</div>
                
			<?php }?>
        </div>
    </div> <!-- khadamat-items -->

</div> <!-- container -->

<?php include_once("includes/footer.php");?>

