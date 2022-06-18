<?php include("./Header.php");
$category = "";
if (isset($_GET['category'])) {
    $r = $_GET['category'];

    if ($r == 1) {
        $category = $lang_header_category_paper;
    } elseif ($r == 2) {
        $category = $lang_header_category_fabric;
    } elseif ($r == 3) {
        $category = $lang_header_category_leather;
    } elseif ($r == 4) {
        $category = $lang_header_category_machine;
    }
}

//check Quater
$dt =  date('m');
if ($dt >= 1 && $dt <= 3) {
    $Q = 1;
} elseif ($dt >= 4 && $dt <= 6) {
    $Q = 2;
} elseif ($dt >= 7 && $dt <= 9) {
    $Q = 3;
} elseif ($dt >= 10 && $dt <= 12) {
    $Q = 4;
}
if (isset($_POST['submit'])) {
    echo $_POST['material_code'];
    echo "-";
    if (isset($_POST['material_Q1'])) {
        echo $_POST['material_Q1'];
    } elseif (isset($_POST['material_Q2'])) {
        echo $_POST['material_Q2'];
    } elseif (isset($_POST['material_Q3'])) {
        echo $_POST['material_Q3'];
    } elseif (isset($_POST['material_Q4'])) {
        echo $_POST['material_Q4'];
    }
}

