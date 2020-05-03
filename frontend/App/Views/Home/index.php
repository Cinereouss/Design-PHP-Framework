<!-- Carousel -->
<section class="section-carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
                foreach ($data['Slides'] as $index => $slide) {
                    if ($index == 0) {
                        echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$index.'" class="active"></li>';
                    } else {
                        echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$index.'" ></li>';
                    }
                }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            foreach ($data['Slides'] as $index => $slide) {
                if($index == 0) {
                    echo '<div class="carousel-item active">
                    <img class="d-block w-100" src="/Public/image/'.$slide->img.'" alt="'.$slide->alt.'">
                </div>';
                } else {
                    echo '<div class="carousel-item">
                    <img class="d-block w-100" src="/Public/image/'.$slide->img.'" alt="'.$slide->alt.'">
                </div>';
                }
            }
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
</section>
<!-- End Carousel -->

<!-- Page Navi -->
<section class="page-navi-panel-btl">
    <div class="container">
        <ul>
            <li>
                <a href="#">Trang chủ</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="#">Sản phẩm</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="#">Đàn guitar</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
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
            <li class="col-6 col-lg-2 col-md-4 col-sm-6">
                <div class="dropdown dropdown-categories">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GUITAR ACOUSTIC
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </li>
            <li class="col-6 col-lg-2 col-md-4 col-sm-6">
                <div class="dropdown dropdown-categories">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GUITAR CLASSIC
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </li>
            <li class="col-6 col-lg-2 col-md-4 col-sm-6">
                <div class="dropdown dropdown-categories">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GUITAR ELECTRIC
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </li>
            <li class="col-6 col-lg-2 col-md-4 col-sm-6">
                <div class="dropdown dropdown-categories">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GUITAR BASE
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </li>
            <li class="col-6 col-lg-2 col-md-4 col-sm-6">
                <div class="dropdown dropdown-categories">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        UKULELE
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </li>
            <li class="col-6 col-lg-2 col-md-4 col-sm-6">
                <div class="dropdown dropdown-categories">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GUITAR SYNTHESIZER
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--End Guitar Catagories -->

<!--Filter -->
<section class="filter-btl">
    <div class="container clear-fix">
        <form action="/Home/sort/1" method="POST">
            <div class="left-filter-btl">
                <span>Tìm theo <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon></span>
                <div class="btn-group">
                    <select class="selectpicker" data-width="fit" name="loaiDan">
                        <option value="0" selected>Loại đàn</option>

                        <?php
                        foreach ($data['LoaiDan'] as $record){
                            echo '<option value="'.$record->id.'">'.$record->ten.'</option>';
                        }
                        ?>

                    </select>
                </div>
                <div class="btn-group">
                    <select class="selectpicker" data-width="fit" name="thuongHieu">
                        <option value="0" selected>Thương hiệu</option>

                        <?php
                        foreach ($data['ThuongHieu'] as $record){
                            echo '<option value="'.$record->id.'">'.$record->ten.'</option>';
                        }
                        ?>

                    </select>
                </div>
                <div class="btn-group">
                    <select class="selectpicker" data-width="fit" name="sortPrice">
                        <option value="NO-ASC-DESC" selected>Giá thành</option>
                        <option value="ASC">Từ thấp tới cao</option>
                        <option value="DESC">Từ cao tới thấp</option>
                    </select>
                </div>
            </div>
            <div class="right-filter-btl">
                <div class="btn-group">
                    <button type="submit" class="btn btn-secondary btn-customize-secondary" name="submit-filter-product"><ion-icon style="display: inline-block; margin-bottom: -3.5px" name="funnel-outline"></ion-icon> Lọc sản phẩm</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Filter -->

