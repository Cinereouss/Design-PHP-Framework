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
        <h1><ion-icon name="musical-note"></ion-icon>- ĐÀN GUITAR</h1>
        <ul class="row">
            <li class="col-6 col-lg-2 col-md-4 col-sm-6">
                <div class="dropdown dropdown-categories">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<!-- Cart detail -->
<div class="container">
    <div class="table-responsive-md">
        <table class="table table-cart">
            <thead>
            <tr class="table-warning">
                <th scope="col">STT</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Thành tiền</th>
            </tr>
            </thead>
            <tbody>

            <?php
                if (empty($data['DBData'])){
                    echo '<tr id="check-empty-cart-jq">
                <td>0</td>
                <td>Trống</td>
                <td>Trống</td>
                <td>Trống</td>
                <td>Trống</td>
                <td>0</td>
                </tr>';

                    require_once 'empty.php';
                } else {
                    $countProduct = 1;
                    foreach ($data['DBData'] as $idProduct => $details) {
                        echo '<tr>';
                        echo '<th scope="row">'.$countProduct.'</th>';
                        echo '<td><img src="/public/image/'.$details['image'].'" alt="product-image"></td>';
                        echo '<td>'.$details['ten'].'</td>';
                        echo '<td><span class="home-price">'.$details['giasp'].'</span> VNĐ</td>';
                        echo '<td><input id="idProInCart-'.$idProduct.'" style="width: 40px;" type="number" value="'.$details['soluong'].'" min="0" max="10"></td>';
                        echo '<td><span class="home-price">'.$details['thanhtien'].'</span> VNĐ</td>';
                        echo '</tr>';

                        $countProduct++;
                    }

                }
            ?>
            </tbody>
        </table>
    </div>

    <!-- Total price -->
    <div class="clear-fix">
        <div class="total-price-container">

            <?php
            $totalPrice = 0;
            if(!empty($data['DBData'])){
                foreach ($data['DBData'] as $idProduct => $details) {
                    $totalPrice += $details['thanhtien'];
                }
            }
            echo '<h1>TỔNG GIÁ TRỊ ĐƠN HÀNG: <span id="total-price" class="home-price">'.$totalPrice.' VNĐ</span></h1>';
            ?>

            <a id="btn-update-cart" href="javascript:void(0)" class="btn btn-outline-success" style="width: 49%; margin-top: 10px;">Cập nhật giỏ hàng</a>
            <a id="btn-order-now" href="javascript:void(0)" class="btn btn-success" style="width: 49%; margin-top: 10px;" >Đặt hàng ngay</a>
        </div>
    </div>
    <!-- End total price -->

    <p style="margin-bottom: 30px;">*Click vào <strong>“Cập nhật giỏ hàng”</strong> để cập nhật số lượng. Nhập vào số lượng 0 để xóa sản phẩm khỏi giỏ hàng. Nhấn vào <strong>“Đặt hàng ngay”</strong> để tiến hành đặt hàng.</p>

</div>
<!-- End cart detail -->
