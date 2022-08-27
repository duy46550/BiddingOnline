<?php include("./Header.php");
include('./conn_erp.php');
$category = "";
if (isset($_GET['category'])) {
    $r = $_GET['category'];
    $sql = "select cllb from CLLBZL where ywsm = '" . $r . "'";
    $rs = odbc_exec($conn_erp, $sql);
    $category = array();
    while (odbc_fetch_row($rs)) {
        array_push($category, odbc_result($rs, 1));
    }
    //var_dump($category);
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
    if (isset($_POST['material_Q1']) && $Q == 1) {
        echo $_POST['material_Q1'];
    } elseif (isset($_POST['material_Q2']) && $Q == 2) {
        echo $_POST['material_Q2'];
    } elseif (isset($_POST['material_Q3']) && $Q == 3) {
        echo $_POST['material_Q3'];
    } elseif (isset($_POST['material_Q4']) && $Q == 4) {
        echo $_POST['material_Q4'];
    }
}

?>
<section class="section-padding-20 material-page">
    <?php if (@$_SESSION['username'] == '') { ?>
        <div class="d-flex justify-content-center mt-30">
            <div class="alert alert-primary" role="alert">
                <?php echo $lang_material_notification; ?> <a href="#" class="alert-link" data-toggle="modal" data-target="#modalLoginForm"><?php echo $lang_material_notification_click; ?></a>
            </div>
        </div>
    <?php } else { ?>
        <div class="row d-flex">
            <div class="material-topbar mr-auto p-2">
                <div class="btn-group btn-breadcrumb" aria-label="breadcrumb">
                    <a href="index.php" class="btn btn-default"><i class="fas fa-home"></i></a>
                    <a class="btn btn-default"><?php echo $lang_banner_title;
                                                echo date(" Y"); ?> </a>
                    <?php
                    if ($r != "") {
                        echo "<a class='btn btn-default'> " . $r . " </a>";
                    }
                    ?>
                </div>
            </div>
            <div class="p-2">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPreviewForm"> <i class="fas fa-plus-circle"></i> <?php echo $lang_material_preview; ?> </button>
            </div>
        </div>

        <div class="row ">
            <div class="table-responsive tableFixHead" style="max-height: 700px;">
                <table class="table table-bordered table-striped table-highlight" style="text-align: center;">
                    <thead class="material-thead">
                        <th class="middles"><?php echo $lang_material_name;  ?></th>
                        <th class="middles"><?php echo $lang_material_quarter; ?> 1</th>
                        <th class="middles"><?php echo $lang_material_quarter; ?> 2</th>
                        <th class="middles"><?php echo $lang_material_quarter; ?> 3</th>
                        <th class="middles"><?php echo $lang_material_quarter; ?> 4</th>
                        <th class="middles"><?php echo $lang_material_company; ?></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i < 10; $i++) { ?>
                            <tr>
                                <form class="form-horizontal" action="#" method="POST">
                                    <input type="text" name="material_code" class="form-control" hidden value=<?php echo $i; ?> />
                                    <td class="middles"> Giấy <?php echo $i; ?> </td>
                                    <td style="vertical-align: middle;"><input type="text" name="material_Q1" required="true" class="form-control" <?php if ($Q != 1) {
                                                                                                                                                        echo "readonly";
                                                                                                                                                    } ?> autocomplete="off" />
                                        <?php if ($Q == 1) { ?>
                                            <input type="submit" name="submit" class="btn btn-primary btn-send" value="<?php echo $lang_material_send; ?>">
                                        <?php } ?>

                                    </td>
                                    <td style="vertical-align: middle;"><input type="text" name="material_Q2" required="true" class="form-control" <?php if ($Q != 2) {
                                                                                                                                                        echo "readonly";
                                                                                                                                                    } ?> autocomplete="off" />
                                        <?php if ($Q == 2) { ?>
                                            <input type="submit" name="submit" class="btn btn-primary btn-send" value="<?php echo $lang_material_send; ?>">
                                        <?php } ?>
                                    </td>
                                    <td style="vertical-align: middle;"><input type="text" name="material_Q3" required="true" class="form-control" <?php if ($Q != 3) {
                                                                                                                                                        echo "readonly";
                                                                                                                                                    } ?> autocomplete="off" />
                                        <?php if ($Q == 3) { ?>
                                            <input type="submit" name="submit" class="btn btn-primary btn-send" value="<?php echo $lang_material_send; ?>">
                                        <?php } ?>
                                    </td>
                                    <td style="vertical-align: middle;"><input type="text" name="material_Q4" required="true" class="form-control" <?php if ($Q != 4) {
                                                                                                                                                        echo "readonly";
                                                                                                                                                    } ?> autocomplete="off" />
                                        <?php if ($Q == 4) { ?>
                                            <input type="submit" name="submit" class="btn btn-primary btn-send" value="<?php echo $lang_material_send; ?>">
                                        <?php } ?>
                                    </td>
                                    <td style="vertical-align: middle;"> 5 </td>
                                    <td style="vertical-align: middle;">
                                        <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#detailMaterial"><?php echo $lang_material_detail; ?></button>
                                    </td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
</section>
<!-- Detail material -->
<div class="modal fade" id="detailMaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100 font-weight-bold"><?php echo $lang_material_detail_title; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">

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
                        <input type="text" required="true" class="form-control validate">
                    </div>
                    <div class="md-form mb-4">
                        <b><Label><?php echo $lang_header_category; ?></Label></b>
                        <select class="form-control validate" aria-label="Default select example">
                            <?php
                            $sql  =  "select distinct ywsm  from CLLBZL where ywsm <> ''  order by ywsm";
                            $rs = odbc_exec($conn_erp, $sql);
                            while (odbc_fetch_row($rs)) {
                                echo "<option value='" . odbc_result($rs, 'ywsm') . "'>" . odbc_result($rs, 'ywsm') . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="md-form mb-4">
                        <b><Label><?php echo $lang_material_detail_unit; ?></Label></b>
                        <input type="text" required="true" class="form-control validate">
                    </div>
                    <div class="md-form mb-4">
                        <b><Label><?php echo $lang_material_detail_specification; ?></Label></b>
                        <textarea required="true" class="form-control validate" cols="15" rows="5"></textarea>
                    </div>
                    <div class="md-form mb-4">
                        <b><Label> <?php echo $lang_material_preview_price; ?></Label></b>
                        <input type="text" required="true" class="form-control validate">
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

<?php include("Footer.php") ?>