<!--Product -->
<section class="section-product">
    <div class="container">

        <div class="row">

            <?php
                foreach ($data['DBData'] as $record):
            ?>
            <div class="product-btl col-6 col-lg-4 col-md-4 col-sm-6">
                <div class="card text-center" style="width: 18rem;">
                    <img src="/Public/image/<?= $record->image ?>" class="card-img-top" alt="product-1">
                    <div class="card-body">
                        <h5 class="card-title"><?= $record->ten ?></h5>
                        <p class="card-title" style="color: red;">Giá: <span class="home-price"><?= $record->giasp ?></span> VNĐ</p>
                        <p class="card-text"><?= $record->tomtat ?></p>
                        <a href="/Product/showDetail/<?= $record->id ?>" class="btn btn-block btn-warning">Chi tiết sản phẩm</a>
                    </div>
                </div>
            </div>
            <?php
                endforeach;
            ?>

        </div>
</section>
<!-- End Product -->

<!-- Pagination -->
<section class="section-pagination">
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">

                <?php
                // Previous
                if ($data['CurrentPage'] > 1 && $data['TotalPage'] > 1){
                    echo '<li class="page-item">
                    <a class="page-link" href="/Home/page/'.($data['CurrentPage'] - 1).'" tabindex="-1" aria-disabled="true">Trước</a>
                </li>';
                }
                ?>

                <?php
                // Total pages
                for($i = 1; $i < $data['TotalPage'] + 1; $i++){
                    if ($i == $data['CurrentPage']) {
                        echo '<li class="page-item active"><a class="page-link" href="/Home/page/'.$i.'">'.$i.'</a></li>';
                    }else {
                        echo '<li class="page-item"><a class="page-link" href="/Home/page/'.$i.'">'.$i.'</a></li>';
                    }
                }
                ?>

                <?php
                // Next
                if ($data['CurrentPage'] < $data['TotalPage'] && $data['TotalPage'] > 1){
                    echo '<li class="page-item">
                    <a class="page-link" href="/Home/page/'.($data['CurrentPage'] + 1).'">Tiếp</a>
                </li>';
                }
                ?>

            </ul>
        </nav>
    </div>
</section>
<!--End Pagination -->


<!-- Infor -->
<section class="section-guitar-infor-btl">
    <div class="infor-container">
        <div class="container infor">
            <h2><strong>HÃNG GUITAR TỐT NHẤT</strong></h2>
            <p>Thật khó để nói rằng cây đàn ghi ta nào tốt nhất… vì nó phụ thuộc vào nhiều thứ: loại dòng nhạc bạn đang
                chơi là nhạc dân gian hay hiện đại, bạn thích giai điệu du dương hay khúc chiết…Nếu như bạn đang có ý
                định tìm kiếm một cây đàn guitar tốt để có âm thanh phát ra sắc bén và đặc sắc nhất thì chúng tôi khuyên
                bạn nên mua đàn guitar tại các cửa hàng đã được chính thức ủy quyền bán hàng nhập khẩu chính hãng.</p>
            <h2><strong>LƯU Ý KHI CHỌN MUA</strong></h2>
            <p>Khi các bạn đến những cửa hàng bán, địa điểm bán đàn guitar thì đừng vì ham rẻ mà bạn mua phải những sản
                phẩm kém chất lượng, bạn cần kiểm tra kỹ lưỡng và nếu như thấy bất cứ một bộ phận nào bị lỏng lẻo, không
                chắc chắn, âm thanh chênh phô khi bạn đã điều chỉnh dây đàn nhiều lần thì dù giá đàn rẻ đến mức nào bạn
                cũng nên từ bỏ ngay ý định mua cây đàn guitar.</p>
            <p>Để mua được cây đàn guitar đảm bảo chất lượng cao thì bạn nên dùng thử trước khi mua, hãy nghe thử âm
                thanh của cây guitar phát ra xem có tạp âm hay không? Nếu như bạn cảm thấy tiếng đàn không kèm theo tạp
                âm thì đó có thế là một cây đàn chất lượng và ngược lại.</p>
            <p>Một cách chuyên nghiệp hơn là bạn hãy thử tất cả các loại đàn với các thương hiệu khác nhau, và với các
                mức giá khác nhau, bạn hãy thử cả những cây đàn guitar đắt tiền và rẻ tiền, sau đó so sánh tiếng đàn
                phát ra, để biết được cây đàn guitar mà bạn định mua có chất lượng không?</p>
        </div>
    </div>
</section>
<!--End Infor -->