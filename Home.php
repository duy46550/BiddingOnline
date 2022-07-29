<?php
//check quý
$dt =  date('m');
if ($dt >= 1 && $dt <= 3) {
    $Q = " 1 - ";
} elseif ($dt >= 4 && $dt <= 6) {
    $Q = " 2 - ";
} elseif ($dt >= 7 && $dt <= 9) {
    $Q = " 3 - ";
} elseif ($dt >= 10 && $dt <= 12) {
    $Q = " 4 - ";
}
?>
<!--Banner -->
<section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/wellcome.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="hero-content">
                    <h6> <?php echo $lang_material_quarter;  echo $Q; echo $yeartitle;  echo date("Y"); ?> </h6>
                    <h2> <?php echo $lang_banner_title; ?></h2>
                    <a href="material.php" class="btn Detail-btn"><?php echo $lang_banner_view; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-padding-40 clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Catagory -->
            <div class=" col-sm-6 col-md-3 mt-15">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img card" style="background-image: url(img/bg-img/bg1.jpg);">
                    <div class="catagory-content">
                        <a href="material.php?category=1"><?php echo $lang_header_category_paper; ?></a>
                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class=" col-sm-6 col-md-3 mt-15">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img card" style="background-image: url(img/bg-img/bg3.jpg);">
                    <div class="catagory-content">
                        <a href="material.php?category=2"><?php echo $lang_header_category_fabric; ?></a>
                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class=" col-sm-6 col-md-3 mt-15">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img card" style="background-image: url(img/bg-img/bg2.jpg);">
                    <div class="catagory-content">
                        <a href="material.php?category=3"><?php echo $lang_header_category_leather; ?></a>
                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class=" col-sm-6 col-md-3 mt-15">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img card" style="background-image: url(img/bg-img/bg4.jpg);">
                    <div class="catagory-content">
                        <a href="material.php?category=4"><?php echo $lang_header_category_machine; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>