?>
<section class="section-padding-40 material-page">
    <div class="row">
        <div class="material-topbar d-flex justify-content-between">
            <div class="btn-group btn-breadcrumb" aria-label="breadcrumb">
                <a href="index.php" class="btn btn-default"><i class="fas fa-home"></i></a>
                <a href="material.php" class="btn btn-default"><?php echo $lang_banner_title;
                                                                echo date(" Y"); ?> </a>
                <?php
                if ($category != "") {
                    echo "<a class='btn btn-default'> " . $category . " </a>";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- <div class="d-flex justify-content-center mt-30">
        <div class="alert alert-primary" role="alert">
            <?php echo $lang_material_notification; ?> <a href="#" class="alert-link" data-toggle="modal" data-target="#modalLoginForm"><?php echo $lang_material_notification_click; ?></a>
        </div>
    </div> -->
    <div class="row ">
        <div class="table-responsive" style="max-height: 700px;">
            <table class="table table-bordered table-striped table-highlight" style="text-align: center;">
                <thead class="material-thead">
                    <th style="width: 200px;vertical-align: middle;"><?php echo $lang_material_name;  ?></th>
                    <th style="vertical-align: middle;"><?php echo $lang_material_quarter; ?> 1</th>
                    <th style="vertical-align: middle;"><?php echo $lang_material_quarter; ?> 2</th>
                    <th style="vertical-align: middle;"><?php echo $lang_material_quarter; ?> 3</th>
                    <th style="vertical-align: middle;"><?php echo $lang_material_quarter; ?> 4</th>
                    <th style="width: 180px;vertical-align: middle;"><?php echo $lang_material_company;  ?></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 10; $i++) { ?>
                        <tr>
                            <form class="form-horizontal" action="#" method="POST">
                                <input type="text" name="material_code" class="form-control" hidden value=<?php echo $i; ?> />
                                <td style="vertical-align: middle;"> Giấy <?php echo $i; ?> </td>
                                <td style="vertical-align: middle;"><input type="text" name="material_Q1" required="true" class="form-control" <?php if ($Q != 1) {
                                                                                                                                                    echo "disabled";
                                                                                                                                                } ?> autocomplete="off" />
                                    <?php if ($Q == 1) { ?>
                                        <input type="submit" name="submit" class="btn btn-primary btn-send" value="<?php echo $lang_material_send; ?>">
                                    <?php } ?>

                                </td>
                                <td style="vertical-align: middle;"><input type="text" name="material_Q2" required="true" class="form-control" <?php if ($Q != 2) {
                                                                                                                                                    echo "disabled";
                                                                                                                                                } ?> autocomplete="off" />
                                    <?php if ($Q == 2) { ?>
                                        <input type="submit" name="submit" class="btn btn-primary btn-send" value="<?php echo $lang_material_send; ?>">
                                    <?php } ?>
                                </td>
                                <td style="vertical-align: middle;"><input type="text" name="material_Q3" required="true" class="form-control" <?php if ($Q != 3) {
                                                                                                                                                    echo "disabled";
                                                                                                                                                } ?> autocomplete="off" />
                                    <?php if ($Q == 3) { ?>
                                        <input type="submit" name="submit" class="btn btn-primary btn-send" value="<?php echo $lang_material_send; ?>">
                                    <?php } ?>
                                </td>
                                <td style="vertical-align: middle;"><input type="text" name="material_Q4" required="true" class="form-control" <?php if ($Q != 4) {
                                                                                                                                                    echo "disabled";
                                                                                                                                                } ?> autocomplete="off" />
                                    <?php if ($Q == 4) { ?>
                                        <input type="submit" name="submit" class="btn btn-primary btn-send" value="<?php echo $lang_material_send; ?>">
                                    <?php } ?>
                                </td>
                                <td style="vertical-align: middle;"> 5 </td>
                                <td style="vertical-align: middle;">
                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target=".bd-example-modal-lg"><?php echo $lang_material_detail; ?></button>
                                    <!-- <input type="submit" name="submit" class="btn btn-success" value="<?php echo $lang_material_send; ?>"> -->
                                </td>
                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <button type="button" class="btn btn-success mt-5" data-toggle="modal" data-target="#modalPreviewForm"> <i class="fas fa-plus-circle"></i> <?php echo $lang_material_preview; ?> </button>
    </div>
</section>
<!-- Detail material -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top: 50px;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold"><?php echo $lang_material_detail_title; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12 ">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner card">
                                    <div class="carousel-item active">
                                        <img src="img/material-img/material-1-1.jpg" style="width:700px; height: 400px;" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/material-img/material-1-2.jpg" style="width:700px; height: 400px;" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/material-img/material-1-3.jpg" style="width:700px; height: 400px;" alt="">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-12">
                            <div class="">
                                <h5 class="card-header header-detail"> Giấy A4 PAPER ONE</h5>
                                <div class="card-body background-detail">
                                    <div class="card-title"> <b> <?php echo $lang_material_detail_unit; ?>: </b> Thùng </div>
                                    <div class="card-title"> <b> <?php echo $lang_material_detail_specification; ?>: </b> 5 ream/thùng (500 tờ/ream) </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Peview material  -->
<div class="modal fade" id="modalPreviewForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 2%;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold"><?php echo $lang_material_preview; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <form action="index.php" method="post">
                    <div class="md-form mb-4">
                        <b><Label><?php echo $lang_material_quarter; ?></Label></b>
                        <select class="form-control validate" aria-label="Default select example" disabled>
                            <option value="1" <?php if ($Q == 1) {
                                                    echo "selected";
                                                } ?>><?php echo $lang_material_quarter; ?> 1</option>
                            <option value="2" <?php if ($Q == 2) {
                                                    echo "selected";
                                                } ?>><?php echo $lang_material_quarter; ?> 2</option>
                            <option value="3" <?php if ($Q == 3) {
                                                    echo "selected";
                                                } ?>><?php echo $lang_material_quarter; ?> 3</option>
                            <option value="4" <?php if ($Q == 4) {
                                                    echo "selected";
                                                } ?>><?php echo $lang_material_quarter; ?> 4</option>

                        </select>
                    </div>
                    <div class="md-form mb-4">
                        <b><Label><?php echo $lang_material_name; ?></Label></b>
                        <input type="text" required="true" class="form-control validate" placeholder="VD: Giấy A4 Double A">
                    </div>
                    <div class="md-form mb-4">
                        <b><Label><?php echo $lang_header_category; ?></Label></b>
                        <select class="form-control validate" aria-label="Default select example" placeholder="VD: Giấy">
                            <option value="1"><?php echo $lang_header_category_paper; ?></option>
                            <option value="2"><?php echo $lang_header_category_fabric; ?></option>
                            <option value="3"><?php echo $lang_header_category_leather; ?></option>
                            <option value="4"><?php echo $lang_header_category_machine; ?></option>
                        </select>
                    </div>
                    <div class="md-form mb-4">
                        <b><Label><?php echo $lang_material_detail_unit; ?></Label></b>
                        <input type="text" required="true" class="form-control validate" placeholder="VD: Hộp">
                    </div>
                    <div class="md-form mb-4">
                        <b><Label><?php echo $lang_material_detail_specification; ?></Label></b>
                        <textarea required="true" class="form-control validate" placeholder="VD: 500 tờ/ream" cols="15" rows="5"></textarea>
                    </div>
                    <div class="md-form mb-4">
                        <b><Label> <?php echo $lang_material_preview_price; ?></Label></b>
                        <input type="text" required="true" class="form-control validate" placeholder="VD: 86,000">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary"><?php echo $lang_material_send; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/classy-nav.min.js"></script>
<script src="js/func.js"></script>
</body>

</html>