<!-- Nav bar -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
                <ion-icon class="logo-image-btl" name="musical-notes-outline"></ion-icon>
                <a class="navbar-brand" href="/Home">Guitar-H2D</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Home">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Thương hiệu đàn
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            foreach ($arrThuongHieu as $record){
                                echo '<a class="dropdown-item" href="/Search/searchLoaiDanThuongHieu/0-'.$record->id.'-ALLPRICE-1">Guitar '.$record->ten.'</a>';
                            }
                            ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Loại đàn
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <?php
                            foreach ($arrLoaiDan as $record){
                                echo '<a class="dropdown-item" href="/Search/searchLoaiDanThuongHieu/'.$record->id.'-0-ALLPRICE-1">Guitar '.$record->ten.'</a>';
                            }
                            ?>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Giỏ hàng <span class="num-in-cart"><?php
                                if(isset($_SESSION['cart'])){
                                    echo count($_SESSION['cart']);
                                } else {
                                    echo '0';
                                }
                                ?></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <?php
                            if (!empty($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $idProduct => $detail) {
                                    echo '<a class="dropdown-item" href="/Product/showDetail/'.$idProduct.'"><img src="/Common/image/'.$detail['image'].'" alt="img-in-cart" height="70px" width=auto> | '.$detail['ten'].' | <strong> '.$detail['soluongdat'].' x '.'<span class="home-price">'.$detail['giasp'].'</span>'.' VNĐ</strong></a>';
                                }
                            } else {
                                echo '<a class="dropdown-item" href="/Cart/index">Giỏ hàng trống</a>';
                            }
                            ?>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Cart/index" style="text-align: center">Xem chi tiết giỏ hàng</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="/Search/searchProducts/1" method="POST" onsubmit="return validateSearchForm()" name="searchForm">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên sản phẩm" aria-label="Search" name="searchKeyword">
                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="btn-search-product">Tìm kiếm</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- Nav bar end-->