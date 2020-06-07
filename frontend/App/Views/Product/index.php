<!-- Page Navi -->
<section class="page-navi-panel-btl">
    <div class="container">
        <ul>
            <li>
                <a href="/Home">Trang chủ</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="/Home">Sản phẩm</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="/Product/showDetail/<?php echo $data['DBData'][0]->id ?>"><?php echo $data['DBData'][0]->ten ?></a>
            </li>
        </ul>
    </div>
</section>
<!--End Page Navi -->

<!-- Guitar Catagories -->
<section class="guitar-catagories-btl">
    <div class="container">
        <h1>
            <ion-icon name="musical-note"></ion-icon>
            - ĐÀN GUITAR
        </h1>
        <ul class="row">

            <?php
            foreach ($arrLoaiDan as $record):
                ?>

                <li class="col-6 col-lg-2 col-md-4 col-sm-6">
                    <div class="dropdown dropdown-categories">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= strtoupper($record->ten) ?>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                            <?php
                            foreach ($data['ThuongHieuLoai'] as $row) {
                                if($row->idLoaiDan == $record->id) {
                                    $tenThuongHieu = 'Đàn '.$row->tenThuongHieu.'-'.$record->ten;
                                    $secretSearchParam = $record->id.'-'.$row->idThuongHieu.'-ALLPRICE-1';

                                    echo '<a class="dropdown-item" href="/Search/searchLoaiDanThuongHieu/'.$secretSearchParam.'">'.$tenThuongHieu.'</a>';
                                }
                            }
                            ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo '/Search/searchLoaiDanThuongHieu/'.$record->id.'-0-ALLPRICE-1' ?>">Tìm tất cả đàn <?= $record->ten ?></a>

                        </div>
                    </div>
                </li>

            <?php
            endforeach;
            ?>
        </ul>
    </div>
</section>
<!--End Guitar Catagories -->

<!-- Product detail -->
<section class="a-product-detail-section">
    <div class="container a-product-detail">

        <div class="container product-name-id">
            <p><span class="product-name"><?= $data['DBData'][0]->ten ?></span><span class="product-id"> ( Mã SP : <?= $data['DBData'][0]->masp ?> )</span></p>
        </div>

        <div class="row">

            <div class="a-product-detail-card col-12 col-lg-4 col-md-4 col-sm-12">
                <div class="detail-image-container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/Common/image/<?= $data['DBData'][0]->image ?>" class="d-block w-100" alt="...">
                            </div>
                            <?php
                            foreach ($data['AnhSanPham'] as $anhSP):
                            ?>
                                <div class="carousel-item">
                                    <img src="/Common/image/<?= $anhSP->link ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php
                            endforeach;
                            ?>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <!-- Modal button -->
                <div class="magnifier-image">
                    <div class="row">
                        <div class="col text-center">
                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalCenter">
                                Xem ảnh lớn
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal button -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><?= $data['DBData'][0]->ten ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="carouselExampleIndicators-inside" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators-inside" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators-inside" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators-inside" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="/Common/image/<?= $data['DBData'][0]->image ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="/public/image/product-detail-4.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="/public/image/product-detail-3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators-inside" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators-inside" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->

            </div>

            <div class="a-product-detail-card col-12 col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header price">
                        GIÁ : <span class="home-price"><?= $data['DBData'][0]->giasp ?></span> VNĐ
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">KHUYẾN MÃI VÀ ƯU ĐÃI</h5>
                        <p class="card-text"><img src="/public/image/icon_check.png" alt="icon_check"> Bảo hành chính hãng</p>
                        <p class="card-text"><img src="/public/image/icon_check.png" alt="icon_check"> Miễn phí công thay dây, chỉnh cần</p>
                        <p class="card-text"><img src="/public/image/icon_check.png" alt="icon_check"> Giao đàn miễn phí khu vực nội thành Hải Phòng</p>
                        <p class="card-text"><img src="/public/image/icon_check.png" alt="icon_check"> Sản phẩm có sẵn tại tất cả showroom</p>
                        <a href="/Order/buyOne/<?= $data['DBData'][0]->id ?>" class="btn btn-success" style="width: 49%;">Mua ngay</a>
                        <a href="/Cart/add/<?= $data['DBData'][0]->id ?>" class="btn btn-outline-warning" style="width: 49%;">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>

            <div class="a-product-detail-card col-12 col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header commitment">
                        CAM KẾT
                    </div>
                    <div class="card-body">
                        <p class="card-text"><img src="/public/image/icon_check.png" alt="icon_check"> Hàng nhập khẩu chính hãng</p>
                        <p class="card-text"><img src="/public/image/icon_check.png" alt="icon_check"> Hệ thống cửa hàng toàn quốc</p>
                        <p class="card-text"><img src="/public/image/icon_check.png" alt="icon_check"> Bảo hành, bảo trì nhanh chóng</p>
                        <p class="card-text"><img src="/public/image/icon_check.png" alt="icon_check"> Cam kết chất lượng hàng hóa</p>
                        <p class="card-text"><img src="/public/image/icon_check.png" alt="icon_check"> Chính sách đổi trả linh hoạt</p>
                    </div>
                </div>

                <div class="card card-location">
                    <div class="card-header location">
                        CHI NHÁNH BÁN LẺ
                    </div>
                    <div class="card-body">
                        <p class="card-text"><img src="/public/image/pin.png" alt="icon_check"> Lãm Hà, Kiến An, Hải Phòng</p>
                        <p class="card-text"><img src="/public/image/pin.png" alt="icon_check"> Đằng Lâm, Hải An, Hải Phòng</p>
                        <p class="card-text"><img src="/public/image/pin.png" alt="icon_check"> Mê Linh, Ngô Quyền ,Hải Phòng</p>
                    </div>
                </div>
            </div>

        </div>
</section>
<!-- Product detail -->

<!-- Section specification -->
<section class="section-specification">
    <div class="container specification-container">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mô tả sản phẩm</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Thông số kĩ thuật</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Video trên tay</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">

            <!-- Mo ta san pham here -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="specification-tab-1">
                    <?= $data['DBData'][0]->mota ?>
                </div>
            </div>
            <!-- End mo ta san pham here -->

            <!-- Thong so ki thuat here -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="specification-tab-2">
                    <?= $data['DBData'][0]->thongso ?>
                </div>
            </div>
            <!-- End thong so ki thuat here -->

            <!-- Youtube Video -->
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class=".specification-tab-3">
                    <div class="video-container">
                        <?= $data['DBData'][0]->linkvd ?>
                    </div>
                    <div class="video-title">Nguồn: Youtube</div>
                </div>
            </div>
            <!-- End Youtube Video -->

        </div>
    </div>
</section>
<!-- End section specification -->
