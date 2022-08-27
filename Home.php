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
include('./conn_erp.php');
?>

<!--Banner -->
<!-- <section class="welcome_area bg-img background-overlay" style="background-color: #e7e5e4;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="hero-content" style="text-align: center;">
                    <h1 class='txtelegantshadow'>LẠC TỶ II</h1>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="welcome_area bg-img background-overlay">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="center-outer">
                    <div class="center-inner">
                        <div class="hero-content bubbles">
                            <h1 >LẠC TỶ II</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-padding-40 clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-12 mt-15">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01"><?php echo $lang_header_category; ?></label>
                    </div>
                    <select class="custom-select" id="category" style="height: 50px;">
                        <?php
                        $sql  =  "select distinct ywsm  from CLLBZL where ywsm <> ''  order by ywsm";
                        $rs = odbc_exec($conn_erp, $sql);
                        while (odbc_fetch_row($rs)) {
                            echo "<option value='" . odbc_result($rs, 'ywsm') . "'>" . odbc_result($rs, 'ywsm') . "</option>";
                        }
                        ?>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" onclick="showMaterial()" style="width: 100px;"><?php echo $lang_header_search; ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-padding-0-40 clearfix">
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