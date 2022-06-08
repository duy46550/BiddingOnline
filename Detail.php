<?php include("./Header.php") ?>
<section class="section-padding-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="btn-group btn-breadcrumb" aria-label="breadcrumb">
                    <a href="index.php" class="btn btn-default"><i class="fas fa-home"></i></a>
                    <a href="Detail.php" class="btn btn-default">Detail</a>
                    <a class="btn btn-default">A4 Copy Paper</a>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <div class="col-md-7 detail-image">
                <div class="row">
                    <div class="col-12">
                        <div class=" owl-carousel1 card">
                            <img class="image-primary" src="img/material-img/material-1-1.jpg" alt="">
                            <img class="image-primary" src="img/material-img/material-1-2.jpg" alt="">
                            <img class="image-primary" src="img/material-img/material-1-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 card-submit">
                <div class="">
                    <h5 class="card-header header-detail">A4 Copy Paper</h5>
                    <div class="card-body background-detail">
                        <div class="card-title"> Time Remaining: 10d 20h </div>
                        <div class="card-title"> Bid History: 5 (Bid) </div>
                        <div class="alert alert-info" role="alert">
                            This is a info!
                        </div>
                        <div class=" text-center">
                            <button class="btn btn-success" style="width: 150px; margin-top: 50px" data-toggle="modal" data-target="#modalLoginForm">Sign In To Bid</button>
                            <button class="btn btn-success" style="width: 150px; margin-top: 50px" data-toggle="modal" data-target="#modalBidForm">Submit Bid</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col-12">
                <div class="">
                    <h5 class="card-header header-detail">Description</h5>
                    <div class="card-body background-detail">
                        <p class="card-text" style="color:black">
                            This J.Burrows A4 Copy Paper comes in a 500 sheet ream so you can stock up at once. The paper is ultra smooth to prevent paper jams, meaning fewer interruptions. The paper is environmentally responsible, making it a great option for environmentally conscious users.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Sign In  -->
<div class="modal fade" id="modalBidForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 10%;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Bidding</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <form action="index.php" method="post">
                    <div class="md-form mb-4">
                        <b><Label>Bid Price</Label></b>
                        <input type="text" required="true" class="form-control validate" placeholder="Bid Price">
                    </div>
                    <div class="md-form mb-4">
                        <b><Label>Unit</Label></b>
                        <input type="text" required="true" class="form-control validate" placeholder="Unit">
                    </div>
                    <div class="md-form mb-4">
                        <b><Label>Image</Label></b>
                        <input type="file" required="true" class="form-control validate" placeholder="Image">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<?php include("Footer.php") ?>