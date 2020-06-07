<!-- Page Navi -->
<section class="page-navi-panel-btl">
    <div class="container">
        <ul>
            <li>
                <a href="/Home">Trang chủ</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="/Cart">Giỏ hàng</a>
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
                        echo '<td><a href="/Product/showDetail/'.$idProduct.'"><img src="/Common/image/'.$details['image'].'" alt="product-image"></a></td>';
                        echo '<td><a href="/Product/showDetail/'.$idProduct.'">'.$details['ten'].'</a></td>';
                        echo '<td><span class="home-price">'.$details['giasp'].'</span> VNĐ</td>';
                        echo '<td><input id="idProInCart-'.$idProduct.'" style="width: 40px;" type="number" value="'.$details['soluongdat'].'" min="0" max="10"></td>';
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
