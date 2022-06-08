<?php include("./Header.php") ?>
<section class="section-padding-40-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="material-topbar d-flex justify-content-between">
                    <div class="btn-group btn-breadcrumb" aria-label="breadcrumb">
                        <a href="index.php" class="btn btn-default"><i class="fas fa-home"></i></a>
                        <a href="Detail.php" class="btn btn-default">Material requirements</a>
                        <a class="btn btn-default">Category</a>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown">
                            <a class="Filter" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                <p><i class="fas fa-filter"></i> Filter</p>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Filter 1</a>
                                <a class="dropdown-item" href="#">Filter 2</a>
                                <a class="dropdown-item" href="#">Filter 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Show Material -->
        <div class="row" style="padding-top: 5px;">
            <?php
            for ($i = 0; $i < 8; $i++) {
            ?>
                <div class="col-md-3">
                    <!-- Single 1 -->
                    <div class="single-material-wrapper card border border-info">
                        <!-- Image -->
                        <div class="material-img">
                            <img src="img/material-img/material-1-1.jpg" alt="" class="mobile-image" style="height: 250px;">
                        </div>
                        <!-- Description -->
                        <div class="material-description card-body">
                            <span> (10)Bid </span>
                            <p class="time-bid" style="color: red;">Bidding Time</p>
                            <!-- Open detail page -->
                            <a href="Detail.php">
                                <h6>Material 1</h6>
                            </a>
                            <!-- Hover Content -->
                            <div class="hover-content-show">
                                <!-- Open detail page -->
                                <div class="add-to-cart-btn">
                                    <a href="Detail.php" class="btn Detail-btn">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="material-topbar d-flex align-items-center justify-content-between">
                    <div class="total-requirements">
                        <p><span>186</span> requirements</p>
                    </div>
                    <div class="d-flex">
                        <!-- Pagination -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("Footer.php") ?>