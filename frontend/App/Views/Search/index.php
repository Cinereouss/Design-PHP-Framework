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
        <div class="left-filter-btl">
            <span>Kết quả tìm kiếm với từ khóa "<?php echo $data['Keyword'] ?>" <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon></span>
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Có <?php echo $data['TotalPage'] ?> sản phẩm
                </button>
            </div>
        </div>
        <div class="right-filter-btl">
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sắp xếp theo giá
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/Search/searchProductsPerPage/<?php echo $data['Keyword'].'-ASC-1' ?>">Giá tiền từ thấp tới cao</a>
                    <a class="dropdown-item" href="/Search/searchProductsPerPage/<?php echo $data['Keyword'].'-DESC-1' ?>">Giá tiền từ cao tới thấp</a>
                </div>
            </div>
        </div>
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

            <?php
            if(count($data['DBData']) == 0) {
                require_once 'empty.php';
            }
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
                $secretParam = '/Search/searchProductsPerPage/'.$data['Keyword'].'-'.$data['OrderType'].'-';

                // Previous
                if ($data['CurrentPage'] > 1 && $data['TotalPage'] > 1){
                    echo '<li class="page-item">
                    <a class="page-link" href="'.$secretParam.($data['CurrentPage'] - 1).'" tabindex="-1" aria-disabled="true">Trước</a>
                </li>';
                }
                ?>

                <?php
                // Total pages
                for($i = 1; $i < $data['TotalPage'] + 1; $i++){
                    if ($i == $data['CurrentPage']) {
                        echo '<li class="page-item active"><a class="page-link" href="'.$secretParam.$i.'">'.$i.'</a></li>';
                    }else {
                        echo '<li class="page-item"><a class="page-link" href="'.$secretParam.$i.'">'.$i.'</a></li>';
                    }
                }
                ?>

                <?php
                // Next
                if ($data['CurrentPage'] < $data['TotalPage'] && $data['TotalPage'] > 1){
                    echo '<li class="page-item">
                    <a class="page-link" href="'.$secretParam.($data['CurrentPage'] + 1).'">Tiếp</a>
                </li>';
                }
                ?>

            </ul>
        </nav>
    </div>
</section>
<!--End Pagination -->